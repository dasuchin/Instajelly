<?php /* Smarty version 2.6.25, created on 2012-03-11 17:50:48
         compiled from fromstring:%3Cdiv+id%3D%22header%22%3E%0D%0A%09%3Cdiv+id%3D%22logo%22%3E%0D%0A%09%09%3Cdiv+id%3D%22logo_text%22%3E%0D%0A%09%09%09%3Ch1%3E%7B%24ProductTitle%7D%3C/h1%3E%0D%0A%09%09%3C/div%3E%0D%0A%09%3C/div%3E%0D%0A%09%0D%0A%09%3Cdiv+id%3D%22menubar%22%3E%0D%0A%09%09%7Bmenu%7D%0D%0A%09%3C/div%3E%0D%0A%3C/div%3E%0D%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'fromstring:<div id="header">
	<div id="logo">
		<div id="logo_text">
			<h1>{$ProductTitle}</h1>
		</div>
	</div>
	
	<div id="menubar">
		{menu}
	</div>
</div>
', 9, false),)), $this); ?>
<div id="header">
	<div id="logo">
		<div id="logo_text">
			<h1><?php echo $this->_tpl_vars['ProductTitle']; ?>
</h1>
		</div>
	</div>
	
	<div id="menubar">
		<?php echo smarty_function_menu(array(), $this);?>

	</div>
</div>