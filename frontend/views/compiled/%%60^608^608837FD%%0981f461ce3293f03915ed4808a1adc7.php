<?php /* Smarty version 2.6.25, created on 2012-03-11 17:40:01
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0A%0A%7Bforeach+from%3D%24media-%3Edata+item%3Dresult%7D%0A%3Ca+href%3D%22%7B%24result-%3Eimages-%3Ehigh_resolution-%3Eurl%7D%22%3E%3Cimg+src%3D%22%7B%24result-%3Eimages-%3Elow_resolution-%3Eurl%7D%22/%3E%3C/a%3E%0A%7B/foreach%7D */ ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<?php $_from = $this->_tpl_vars['media']->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
<a href="<?php echo $this->_tpl_vars['result']->images->high_resolution->url; ?>
"><img src="<?php echo $this->_tpl_vars['result']->images->low_resolution->url; ?>
"/></a>
<?php endforeach; endif; unset($_from); ?>