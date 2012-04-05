<?php /* Smarty version 2.6.25, created on 2012-03-11 20:56:35
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0A%0A%3Cul+id%3D%22profile%22%3E%0A%09%3Cli%3E%3Cimg+src%3D%22%7B%24profile-%3Edata-%3Eprofile_picture%7D%22+id%3D%22profile-image%22/%3E%3C/li%3E%0A%09%3Cli%3E%3Ca+href%3D%22%7B%24profile-%3Edata-%3Ewebsite%7D%22+id%3D%22profile-name%22+target%3D%22_blank%22%3E%7B%24profile-%3Edata-%3Eusername%7D%3C/a%3E%3Cbr/%3E%0A%09%09%7B%24profile-%3Edata-%3Ecounts-%3Emedia%7D+Photos%3Cbr/%3E%0A%09%09%7B%24profile-%3Edata-%3Ecounts-%3Efollows%7D+I+%3C3%3Cbr/%3E%0A%09%09%7B%24profile-%3Edata-%3Ecounts-%3Efollowed_by%7D+%3C3+me%3C/li%3E%0A%09%3Cli%3E%3Cspan+id%3D%22profile-bio%22%3E%7B%24profile-%3Edata-%3Ebio%7D%3C/span%3E%3C/li%3E%0A%09%3Cli%3E%3Ch1%3E%3Ca+href%3D%22/%22+id%3D%22instajelly%22%3EInstajelly%3C/a%3E%3C/h1%3E%3C/li%3E%0A%3C/ul%3E%0A%0A%3Cul+id%3D%22photos%22%3E%0A%7Bforeach+from%3D%24media-%3Edata+item%3Dresult%7D%0A%09%3Cli%3E%3Cimg+src%3D%22%7B%24result-%3Eimages-%3Elow_resolution-%3Eurl%7D%22/%3E%3C/li%3E%0A%7B/foreach%7D%0A%3C/ul%3E */ ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<ul id="profile">
	<li><img src="<?php echo $this->_tpl_vars['profile']->data->profile_picture; ?>
" id="profile-image"/></li>
	<li><a href="<?php echo $this->_tpl_vars['profile']->data->website; ?>
" id="profile-name" target="_blank"><?php echo $this->_tpl_vars['profile']->data->username; ?>
</a><br/>
		<?php echo $this->_tpl_vars['profile']->data->counts->media; ?>
 Photos<br/>
		<?php echo $this->_tpl_vars['profile']->data->counts->follows; ?>
 I <3<br/>
		<?php echo $this->_tpl_vars['profile']->data->counts->followed_by; ?>
 <3 me</li>
	<li><span id="profile-bio"><?php echo $this->_tpl_vars['profile']->data->bio; ?>
</span></li>
	<li><h1><a href="/" id="instajelly">Instajelly</a></h1></li>
</ul>

<ul id="photos">
<?php $_from = $this->_tpl_vars['media']->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
	<li><img src="<?php echo $this->_tpl_vars['result']->images->low_resolution->url; ?>
"/></li>
<?php endforeach; endif; unset($_from); ?>
</ul>