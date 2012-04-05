<?php /* Smarty version 2.6.25, created on 2012-04-05 13:19:53
         compiled from tpl/home/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'timeSpan', 'tpl/home/index.tpl', 18, false),array('modifier', 'truncate', 'tpl/home/index.tpl', 76, false),)), $this); ?>
<h1>Dashboard</h1>

<div class="pad25">
	
	<div class="half left">
		<div class="pad10">
			<h5>Recent Users (<?php echo $this->_tpl_vars['userCount']; ?>
) <a href="/admin/users/normalusers" class="more">all</a></h5>
			<table width="100%" class="border table zebra">
				<tr>
					<th>Username</th>
					<th width="35%">Date</th>
				</tr>
				<?php $_from = $this->_tpl_vars['latestUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
				<tr>
					<td>
						<a href="/<?php echo $this->_tpl_vars['user']['username']; ?>
" target="_blank"><?php echo $this->_tpl_vars['user']['username']; ?>
</a>
					</td>
					<td class="small"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']['cDate'])) ? $this->_run_mod_handler('timeSpan', true, $_tmp) : smarty_modifier_timeSpan($_tmp)); ?>
</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</div>
	</div>
	
	<div class="half right">
		<!--<div class="pad10">
			<h5>Popular Searches <a href="" class="more">all</a></h5>
			<table width="100%" class="border table zebra">
				<tr>
					<th>Keyword</th>
					<th width="10">Count</th>
				</tr>
				<?php $_from = $this->_tpl_vars['popularSearches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['search']):
?>
					<tr>
						<td class="small"><?php echo $this->_tpl_vars['search']['searchQuery']; ?>
</td>
						<td class="small center"><?php echo $this->_tpl_vars['search']['count']; ?>
</td>
					</tr>
				<?php endforeach; else: ?>
					<tr>
						<td colspan="2">No searches</td>
					</tr>
				<?php endif; unset($_from); ?>
			</table>
		</div>-->
		<div class="pad10">
			<h5>Latest User Logins <a href="/admin/users/index" class="more">all users</a></h5>
			<table width="100%" class="border table zebra">
				<tr>
					<th>User (company)</th>
					<th width="35%">Date</th>
				</tr>
				<?php $_from = $this->_tpl_vars['latestLogins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userLogin']):
?>
				<tr>
					<td>
						<a href="/admin/users/edituser?user_id=<?php echo $this->_tpl_vars['userLogin']['id']; ?>
"><?php echo $this->_tpl_vars['userLogin']['fName']; ?>
 <?php echo $this->_tpl_vars['userLogin']['lName']; ?>
</a>
						<?php if ($this->_tpl_vars['userLogin']['company']): ?><span class="small grey">(<?php echo $this->_tpl_vars['userLogin']['company']; ?>
)</span><?php endif; ?>
					</td>
					<td class="small"><?php echo ((is_array($_tmp=$this->_tpl_vars['userLogin']['lastLogin'])) ? $this->_run_mod_handler('timeSpan', true, $_tmp) : smarty_modifier_timeSpan($_tmp)); ?>
</td>
				</tr>
				<?php endforeach; endif; unset($_from); ?>
			</table>
		</div>
	</div>
	
	<div class="clear"></div>
	
	<div class="pad10">
		<h5>New Comments To Approve <a href="/admin/blog/comments?status=pending" class="more">all</a></h5>
		<table width="100%" class="border table zebra">
			<tr>
				<th>Comment</th>
			</tr>
			<?php $_from = $this->_tpl_vars['latestComments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
				<tr>
					<td>
						<a href="/admin/blog/comments?status=pending"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
</a>
					</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		</table>
	</div>

	<div class="clear"></div>

</div>