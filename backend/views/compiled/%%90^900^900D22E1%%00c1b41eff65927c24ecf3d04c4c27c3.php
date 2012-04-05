<?php /* Smarty version 2.6.25, created on 2012-03-12 23:57:48
         compiled from tpl/design/stylesheets.tpl */ ?>
<h1>Stylesheets</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/design/stylesheets_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<ul class="item-title">
		<li class="col-first">Item Title</li>
	</ul>
	
	<div class="hug">
	<?php $_from = $this->_tpl_vars['cssList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stylesheet']):
?>
		<div class="item">
		
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/deletestylesheet?filename=<?php echo $this->_tpl_vars['stylesheet']; ?>
" onclick="return confirm('Are you sure you want to delete this stylesheet?')" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete"/></a>
			
			<div class="half-left">
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/editstylesheet?filename=<?php echo $this->_tpl_vars['stylesheet']; ?>
"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-css.gif" alt="<?php echo $this->_tpl_vars['layout']['title']; ?>
" class="icon" /><?php echo $this->_tpl_vars['stylesheet']; ?>
.css</a>
			</div>
			
		<div class="clear"></div>
		</div>
	<?php endforeach; else: ?>
		- no stylesheets -
	<?php endif; unset($_from); ?>
	</div>
	
</div>