<?php /* Smarty version 2.6.25, created on 2012-04-05 13:19:53
         compiled from layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'userHasPermission', 'layout.tpl', 52, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title><?php echo $this->_tpl_vars['ProductTitle']; ?>
 Admin</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<style type="text/css" media="all">
		@import url("<?php echo $this->_tpl_vars['bento']; ?>
css/reset.css");
		@import url("<?php echo $this->_tpl_vars['bento']; ?>
css/ui.css");
		@import url("<?php echo $this->_tpl_vars['skin']; ?>
css/base.css");
		@import url("<?php echo $this->_tpl_vars['skin']; ?>
css/black.css");
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['bento']; ?>
js/jquery.tabby.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['skin']; ?>
js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['skin']; ?>
js/ckeditor/adapters/jquery.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['skin']; ?>
js/common.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['skin']; ?>
js/initiate.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['bento']; ?>
js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_tpl_vars['bento']; ?>
js/swfobject.js" type="text/javascript"></script>
<script type="text/javascript">
	var httpUrl = "<?php echo $this->_tpl_vars['httpUrl']; ?>
";
</script>

</head>
<body>

<div id="header">
	<div class="wrap">

		<div id="logo"><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/home/index"><?php echo $this->_tpl_vars['ProductTitle']; ?>
 Admin</a></div>
		<div id="session">
			<a href="/">Dashboard</a> | 
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
" target="_blank">View Website</a> | 
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/login/logout">Logout</a>
		</div>

	</div><!-- wrap -->
</div><!-- header -->

<div id="menu">
		<div class="wrap">
				
				<ul>
					<li>Content <img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-drop.gif" alt="drop"/>
						<ul style="display: none;">
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'content','action' => 'pages')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/pages">Pages</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'content','action' => 'blocks')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/blocks">Blocks</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'slideshows','action' => 'index')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/slideshows/index">Slideshows</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'form','action' => 'index')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/index">Forms</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'template','action' => 'templates')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/template/templates?group=emails">Emails</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'template','action' => 'templates')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/template/templates?group=content">Templates</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
					</li>
					<li>Blog <img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-drop.gif" alt="drop"/>
						<ul style="display: none;">
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'blog','action' => 'categories')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/categories">Categories</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'blog','action' => 'articles')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/articles">Articles</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'blog','action' => 'comments')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/comments">Comments</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'template','action' => 'templates')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/template/templates?group=blog">Templates</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
					</li>
					<li>Design <img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-drop.gif" alt="drop"/>
						<ul style="display: none;">
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'design','action' => 'layouts')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/layouts">Layouts</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'design','action' => 'stylesheets')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/stylesheets">Stylesheets</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
					</li>
					<li>Admin <img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-drop.gif" alt="drop"/>
						<ul style="display: none;">
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'sitesettings','action' => 'index')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/sitesettings/index">Settings</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'users','action' => 'index')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/users/index">Users</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
							<?php $this->_tag_stack[] = array('userHasPermission', array('controller' => 'backup','action' => 'index')); $_block_repeat=true;smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><li><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/backup/index">Backup Database</a></li><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_userHasPermission($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
						</ul>
					</li>
				</ul>
				
				<div class="clear"></div>
		</div><!-- wrap -->
</div><!-- menu -->

<div class="wrap">	
	<div id="container">
		<ul id="alerts">
		<?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
			<li class="<?php echo $this->_tpl_vars['message']['type']; ?>
 temp" style="display: none;"><?php echo $this->_tpl_vars['message']['message']; ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		<?php echo $this->_tpl_vars['content']; ?>

	<div class="clear"></div>	
	</div><!-- container -->
</div><!-- wrap -->

<div id="footer">
	<div class="wrap">
	
			<a href="http://www.bentocms.com">Bento CMS</a>
			
	</div><!-- wrap -->
</div><!-- footer -->
	
</body>
</html>