<?php /* Smarty version 2.6.25, created on 2012-03-11 16:52:00
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0A%0A%7Bforeach+from%3D%24media+item%3Dresult%7D%0A%3Cimg+src%3D%22%7B%24result.images.low_resolution%7D%22/%3E%0A%7B/foreach%7D%0A */ ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<?php $_from = $this->_tpl_vars['media']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
<img src="<?php echo $this->_tpl_vars['result']['images']['low_resolution']; ?>
"/>
<?php endforeach; endif; unset($_from); ?>