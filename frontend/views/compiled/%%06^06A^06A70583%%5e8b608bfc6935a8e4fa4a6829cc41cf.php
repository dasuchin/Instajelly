<?php /* Smarty version 2.6.25, created on 2012-03-11 19:15:24
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0A%7B%24profile-%3Edata-%3Eusername%7D%3Cbr/%3E%0A%3Ca+href%3D%22%7B%24profile-%3Edata-%3Ewebsite%7D%22+target%3D%22_blank%22%3E%7B%24profile-%3Edata-%3Efull_name%7D%3C/a%3E%3Cbr/%3E%0A%3Cimg+src%3D%22%7B%24profile-%3Edata-%3Eprofile_picture%7D%22/%3E%3Cbr/%3E%0A%7B%24profile-%3Edata-%3Ebio%7D%3Cbr/%3E%0A%3Cbr/%3E%0A%7B%24profile-%3Edata-%3Ecounts-%3Emedia%7D+Photos%3Cbr/%3E%0AFollowing:+%7B%24profile-%3Edata-%3Ecounts-%3Efollows%7D%3Cbr/%3E%0AFollowers:+%7B%24profile-%3Edata-%3Ecounts-%3Efollowed_by%7D%3Cbr/%3E%0A%0A%7Bforeach+from%3D%24media-%3Edata+item%3Dresult%7D%0A%3Cimg+src%3D%22%7B%24result-%3Eimages-%3Elow_resolution-%3Eurl%7D%22/%3E%0A%7B/foreach%7D */ ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>
<?php echo $this->_tpl_vars['profile']->data->username; ?>
<br/>
<a href="<?php echo $this->_tpl_vars['profile']->data->website; ?>
" target="_blank"><?php echo $this->_tpl_vars['profile']->data->full_name; ?>
</a><br/>
<img src="<?php echo $this->_tpl_vars['profile']->data->profile_picture; ?>
"/><br/>
<?php echo $this->_tpl_vars['profile']->data->bio; ?>
<br/>
<br/>
<?php echo $this->_tpl_vars['profile']->data->counts->media; ?>
 Photos<br/>
Following: <?php echo $this->_tpl_vars['profile']->data->counts->follows; ?>
<br/>
Followers: <?php echo $this->_tpl_vars['profile']->data->counts->followed_by; ?>
<br/>

<?php $_from = $this->_tpl_vars['media']->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
<img src="<?php echo $this->_tpl_vars['result']->images->low_resolution->url; ?>
"/>
<?php endforeach; endif; unset($_from); ?>