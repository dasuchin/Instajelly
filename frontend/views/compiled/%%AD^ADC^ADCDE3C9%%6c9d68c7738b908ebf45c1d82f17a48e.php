<?php /* Smarty version 2.6.25, created on 2012-03-22 01:37:21
         compiled from fromstring:%3Ch1+id%3D%22instajelly%22%3E%3Ca+href%3D%22/%22%3E%3Cimg+src%3D%22/bento/img/icon-instajelly.png%22+alt%3D%22Instajelly%22+title%3D%22Instajelly%22+width%3D%2275%22+height%3D%2240%22/%3E%3C/h1%3E%0D%0A%0D%0A%3Cul+id%3D%22profile%22%3E%0D%0A%09%3Cli%3E%3Cimg+src%3D%22%7B%24profile-%3Edata-%3Eprofile_picture%7D%22+class%3D%22profile-image%22/%3E%7Bblock+identifier%3D%22social%22%7D%3C/li%3E%0D%0A%09%3Cli%3E%0D%0A%09%09%3Ca+href%3D%22%7B%24profile-%3Edata-%3Ewebsite%7D%22+class%3D%22profile-name%22+target%3D%22_blank%22%3E%7B%24profile-%3Edata-%3Eusername%7D%3C/a%3E%3Cbr/%3E%0D%0A%09%09%3Cspan+class%3D%22photo-count%22%3E%7B%24profile-%3Edata-%3Ecounts-%3Emedia%7D%3Cb+class%3D%22icon%22%3Ep%3C/b%3E%3C/span%3E%0D%0A%09%09%3Cspan+class%3D%22profile-followers%22%3E%7B%24profile-%3Edata-%3Ecounts-%3Efollowed_by%7D+%3Cb+class%3D%22icon%22%3E%2C%3C/b%3E%3C/span%3E%0D%0A%09%09%7Bif+%24profile-%3Edata-%3Ebio%7D%3Cspan+class%3D%22profile-bio%22%3E%7B%24profile-%3Edata-%3Ebio%7D%3C/span%3E%7B/if%7D%0D%0A%3C/li%3E%0D%0A%3C/ul%3E%0D%0A%0D%0A%3Cul+id%3D%22photos%22%3E%0D%0A%7Bforeach+from%3D%24media-%3Edata+item%3Dresult%7D%0D%0A%09%3Cli%3E%0D%0A%09%09%3Cdiv+class%3D%22img%22%3E%0D%0A%09%09%09%3Ca+href%3D%22%7B%24result-%3Eimages-%3Estandard_resolution-%3Eurl%7D%22%3E%3Cimg+src%3D%22%7B%24result-%3Eimages-%3Elow_resolution-%3Eurl%7D%22+alt%3D%22%22+title%3D%22%7B%24result-%3Ecaption-%3Etext%7D%22/%3E%3C/a%3E%0D%0A%09%09%3C/div%3E%0D%0A%09%09%3Cdiv+class%3D%22data%22%3E%0D%0A%09%09%09%3Ca+class%3D%22likes%22+href%3D%22javascript:like%28%27%7B%24result-%3Eid%7D%27%29%3B%22%3E+%3Cspan%3E%7B%24result-%3Elikes-%3Ecount%7D%3C/span%3E+%3Cb+class%3D%22icon%22%3E6%3C/b%3E%3C/a%3E%0D%0A%09%09%09%3Ca+href%3D%22%7B%24result-%3Eimages-%3Estandard_resolution-%3Eurl%7D%22+class%3D%22comments%22%3E+%3Cspan%3E%7B%24result-%3Ecomments-%3Ecount%7D%3C/span%3E+%3Cb+class%3D%22icon%22%3E:%3C/b%3E%3C/a%3E%0D%0A%09%09%3C/div%3E%0D%0A%09%09%3Cdiv+class%3D%22ninja%22%3E%0D%0A%09%09%09%3Cdiv+id%3D%22media_id%22%3E%7B%24result-%3Eid%7D%3C/div%3E%0D%0A%09%09%09%3Cul+id%3D%22tags%22%3E%0D%0A%09%09%09%7Bforeach+from%3D%24result-%3Etags+item%3Dtag%7D%0D%0A%09%09%09%09%3Cli%3E%3Ca+href%3D%22%23%22%3E%23%7B%24tag%7D%3C/a%3E%3C/li%3E%0D%0A%09%09%09%7B/foreach%7D%0D%0A%09%09%09%3C/ul%3E%0D%0A%09%09%09%3Cul+id%3D%22photo-comments%22%3E%0D%0A%09%09%09%7Bforeach+from%3D%24result-%3Ecomments-%3Edata+item%3Dcomment%7D%0D%0A%09%09%09%09%3Cli%3E%3Ca+href%3D%22javascript:hasProfile%28%27%7B%24comment-%3Efrom-%3Eusername%7D%27%29%3B%22+class%3D%22commenter%22%3E%3Cimg+src%3D%22%7B%24comment-%3Efrom-%3Eprofile_picture%7D%22+title%3D%22%7B%24comment-%3Efrom-%3Eusername%7D%22+class%3D%22commenter-photo%22/%3E%3C/a%3E%3Cdiv%3E%3Ca+href%3D%22javascript:hasProfile%28%27%7B%24comment-%3Efrom-%3Eusername%7D%27%29%3B%22+class%3D%22commenter%22%3E%7B%24comment-%3Efrom-%3Eusername%7D%3C/a%3E+%7B%24comment-%3Etext%7D%3C/div%3E%3C/li%3E%0D%0A%09%09%09%7B/foreach%7D%0D%0A%09%09%09%3C/ul%3E%0D%0A%09%09%3C/div%3E%0D%0A%09%3C/li%3E%0D%0A%7B/foreach%7D%0D%0A%3C/ul%3E%0D%0A%0D%0A%3Cdiv+id%3D%22dim%22%3E%0D%0A%3Cul+id%3D%22current%22%3E%0D%0A%09%3Cli+id%3D%22photo%22%3E%3C/li%3E%0D%0A%09%3Cli+id%3D%22meta%22%3E%0D%0A%09%09%3Cdiv+id%3D%22close%22+class%3D%22icon%22%3EX%3C/div%3E%0D%0A%09%09%3Cdiv+id%3D%22meta-head%22%3E%0D%0A%09%09%09%3Cimg+src%3D%22%7B%24profile-%3Edata-%3Eprofile_picture%7D%22+class%3D%22profile-image%22/%3E%0D%0A%09%09%09%3Ca+href%3D%22%7B%24profile-%3Edata-%3Ewebsite%7D%22+class%3D%22profile-name%22+target%3D%22_blank%22%3E%7B%24profile-%3Edata-%3Eusername%7D%3C/a%3E%3Cbr/%3E%0D%0A%09%09%09%3Cspan+class%3D%22photo-count%22%3E%7B%24profile-%3Edata-%3Ecounts-%3Emedia%7D%3Cb+class%3D%22icon%22%3Ep%3C/b%3E%3C/span%3E%0D%0A%09%09%09%3Cspan+class%3D%22profile-followers%22%3E%7B%24profile-%3Edata-%3Ecounts-%3Efollowed_by%7D+%3Cb+class%3D%22icon%22%3E%2C%3C/b%3E%3C/span%3E%0D%0A%09%09%09%7Bif+%24profile-%3Edata-%3Ebio%7D%3Cspan+class%3D%22profile-bio%22%3E%7B%24profile-%3Edata-%3Ebio%7D%3C/span%3E%7B/if%7D%0D%0A%09%09%3C/div%3E%0D%0A%09%09%3Cdiv+id%3D%22photo-info%22%3E%0D%0A%09%09%09%3Ch3+id%3D%22photo-title%22%3E%3C/h3%3E%0D%0A%09%09%09%3Cul+id%3D%22tags%22%3E%3C/ul%3E%0D%0A%09%09%09%3Ca+href%3D%22%23%22+class%3D%22button+likes%22%3E%3Cb+class%3D%22icon%22%3E6%3C/b%3E+Like%3C/a%3E%0D%0A%09%09%3C/div%3E%0D%0A%09%09%3Cdiv+id%3D%22photo-interact%22%3E%0D%0A%09%09%09%3Cul+class%3D%22data%22%3E%0D%0A%09%09%09%09%3Cli+class%3D%22data-likes%22%3E%3Cb+class%3D%22icon%22%3E6%3C/b%3E+%3Cspan%3E%3C/span%3E+Likes%3C/li%3E%0D%0A%09%09%09%09%3Cli+class%3D%22data-comments%22%3E%3Cb+class%3D%22icon%22%3E:%3C/b%3E+%3Cspan%3E%3C/span%3E+Comments%3C/li%3E%0D%0A%09%09%09%3C/ul%3E%0D%0A%09%09%09%3Cul+class%3D%22comment%22%3E%0D%0A%09%09%09%09%3Cli+class%3D%22comment-field%22%3E%0D%0A%09%09%09%09%09%3Cform+id%3D%22commentform%22+onsubmit%3D%22javascript:addComment%28%29%3B+return+false%3B%22%3E%0D%0A%09%09%09%09%09%3Cinput+type%3D%22hidden%22+name%3D%22media_id%22+id%3D%22media_id%22+/%3E%0D%0A%09%09%09%09%09%3Cinput+type%3D%22text%22+name%3D%22comment%22+placeholder%3D%22Write+a+comment...%22/%3E%0D%0A%09%09%09%09%09%3C/form%3E%0D%0A%09%09%09%09%3C/li%3E%0D%0A%09%09%09%3C/ul%3E%0D%0A%09%09%09%3Cul+id%3D%22photo-comments%22%3E%0D%0A%0D%0A%09%09%09%3C/ul%3E%0D%0A%09%09%3C/div%3E%0D%0A%09%3C/li%3E%0D%0A%3C/ul%3E%0D%0A%3C/div%3E%0D%0A%0D%0A%3Ca+href%3D%22%23%22+id%3D%22totop%22%3E%3Cb+class%3D%22icon%22%3EJ%3C/b%3E%3C/a%3E%0D%0A%0D%0A%7Bif+%24more%7D%0D%0A%3Ca+href%3D%22javascript:loadMore%28%27%7B%24profile-%3Edata-%3Eusername%7D%27%29%22+id%3D%22moarrr%22+class%3D%22btn+green%22%3Emore%3C/a%3E%0D%0A%7B/if%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'block', 'fromstring:<h1 id="instajelly"><a href="/"><img src="/bento/img/icon-instajelly.png" alt="Instajelly" title="Instajelly" width="75" height="40"/></h1>

<ul id="profile">
	<li><img src="{$profile->data->profile_picture}" class="profile-image"/>{block identifier="social"}</li>
	<li>
		<a href="{$profile->data->website}" class="profile-name" target="_blank">{$profile->data->username}</a><br/>
		<span class="photo-count">{$profile->data->counts->media}<b class="icon">p</b></span>
		<span class="profile-followers">{$profile->data->counts->followed_by} <b class="icon">,</b></span>
		{if $profile->data->bio}<span class="profile-bio">{$profile->data->bio}</span>{/if}
</li>
</ul>

<ul id="photos">
{foreach from=$media->data item=result}
	<li>
		<div class="img">
			<a href="{$result->images->standard_resolution->url}"><img src="{$result->images->low_resolution->url}" alt="" title="{$result->caption->text}"/></a>
		</div>
		<div class="data">
			<a class="likes" href="javascript:like(\'{$result->id}\');"> <span>{$result->likes->count}</span> <b class="icon">6</b></a>
			<a href="{$result->images->standard_resolution->url}" class="comments"> <span>{$result->comments->count}</span> <b class="icon">:</b></a>
		</div>
		<div class="ninja">
			<div id="media_id">{$result->id}</div>
			<ul id="tags">
			{foreach from=$result->tags item=tag}
				<li><a href="#">#{$tag}</a></li>
			{/foreach}
			</ul>
			<ul id="photo-comments">
			{foreach from=$result->comments->data item=comment}
				<li><a href="javascript:hasProfile(\'{$comment->from->username}\');" class="commenter"><img src="{$comment->from->profile_picture}" title="{$comment->from->username}" class="commenter-photo"/></a><div><a href="javascript:hasProfile(\'{$comment->from->username}\');" class="commenter">{$comment->from->username}</a> {$comment->text}</div></li>
			{/foreach}
			</ul>
		</div>
	</li>
{/foreach}
</ul>

<div id="dim">
<ul id="current">
	<li id="photo"></li>
	<li id="meta">
		<div id="close" class="icon">X</div>
		<div id="meta-head">
			<img src="{$profile->data->profile_picture}" class="profile-image"/>
			<a href="{$profile->data->website}" class="profile-name" target="_blank">{$profile->data->username}</a><br/>
			<span class="photo-count">{$profile->data->counts->media}<b class="icon">p</b></span>
			<span class="profile-followers">{$profile->data->counts->followed_by} <b class="icon">,</b></span>
			{if $profile->data->bio}<span class="profile-bio">{$profile->data->bio}</span>{/if}
		</div>
		<div id="photo-info">
			<h3 id="photo-title"></h3>
			<ul id="tags"></ul>
			<a href="#" class="button likes"><b class="icon">6</b> Like</a>
		</div>
		<div id="photo-interact">
			<ul class="data">
				<li class="data-likes"><b class="icon">6</b> <span></span> Likes</li>
				<li class="data-comments"><b class="icon">:</b> <span></span> Comments</li>
			</ul>
			<ul class="comment">
				<li class="comment-field">
					<form id="commentform" onsubmit="javascript:addComment(); return false;">
					<input type="hidden" name="media_id" id="media_id" />
					<input type="text" name="comment" placeholder="Write a comment..."/>
					</form>
				</li>
			</ul>
			<ul id="photo-comments">

			</ul>
		</div>
	</li>
</ul>
</div>

<a href="#" id="totop"><b class="icon">J</b></a>

{if $more}
<a href="javascript:loadMore(\'{$profile->data->username}\')" id="moarrr" class="btn green">more</a>
{/if}', 4, false),)), $this); ?>
<h1 id="instajelly"><a href="/"><img src="/bento/img/icon-instajelly.png" alt="Instajelly" title="Instajelly" width="75" height="40"/></h1>

<ul id="profile">
	<li><img src="<?php echo $this->_tpl_vars['profile']->data->profile_picture; ?>
" class="profile-image"/><?php echo smarty_function_block(array('identifier' => 'social'), $this);?>
</li>
	<li>
		<a href="<?php echo $this->_tpl_vars['profile']->data->website; ?>
" class="profile-name" target="_blank"><?php echo $this->_tpl_vars['profile']->data->username; ?>
</a><br/>
		<span class="photo-count"><?php echo $this->_tpl_vars['profile']->data->counts->media; ?>
<b class="icon">p</b></span>
		<span class="profile-followers"><?php echo $this->_tpl_vars['profile']->data->counts->followed_by; ?>
 <b class="icon">,</b></span>
		<?php if ($this->_tpl_vars['profile']->data->bio): ?><span class="profile-bio"><?php echo $this->_tpl_vars['profile']->data->bio; ?>
</span><?php endif; ?>
</li>
</ul>

<ul id="photos">
<?php $_from = $this->_tpl_vars['media']->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
	<li>
		<div class="img">
			<a href="<?php echo $this->_tpl_vars['result']->images->standard_resolution->url; ?>
"><img src="<?php echo $this->_tpl_vars['result']->images->low_resolution->url; ?>
" alt="" title="<?php echo $this->_tpl_vars['result']->caption->text; ?>
"/></a>
		</div>
		<div class="data">
			<a class="likes" href="javascript:like('<?php echo $this->_tpl_vars['result']->id; ?>
');"> <span><?php echo $this->_tpl_vars['result']->likes->count; ?>
</span> <b class="icon">6</b></a>
			<a href="<?php echo $this->_tpl_vars['result']->images->standard_resolution->url; ?>
" class="comments"> <span><?php echo $this->_tpl_vars['result']->comments->count; ?>
</span> <b class="icon">:</b></a>
		</div>
		<div class="ninja">
			<div id="media_id"><?php echo $this->_tpl_vars['result']->id; ?>
</div>
			<ul id="tags">
			<?php $_from = $this->_tpl_vars['result']->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag']):
?>
				<li><a href="#">#<?php echo $this->_tpl_vars['tag']; ?>
</a></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
			<ul id="photo-comments">
			<?php $_from = $this->_tpl_vars['result']->comments->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
				<li><a href="javascript:hasProfile('<?php echo $this->_tpl_vars['comment']->from->username; ?>
');" class="commenter"><img src="<?php echo $this->_tpl_vars['comment']->from->profile_picture; ?>
" title="<?php echo $this->_tpl_vars['comment']->from->username; ?>
" class="commenter-photo"/></a><div><a href="javascript:hasProfile('<?php echo $this->_tpl_vars['comment']->from->username; ?>
');" class="commenter"><?php echo $this->_tpl_vars['comment']->from->username; ?>
</a> <?php echo $this->_tpl_vars['comment']->text; ?>
</div></li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
		</div>
	</li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<div id="dim">
<ul id="current">
	<li id="photo"></li>
	<li id="meta">
		<div id="close" class="icon">X</div>
		<div id="meta-head">
			<img src="<?php echo $this->_tpl_vars['profile']->data->profile_picture; ?>
" class="profile-image"/>
			<a href="<?php echo $this->_tpl_vars['profile']->data->website; ?>
" class="profile-name" target="_blank"><?php echo $this->_tpl_vars['profile']->data->username; ?>
</a><br/>
			<span class="photo-count"><?php echo $this->_tpl_vars['profile']->data->counts->media; ?>
<b class="icon">p</b></span>
			<span class="profile-followers"><?php echo $this->_tpl_vars['profile']->data->counts->followed_by; ?>
 <b class="icon">,</b></span>
			<?php if ($this->_tpl_vars['profile']->data->bio): ?><span class="profile-bio"><?php echo $this->_tpl_vars['profile']->data->bio; ?>
</span><?php endif; ?>
		</div>
		<div id="photo-info">
			<h3 id="photo-title"></h3>
			<ul id="tags"></ul>
			<a href="#" class="button likes"><b class="icon">6</b> Like</a>
		</div>
		<div id="photo-interact">
			<ul class="data">
				<li class="data-likes"><b class="icon">6</b> <span></span> Likes</li>
				<li class="data-comments"><b class="icon">:</b> <span></span> Comments</li>
			</ul>
			<ul class="comment">
				<li class="comment-field">
					<form id="commentform" onsubmit="javascript:addComment(); return false;">
					<input type="hidden" name="media_id" id="media_id" />
					<input type="text" name="comment" placeholder="Write a comment..."/>
					</form>
				</li>
			</ul>
			<ul id="photo-comments">

			</ul>
		</div>
	</li>
</ul>
</div>

<a href="#" id="totop"><b class="icon">J</b></a>

<?php if ($this->_tpl_vars['more']): ?>
<a href="javascript:loadMore('<?php echo $this->_tpl_vars['profile']->data->username; ?>
')" id="moarrr" class="btn green">more</a>
<?php endif; ?>