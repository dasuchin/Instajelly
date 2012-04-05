<?php /* Smarty version 2.6.25, created on 2012-03-16 03:49:57
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0D%0A%0D%0A%3Ch1+id%3D%22instajelly%22%3E%3Ca+href%3D%22/%22%3E%3Cimg+src%3D%22/bento/img/icon-instajelly.png%22+alt%3D%22Instajelly%22+title%3D%22Instajelly%22+width%3D%2275%22+height%3D%2240%22/%3E%3C/h1%3E%0D%0A%0D%0A%7Bblock+identifier%3D%22addthis%22%7D%0D%0A%0D%0A%3Cul+id%3D%22profile%22%3E%0D%0A%09%3Cli%3E%3Cimg+src%3D%22%7B%24profile-%3Edata-%3Eprofile_picture%7D%22+id%3D%22profile-image%22/%3E%3C/li%3E%0D%0A%09%3Cli%3E%3Ca+href%3D%22%7B%24profile-%3Edata-%3Ewebsite%7D%22+id%3D%22profile-name%22+target%3D%22_blank%22%3E%7B%24profile-%3Edata-%3Eusername%7D%3C/a%3E+%3Cdiv+id%3D%22photo-count%22%3E%7B%24profile-%3Edata-%3Ecounts-%3Emedia%7D%3C/div%3E%3Cbr/%3E%0D%0A%09%09%3Cspan+id%3D%22profile-bio%22%3E%7B%24profile-%3Edata-%3Ebio%7D%3C/span%3E%3Cbr/%3E%0D%0A%09%09%3Cspan%3E%7B%24profile-%3Edata-%3Ecounts-%3Efollowed_by%7D+people+love+me%3C/span%3E%0D%0A%09%3C/li%3E%0D%0A%3C/ul%3E%0D%0A%0D%0A%3Cul+id%3D%22photos%22%3E%0D%0A%7Bforeach+from%3D%24media-%3Edata+item%3Dresult%7D%0D%0A%09%3Cli%3E%3Ca+href%3D%22%7B%24result-%3Eimages-%3Estandard_resolution-%3Eurl%7D%22%3E%3Cimg+src%3D%22%7B%24result-%3Eimages-%3Elow_resolution-%3Eurl%7D%22+alt%3D%22%22+title%3D%22%7B%24result-%3Ecaption-%3Etext%7D%22/%3E%3C/a%3E%3C/li%3E%0D%0A%7B/foreach%7D%0D%0A%3C/ul%3E%0D%0A%0D%0A%7Bif+%24more%7D%0D%0A%3Ca+href%3D%22javascript:loadMore%28%27%7B%24profile-%3Edata-%3Eusername%7D%27%29%22+class%3D%22loadmore%22%3EMore%3C/a%3E%0D%0A%7B/if%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'block', 'fromstring:<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<h1 id="instajelly"><a href="/"><img src="/bento/img/icon-instajelly.png" alt="Instajelly" title="Instajelly" width="75" height="40"/></h1>

{block identifier="addthis"}

<ul id="profile">
	<li><img src="{$profile->data->profile_picture}" id="profile-image"/></li>
	<li><a href="{$profile->data->website}" id="profile-name" target="_blank">{$profile->data->username}</a> <div id="photo-count">{$profile->data->counts->media}</div><br/>
		<span id="profile-bio">{$profile->data->bio}</span><br/>
		<span>{$profile->data->counts->followed_by} people love me</span>
	</li>
</ul>

<ul id="photos">
{foreach from=$media->data item=result}
	<li><a href="{$result->images->standard_resolution->url}"><img src="{$result->images->low_resolution->url}" alt="" title="{$result->caption->text}"/></a></li>
{/foreach}
</ul>

{if $more}
<a href="javascript:loadMore(\'{$profile->data->username}\')" class="loadmore">More</a>
{/if}', 5, false),)), $this); ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<h1 id="instajelly"><a href="/"><img src="/bento/img/icon-instajelly.png" alt="Instajelly" title="Instajelly" width="75" height="40"/></h1>

<?php echo smarty_function_block(array('identifier' => 'addthis'), $this);?>


<ul id="profile">
	<li><img src="<?php echo $this->_tpl_vars['profile']->data->profile_picture; ?>
" id="profile-image"/></li>
	<li><a href="<?php echo $this->_tpl_vars['profile']->data->website; ?>
" id="profile-name" target="_blank"><?php echo $this->_tpl_vars['profile']->data->username; ?>
</a> <div id="photo-count"><?php echo $this->_tpl_vars['profile']->data->counts->media; ?>
</div><br/>
		<span id="profile-bio"><?php echo $this->_tpl_vars['profile']->data->bio; ?>
</span><br/>
		<span><?php echo $this->_tpl_vars['profile']->data->counts->followed_by; ?>
 people love me</span>
	</li>
</ul>

<ul id="photos">
<?php $_from = $this->_tpl_vars['media']->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
	<li><a href="<?php echo $this->_tpl_vars['result']->images->standard_resolution->url; ?>
"><img src="<?php echo $this->_tpl_vars['result']->images->low_resolution->url; ?>
" alt="" title="<?php echo $this->_tpl_vars['result']->caption->text; ?>
"/></a></li>
<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['more']): ?>
<a href="javascript:loadMore('<?php echo $this->_tpl_vars['profile']->data->username; ?>
')" class="loadmore">More</a>
<?php endif; ?>