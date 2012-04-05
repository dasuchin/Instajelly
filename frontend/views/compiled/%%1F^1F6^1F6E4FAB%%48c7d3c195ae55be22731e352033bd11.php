<?php /* Smarty version 2.6.25, created on 2012-03-11 17:24:55
         compiled from fromstring:%3C%21DOCTYPE+html+PUBLIC+%22-//W3C//DTD+XHTML+1.0+Transitional//EN%22+%22http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E%0D%0A%3Chtml+xmlns%3D%22http://www.w3.org/1999/xhtml%22+lang%3D%22en%22+xml:lang%3D%22en%22%3E+%0D%0A%3Chead%3E%0D%0A%09%3Cmeta+http-equiv%3D%22Content-Type%22+content%3D%22text/html%3Bcharset%3Dutf-8%22+/%3E%0D%0A%09%7Bblock+identifier%3D%27layout-title%27%7D%0D%0A%09%7Bblock+identifier%3D%27layout-js%27%7D%0D%0A%09%7Bblock+identifier%3D%27layout-css%27%7D%0D%0A%3C/head%3E+%0D%0A%3Cbody%3E%0D%0A%0D%0A%3Cdiv+id%3D%22main%22%3E%0D%0A%09%0D%0A%09%7Bblock+identifier%3D%27layout-header%27%7D%0D%0A%09%0D%0A%09%3Cdiv+id%3D%22site_content%22%3E%0D%0A%09%09%3Cdiv+id%3D%22panel%22%3E%5Bhero+image+here%5D%3C/div%3E%0D%0A%09%09%3Cdiv+class%3D%22sidebar%22%3E%0D%0A%09%09%09%7B%24sidebar_left%7D%0D%0A%09%09%3C/div%3E%0D%0A%09%09%3Cdiv+id%3D%22content%22%3E%0D%0A%09%09%09%7B%24content%7D%0D%0A%09%09%3C/div%3E%0D%0A%09%09%3Cdiv+id%3D%22site_content_bottom%22%3E%3C/div%3E%0D%0A%09%3C/div%3E%0D%0A%09%0D%0A%09%7Bblock+identifier%3D%27layout-footer%27%7D%0D%0A%09%0D%0A%3C/div%3E%0D%0A%0D%0A%3C/body%3E%0D%0A%3C/html%3E */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'block', 'fromstring:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	{block identifier=\'layout-title\'}
	{block identifier=\'layout-js\'}
	{block identifier=\'layout-css\'}
</head> 
<body>

<div id="main">
	
	{block identifier=\'layout-header\'}
	
	<div id="site_content">
		<div id="panel">[hero image here]</div>
		<div class="sidebar">
			{$sidebar_left}
		</div>
		<div id="content">
			{$content}
		</div>
		<div id="site_content_bottom"></div>
	</div>
	
	{block identifier=\'layout-footer\'}
	
</div>

</body>
</html>', 5, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<?php echo smarty_function_block(array('identifier' => 'layout-title'), $this);?>

	<?php echo smarty_function_block(array('identifier' => 'layout-js'), $this);?>

	<?php echo smarty_function_block(array('identifier' => 'layout-css'), $this);?>

</head> 
<body>

<div id="main">
	
	<?php echo smarty_function_block(array('identifier' => 'layout-header'), $this);?>

	
	<div id="site_content">
		<div id="panel">[hero image here]</div>
		<div class="sidebar">
			<?php echo $this->_tpl_vars['sidebar_left']; ?>

		</div>
		<div id="content">
			<?php echo $this->_tpl_vars['content']; ?>

		</div>
		<div id="site_content_bottom"></div>
	</div>
	
	<?php echo smarty_function_block(array('identifier' => 'layout-footer'), $this);?>

	
</div>

</body>
</html>