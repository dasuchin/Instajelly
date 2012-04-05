<?php /* Smarty version 2.6.25, created on 2012-03-15 15:16:49
         compiled from tpl/form/form_minimenu.tpl */ ?>
<div class="action">
	<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/forms" class="butt">Current Forms</a>
	<?php if (! empty ( $this->_tpl_vars['submissionInfo'] )): ?>
	<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/viewsubmissions?form_id=<?php echo $this->_tpl_vars['submissionInfo']['0']['form_id']; ?>
" class="butt">Back to Submissions</a>
	<?php endif; ?>
	<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/form/createform" class="butt">+ Add Form</a>
<div class="clear"></div>
</div>
