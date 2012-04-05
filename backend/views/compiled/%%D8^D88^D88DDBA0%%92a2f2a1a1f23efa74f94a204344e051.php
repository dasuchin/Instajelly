<?php /* Smarty version 2.6.25, created on 2012-03-15 14:08:04
         compiled from tpl/administration/sitesettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', 'tpl/administration/sitesettings.tpl', 23, false),)), $this); ?>
<h1>Site Settings</h1>

<div class="pad25">
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/sitesettings/index">
	<input type="hidden" name="dosave" value="1"/>

	<?php $this->assign('group', ''); ?>
	
	<?php $_from = $this->_tpl_vars['siteSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['siteSetting']):
?>
		
		<?php if ($this->_tpl_vars['siteSetting']['group'] != $this->_tpl_vars['group']): ?>
			
			<h5><?php echo $this->_tpl_vars['siteSetting']['group']; ?>
 Settings</h5><br/>
			<?php $this->assign('group', $this->_tpl_vars['siteSetting']['group']); ?>
			
		<?php endif; ?>
		
		<div class="pad10">
		<label><?php echo $this->_tpl_vars['siteSetting']['name']; ?>
</label>
		<?php if ($this->_tpl_vars['siteSetting']['values']): ?>
			<select name="sitesettings[<?php echo $this->_tpl_vars['siteSetting']['id']; ?>
]" class="select">
				<?php $this->assign('values', ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['siteSetting']['values']) : explode($_tmp, $this->_tpl_vars['siteSetting']['values']))); ?>
				<?php $_from = $this->_tpl_vars['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
					<option value="<?php echo $this->_tpl_vars['value']; ?>
" <?php if ($this->_tpl_vars['value'] == $this->_tpl_vars['siteSetting']['value']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['value']; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		<?php else: ?>
			<input type="text" name="sitesettings[<?php echo $this->_tpl_vars['siteSetting']['id']; ?>
]" value="<?php echo $this->_tpl_vars['siteSetting']['value']; ?>
" class="text"/>
		<?php endif; ?>
		<span class="small"><?php echo $this->_tpl_vars['siteSetting']['description']; ?>
</span>
		</div>
		
	<?php endforeach; endif; unset($_from); ?>
	
	<div class="btns clear">
		<input type="submit" name="submit" value="Save" class="btn sml"/>
	</div>
	
	</form>
	
</div>