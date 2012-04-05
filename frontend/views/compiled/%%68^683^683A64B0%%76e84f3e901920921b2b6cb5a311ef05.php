<?php /* Smarty version 2.6.25, created on 2012-03-15 03:42:28
         compiled from fromstring:%3Cdiv+class%3D%22box%22%3E%0A%3Ch2%3EMy+Account%3C/h2%3E%0A%3Cdiv+class%3D%22content%22%3E%0A%7Bmenu+parent%3D%27login%27%7D%0A%3C/div%3E%0A%3C/div%3E */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'fromstring:<div class="box">
<h2>My Account</h2>
<div class="content">
{menu parent=\'login\'}
</div>
</div>', 4, false),)), $this); ?>
<div class="box">
<h2>My Account</h2>
<div class="content">
<?php echo smarty_function_menu(array('parent' => 'login'), $this);?>

</div>
</div>