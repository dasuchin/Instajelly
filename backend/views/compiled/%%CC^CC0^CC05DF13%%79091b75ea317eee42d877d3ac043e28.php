<?php /* Smarty version 2.6.25, created on 2012-03-22 01:51:26
         compiled from tpl/templates/templates.tpl */ ?>
<h1><?php echo $this->_tpl_vars['group']; ?>
 Templates</h1>

<div class="pad25">

	<ul class="item-title">
		<li class="col-first">Name</li>
	</ul>
	
	<div class="hug">
	<?php if (! empty ( $this->_tpl_vars['templateList'] )): ?>
			<?php $_from = $this->_tpl_vars['templateList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['template']):
?>
			<div class="item" id="blockcontainer_<?php echo $this->_tpl_vars['template']['id']; ?>
">
				
				<div class="half-left">
					<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/template/edittemplate?template_id=<?php echo $this->_tpl_vars['template']['id']; ?>
&amp;group=<?php echo $this->_tpl_vars['group']; ?>
"><?php echo $this->_tpl_vars['template']['name']; ?>
</a>
				</div>
				
			<div class="clear"></div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		- no templates setup yet -
	<?php endif; ?>
	</div>
	
</div>