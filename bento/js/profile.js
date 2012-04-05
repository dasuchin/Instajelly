/** 	AUTHORS 									**/
/** 	David Sasda			davidsasda@gmail.com 	**/
/**		Dustin Carlson		duscar@gmail.com 		**/

$(document).ready(function() {

	enlargePhoto();

})

function enlargePhoto() {

	$('.likes').live('click',function() {
		if($(this).hasClass('liked')) {
			$(this).removeClass('liked')
		} else {
			$(this).addClass('liked')
		}
	})

	$('#photos a:not(.likes)').live('click',function() {
		
		var href = $(this).attr('href')
		var meta = $(this).children('img').attr('title')
		var tags = $(this).parent().parent().children('.ninja').children('#tags').html()
		var comments = $(this).parent().parent().children('.ninja').children('#photo-comments').html()
		var media_id = $(this).parent().parent().children('.ninja').children('#media_id').html()
		var likesCount = $(this).parent().parent().children('.data').children('.likes').children('span').html()
		var commentsCount = $(this).parent().parent().children('.data').children('.comments').children('span').html()
		
		/* create photo container */
		$(this).parent().parent().addClass('active')
		
		/* generate the photo */
		$('#dim').fadeIn()
		$('#photo').html('<img src="'+ href +'" title="'+ meta +'" alt="'+ meta +'"/>')
		$('#photo-title').html(meta)
		$('#meta ul#tags').html(tags)
		$('#meta #photo-comments').html(comments)
		$('#meta #media_id').attr('value',media_id)
		$('#meta a.likes').attr('href', "javascript:like('"+media_id+"')")
		$('#meta #photo-interact .data .data-likes span').html(likesCount)
		$('#meta #photo-interact .data .data-comments span').html(commentsCount)
		$('#current').fadeIn()
		
		$('body').css('overflow','hidden')
					
		return false;

	})
	
	function doIt() {
		var active = $('.active a').attr('href')
		var activetitle = $('.active a').children('img').attr('title')
		var tags = $('.active a').parent().parent().children('.ninja').children('#tags').html()
		var comments = $('.active a').parent().parent().children('.ninja').children('#photo-comments').html()
		var media_id = $('.active a').parent().parent().children('.ninja').children('#media_id').html()
		var likesCount = $('.active a').parent().parent().children('.data').children('.likes').children('span').html()
		var commentsCount = $('.active a').parent().parent().children('.data').children('.comments').children('span').html()
		$('#photo').html('<img src="'+ active +'" title="'+ activetitle +'"/>')
		$('#photo-title').html(activetitle)
		$('#meta ul#tags').html(tags)
		$('#meta ul#photo-comments').html(comments)
		$('#meta #media_id').attr('value',media_id)
		$('#meta a.likes').attr('href', "javascript:like('"+media_id+"')")
		$('#meta #photo-interact .data .data-likes span').html(likesCount)
		$('#meta #photo-interact .data .data-comments span').html(commentsCount)
		$('#photo img, #meta').fadeIn()
	}
	
	/* next + previous arrow */
	$('body').bind('keydown',function(e) {
		
		if(e.keyCode == 37) { // left
			if($('#photos li').hasClass('active')) { 
				if($('.active').is(':first-child')) {
					return false;
				} else {
					$('.active').removeClass().prev().addClass('active')
		    		doIt()
				}
			}
	  	}
	  	else if(e.keyCode == 39 || photo.click) { // right
	  		if($('#photos li').hasClass('active')) { 
		    	if($('.active').is(':last-child')) {
		    		eval($('#moarrr').attr('href'))
		    		doIt()
				} else {
					$('.active').removeClass().next().addClass('active')
					doIt()
				}
			}
	  	}
	  	else if(e.keyCode == 27) { // esc to close
	  		if($('#photos li').hasClass('active')) { 
	  			$('#photo img').fadeOut()
		  		$('#dim').fadeOut()
				$('#photos li').removeClass('active')
				$('body').css('overflow','auto')
			}
	  	}
	});
	
	/* close enlarge */
	$('#dim, #close').live('click',function() {
		$('#dim').fadeOut()
		$('#photos li').removeClass('active')
		$('body').css('overflow','auto')
	});

	$('#photo').live('click',function(event){
	    event.stopPropagation();
	    if($('#photos li').hasClass('active')) { 
	    	if($('.active').is(':last-child')) {
				eval($('#moarrr').attr('href'))
		    	doIt()
			} else {
				$('.active').removeClass().next().addClass('active')
				doIt()
			}
		}
	});
	
	$('#current').live('click',function(event){
		event.stopPropagation();
	})

}

function addComment() {

	var posturl = '/user/comment';
	var comment = $('#commentform input[name=comment]').val();
	var media_id = $('#commentform #media_id').val();
	var viewing = $('ul#profile .profile-name').text();

	if(comment != '') {
	
		$.post(posturl, {media_id: media_id, comment: comment, viewing: viewing},
			function(data) {
				
				var obj = jQuery.parseJSON(data);

				if(obj.username) {
					$('#meta ul#photo-comments').append('<li><a href="#" class="commenter"><img src="'+obj.profile_picture+'" title="'+obj.username+'" class="commenter-photo"/></a><div><a href="#" class="commenter">'+obj.username+'</a> '+comment+'</div></li>');

					$('#commentform input[name=comment]').val('');
				} else {
					window.location = httpUrl+'user/register';
				}

			}
		);

	} else {

		alert('You must enter text to comment.');

	}

	return false;

}

function hasProfile(username) {

	var posturl = '/user/hasprofile';

	$.post(posturl, {username: username},
		function(data) {

			var obj = jQuery.parseJSON(data);

			if(obj.hasprofile == true) {
				window.location = httpUrl+username;
			} else {
				alert('This user has no Instajelly profile');
			}

		}
	);

}

function like(media_id) {


	var posturl = '/user/like';
	var num = $('a[href*="'+media_id+'"]').children('span').text();
	var viewing = $('ul#profile .profile-name').text();
	
	$.post(posturl, {media_id: media_id, viewing: viewing},
		function(data) {
			
			var obj = jQuery.parseJSON(data);

			if(obj.like) {
				$('a[href*="'+media_id+'"]').children('span').html(parseInt(num)+1);
			} else {
				window.location = httpUrl+'user/register';
			}

		}
	);


}

/*$(window).scroll(function(){
	var username = $('#profile-name').text()
	if($('#moarrr').is(':visible')) {
	if ($(window).scrollTop() >= ($(document).height() - ($(window).height()))) {
			loadMore(username, max_id)
		}
	}
})*/

$(window).scroll(function(){
	if ($(window).scrollTop() >= ($(document).height() - ($(window).height()))) {
		$('#totop').fadeIn()
	}
});

$('#totop').click(function() {
	$(this).hide()
	return false;
})

function loadMore(username, max_id) {

	$('#moarrr').removeAttr('href').html('loading...');
	var posturl = '/user/loadimages';

	$.post(posturl, { username: username, max_id: max_id},
		function(data) {
			
			var obj = jQuery.parseJSON(data);
			$('#photos').append(obj.html).fadeIn();
			if(obj.max_id) {
				$('#moarrr').html('more').attr('href', "javascript:loadMore('"+username+"', '"+obj.max_id+"')");
			} else {
				$('#moarrr').remove();
			}			
			
		}
	);

}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
