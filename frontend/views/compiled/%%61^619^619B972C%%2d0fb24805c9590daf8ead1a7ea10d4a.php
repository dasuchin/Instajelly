<?php /* Smarty version 2.6.25, created on 2012-03-11 00:41:36
         compiled from tpl/community/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'preg_replace', 'tpl/community/index.tpl', 17, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/community/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="pad20">

<h2>Welcome to the Community</h2>

<table width="100%" class="zebra" cellspacing="0">
<?php $_from = $this->_tpl_vars['channels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['channel']):
?>
	<tr>
		<th class="first"><?php echo $this->_tpl_vars['channel']['name']; ?>
</th>
		<th class="last" width="50">Threads</th>
	</tr>
	
	<?php $_from = $this->_tpl_vars['categories'][$this->_tpl_vars['channel']['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
		<?php if ($this->_tpl_vars['category']['channelid'] == $this->_tpl_vars['channel']['id']): ?>
		<tr>
			<td><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
community/<?php echo ((is_array($_tmp='/[^a-zA-Z]/')) ? $this->_run_mod_handler('preg_replace', true, $_tmp, '_', $this->_tpl_vars['channel']['name']) : preg_replace($_tmp, '_', $this->_tpl_vars['channel']['name'])); ?>
-<?php echo $this->_tpl_vars['channel']['id']; ?>
/<?php echo ((is_array($_tmp='/[^a-zA-Z]/')) ? $this->_run_mod_handler('preg_replace', true, $_tmp, '_', $this->_tpl_vars['category']['name']) : preg_replace($_tmp, '_', $this->_tpl_vars['category']['name'])); ?>
-<?php echo $this->_tpl_vars['category']['id']; ?>
-1.html" class="parent"><?php echo $this->_tpl_vars['category']['name']; ?>
</a><br/>
			<i class="description"><?php echo $this->_tpl_vars['category']['description']; ?>
</i></td>
			<td class="description" align="center"><?php echo $this->_tpl_vars['category']['threads']; ?>
</td>
		</tr>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	
<?php endforeach; endif; unset($_from); ?>
</table>

</div><!-- pad -->

</div>
</div>