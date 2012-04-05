<?php /* Smarty version 2.6.25, created on 2012-03-18 17:02:22
         compiled from tpl/design/layouts.tpl */ ?>
<h1>Layouts</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/design/layouts_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<ul class="item-title">
		<li class="col-first">Item Title</li>
	</ul>
	
	<div class="hug">
	<?php $_from = $this->_tpl_vars['layoutList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layout']):
?>
		<div class="item">
		
			<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/deletelayout?layout_id=<?php echo $this->_tpl_vars['layout']['id']; ?>
" onclick="return confirm('Are you sure you want to delete this layout?')" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete"/></a>
			
			<div class="half-left">
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/editlayout?layout_id=<?php echo $this->_tpl_vars['layout']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-layout.gif" alt="<?php echo $this->_tpl_vars['layout']['title']; ?>
" class="icon"  class="icon"/><?php echo $this->_tpl_vars['layout']['title']; ?>
</a>
			</div>
		
		<div class="clear"></div>
		</div>
	<?php endforeach; endif; unset($_from); ?>
	</div>
	
</div>