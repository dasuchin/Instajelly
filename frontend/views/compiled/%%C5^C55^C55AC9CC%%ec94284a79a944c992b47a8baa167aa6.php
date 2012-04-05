<?php /* Smarty version 2.6.25, created on 2012-03-11 19:07:42
         compiled from fromstring:%3Cdiv+id%3D%22header%22%3E%0A%09%3Cdiv+id%3D%22menubar%22%3E%0A%09%09%7Bmenu%7D%0A%09%3C/div%3E%0A%3C/div%3E%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'fromstring:<div id="header">
	<div id="menubar">
		{menu}
	</div>
</div>
', 3, false),)), $this); ?>
<div id="header">
	<div id="menubar">
		<?php echo smarty_function_menu(array(), $this);?>

	</div>
</div>