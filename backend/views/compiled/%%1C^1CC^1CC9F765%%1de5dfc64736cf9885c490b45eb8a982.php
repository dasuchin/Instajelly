<?php /* Smarty version 2.6.25, created on 2012-03-15 15:16:49
         compiled from tpl/form/forms.tpl */ ?>
<h1>Forms</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/form/form_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<ul class="item-title">
		<li class="col-first">Title</li>
	</ul>
	
	<div class="hug">
	<?php if (! empty ( $this->_tpl_vars['formList'] )): ?>
			<?php $_from = $this->_tpl_vars['formList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['form']):
?>
			<div class="item" id="formcontainer_<?php echo $this->_tpl_vars['form']['id']; ?>
">
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/deleteform?form_id=<?php echo $this->_tpl_vars['form']['id']; ?>
" onclick="return confirm('Are you sure you want to delete this form?');" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete"/></a>
				
				<div class="half-left">
					<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/editform?form_id=<?php echo $this->_tpl_vars['form']['id']; ?>
"><?php echo $this->_tpl_vars['form']['name']; ?>
</a> <span class="small grey">(<?php echo $this->_tpl_vars['form']['keyName']; ?>
)</span>
				</div>
				
			<div class="clear"></div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		- no forms setup yet -
	<?php endif; ?>
	</div>
	
	
	<?php if (! empty ( $this->_tpl_vars['formList'] )): ?>
	<div class="clear"><br/></div>
	<div class="section pad10">
		<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/exportdata">
		<input type="hidden" name="doexport" value="1"/>

			<label>Form</label> 
			<select name="form_id" class="select sml">
				<?php $_from = $this->_tpl_vars['formList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['form']):
?>
				<option value="<?php echo $this->_tpl_vars['form']['id']; ?>
"><?php echo $this->_tpl_vars['form']['name']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
			
			<label>Start date</label> 
			<input type="text" class="text tny datepicker" name="startDate"/>
			
			<label>End date</label> 
			<input type="text" class="text tny datepicker" name="endDate"/>
			
			<input type="submit" value="Export Data"/>
		
		</form>
	</div>
	<?php else: ?>
		- no forms setup yet -
	<?php endif; ?>
	
	
</div>