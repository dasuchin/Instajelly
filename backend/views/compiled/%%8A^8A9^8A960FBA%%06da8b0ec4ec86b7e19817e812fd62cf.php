<?php /* Smarty version 2.6.25, created on 2012-04-03 23:26:49
         compiled from tpl/content/pages_list_select.tpl */ ?>
<?php if (! $this->_tpl_vars['depth']): ?>
	<?php $this->assign('depth', 0); ?>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['pageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
	
	<?php if ($this->_tpl_vars['page']['id'] != $this->_tpl_vars['pageInfo']['id']): ?>
		
		<option value="<?php echo $this->_tpl_vars['page']['id']; ?>
" <?php if ($this->_tpl_vars['pageInfo']['parent_id'] == $this->_tpl_vars['page']['id']): ?>selected="selected"<?php endif; ?>>
			
			<?php unset($this->_sections['spacer']);
$this->_sections['spacer']['name'] = 'spacer';
$this->_sections['spacer']['loop'] = is_array($_loop=$this->_tpl_vars['depth']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['spacer']['show'] = true;
$this->_sections['spacer']['max'] = $this->_sections['spacer']['loop'];
$this->_sections['spacer']['step'] = 1;
$this->_sections['spacer']['start'] = $this->_sections['spacer']['step'] > 0 ? 0 : $this->_sections['spacer']['loop']-1;
if ($this->_sections['spacer']['show']) {
    $this->_sections['spacer']['total'] = $this->_sections['spacer']['loop'];
    if ($this->_sections['spacer']['total'] == 0)
        $this->_sections['spacer']['show'] = false;
} else
    $this->_sections['spacer']['total'] = 0;
if ($this->_sections['spacer']['show']):

            for ($this->_sections['spacer']['index'] = $this->_sections['spacer']['start'], $this->_sections['spacer']['iteration'] = 1;
                 $this->_sections['spacer']['iteration'] <= $this->_sections['spacer']['total'];
                 $this->_sections['spacer']['index'] += $this->_sections['spacer']['step'], $this->_sections['spacer']['iteration']++):
$this->_sections['spacer']['rownum'] = $this->_sections['spacer']['iteration'];
$this->_sections['spacer']['index_prev'] = $this->_sections['spacer']['index'] - $this->_sections['spacer']['step'];
$this->_sections['spacer']['index_next'] = $this->_sections['spacer']['index'] + $this->_sections['spacer']['step'];
$this->_sections['spacer']['first']      = ($this->_sections['spacer']['iteration'] == 1);
$this->_sections['spacer']['last']       = ($this->_sections['spacer']['iteration'] == $this->_sections['spacer']['total']);
?>
				-
			<?php endfor; endif; ?>
			
			<?php echo $this->_tpl_vars['page']['title']; ?>

		</option>
		
		<?php if (! empty ( $this->_tpl_vars['page']['children'] )): ?>
			
			<?php $this->assign('depth', ($this->_tpl_vars['depth']+1)); ?>
			<?php $this->assign('pageList', $this->_tpl_vars['page']['children']); ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_list_select.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $this->assign('depth', ($this->_tpl_vars['depth']-1)); ?>
			
		<?php endif; ?>
		
		
		
	<?php endif; ?>
	
<?php endforeach; endif; unset($_from); ?>