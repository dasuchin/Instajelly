<?php /* Smarty version 2.6.25, created on 2012-03-11 00:41:36
         compiled from tpl/community/header.tpl */ ?>
<script>
<?php echo '
	$(document).ready(function(){
		$("#search").click(function() {
			if($("#search").val() == "search community...") {
				$("#search").val("");
			}
		});
		
		$("#search").focusout(function() {
			if($("#search").val() == "") {
				$("#search").val("search community...");
			}
		});
	});
'; ?>

</script>

<div class="wrap">

<div class="yoink community">

<script src="<?php echo $this->_tpl_vars['skin']; ?>
tpl/community/community.js" type="text/javascript"></script>

<h1>Community</h1>

<div class="bar pad15"> 

	<ul class="menu">
		<li>
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
community/index.html">Home</a>  
		</li>
		<?php if ($this->_tpl_vars['loggedIn']): ?>
		<li>
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
community/account.html">Account</a>
		</li>
		<?php endif; ?>
		<li>
			<?php if ($this->_tpl_vars['loggedIn']): ?>
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
community/logout.html">Logout</a>
			<?php else: ?>
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
community/login.html">Login/Register</a>
			<?php endif; ?>
		</li>
	</ul>
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
community/search.html">
		<input type="hidden" name="submit" value="1">
		<input name="search" id="search" value="search community..." class="text small"/>
		<input type="image" src="<?php echo $this->_tpl_vars['skin']; ?>
img/btn/btn-search.png" class="btn-img"/>
	</form>
	
	<div class="clear"></div>
</div><!-- bar -->

<div class="clear"></div>