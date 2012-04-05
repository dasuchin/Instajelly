<?php /* Smarty version 2.6.25, created on 2012-03-22 02:45:04
         compiled from tpl/administration/users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'tpl/administration/users.tpl', 24, false),)), $this); ?>
<h1><?php echo $this->_tpl_vars['userType']; ?>
 Users</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/administration/users_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<ul class="item-title">
		<li class="col-last">Last Login</li>
		<li class="col">Title</li>
		<li class="col-first">Name</li>
	</ul>
	
	<div class="hug">
	<?php if (! empty ( $this->_tpl_vars['userList'] )): ?>
			<?php $_from = $this->_tpl_vars['userList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
			<div class="item" id="usercontainer_<?php echo $this->_tpl_vars['user']['id']; ?>
">
			
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/users/deleteuser?user_id=<?php echo $this->_tpl_vars['user']['id']; ?>
" onclick="return confirm('Are you sure you want to delete this user?');" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete"/></a>
				
				<div class="left">
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/users/edituser?user_id=<?php echo $this->_tpl_vars['user']['id']; ?>
"><?php echo $this->_tpl_vars['user']['fName']; ?>
 <?php echo $this->_tpl_vars['user']['lName']; ?>
</a> <span class="small">(<?php echo $this->_tpl_vars['user']['email']; ?>
)</span>
				</div>

				<div class="col"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['lastLogin'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D") : smarty_modifier_date_format($_tmp, "%D")); ?>
</div>
				<div class="col"><?php echo $this->_tpl_vars['user']['title']; ?>
</div>
			
			<div class="clear"></div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		- no users yet -
	<?php endif; ?>
	</div>
	
</div>