<?php /* Smarty version 2.6.25, created on 2012-03-11 16:57:17
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0A%0A%7Bforeach+from%3D%24media-%3Edata+item%3Dresult%7D%0A%7B%24result.images%7C%40print_r%7D%0A%7B/foreach%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'fromstring:<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

{foreach from=$media->data item=result}
{$result.images|@print_r}
{/foreach}', 4, false),)), $this); ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<?php $_from = $this->_tpl_vars['media']->data; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['result']):
?>
<?php echo print_r($this->_tpl_vars['result']['images']); ?>

<?php endforeach; endif; unset($_from); ?>