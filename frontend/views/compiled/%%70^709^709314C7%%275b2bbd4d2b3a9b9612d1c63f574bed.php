<?php /* Smarty version 2.6.25, created on 2012-03-15 03:21:24
         compiled from fromstring:%3Cdiv+id%3D%22footer%22%3E%0D%0A%09%3Cul%3E%0D%0A%09%09%3Cli%3ECopyright+%C2%A9+%7B%24ProductTitle%7D+2012.%3C/li%3E%0D%0A%09%09%3Cli%3EInstajelly+is+not+endorsed+by+Instagram.%0D%0A%09%09%3Cli%3E%7Bmenu+omit%3Dhome%7D%3Cli%3E%0D%0A%09%3C/ul%3E%0D%0A%3C/div%3E */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'fromstring:<div id="footer">
	<ul>
		<li>Copyright © {$ProductTitle} 2012.</li>
		<li>Instajelly is not endorsed by Instagram.
		<li>{menu omit=home}<li>
	</ul>
</div>', 5, false),)), $this); ?>
<div id="footer">
	<ul>
		<li>Copyright © <?php echo $this->_tpl_vars['ProductTitle']; ?>
 2012.</li>
		<li>Instajelly is not endorsed by Instagram.
		<li><?php echo smarty_function_menu(array('omit' => 'home'), $this);?>
<li>
	</ul>
</div>