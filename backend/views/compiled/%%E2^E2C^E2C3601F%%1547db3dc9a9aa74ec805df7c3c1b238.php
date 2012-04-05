<?php /* Smarty version 2.6.25, created on 2012-03-17 00:09:47
         compiled from tpl/administration/user.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/user.js"></script>

<h1><?php if ($this->_tpl_vars['userInfo']): ?>Edit<?php else: ?>Creating<?php endif; ?> User</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/administration/users_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/users/edituser">
		
		<input type="hidden" name="dosave" value="1"/>
		<input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['userInfo']['id']; ?>
"/>
		
		<div id="tabs">
			<div class="bar">
				<ul>
					<li><a href="#userInfo" onclick="return false;">Information</a></li>
					<li><a href="#admin_permissions" onclick="return false;">Permissions</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="userInfo">
			
				<label>User Type</label><br/>
				<select name="user_type" onchange="togglePermissions();" class="select">
					<option value="user" <?php if ($this->_tpl_vars['userInfo']['type'] == 'user'): ?>selected="selected"<?php endif; ?>>Normal</option>
					<option value="admin" <?php if ($this->_tpl_vars['userInfo']['type'] == 'admin'): ?>selected="selected"<?php endif; ?>>Administrator</option>
				</select><br/><br/>

				<label>First Name</label><br/>
				<input type="text" name="user_fname" value="<?php echo $this->_tpl_vars['userInfo']['fName']; ?>
" class="text"/><br/><br/>
				
				<label>Last Name</label><br/>
				<input type="text" name="user_lname" value="<?php echo $this->_tpl_vars['userInfo']['lName']; ?>
" class="text"/><br/><br/>
				
				<label>Title</label><br/>
				<input type="text" name="user_title" value="<?php echo $this->_tpl_vars['userInfo']['title']; ?>
" class="text"/><br/><br/>
				
				<label>Email</label><br/>
				<input type="text" name="user_email" value="<?php echo $this->_tpl_vars['userInfo']['email']; ?>
" class="text" autocomplete="off"/><br/><br/>
				
				<?php if ($this->_tpl_vars['userInfo']['id']): ?>
					
					<label>Change Password</label><br/>
					
				<?php else: ?>
					
					<label>Password</label><br/>
					
				<?php endif; ?>
				
				<input type="password" name="user_password" value=""  autocomplete="off" class="text"/><br/><br/>
				
				<label>Confirm Password</label><br/>
				<input type="password" name="user_password2" value=""  autocomplete="off" class="text"/><br/><br/>

				
			</div>
			
			<div class="block_content tab_content" id="admin_permissions">
				
				<div class="white">
					<div class="pad10">
						<?php if ($this->_tpl_vars['userInfo']['id'] == $this->_tpl_vars['UserInfo']['id']): ?>
							<p>You cannot edit your own permissions</p>
							<?php $_from = $this->_tpl_vars['permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['permission']):
?>
								<?php if ($this->_tpl_vars['permission']['hasPermission']): ?>
									<input type="hidden" name="user_permissions[]" value="<?php echo $this->_tpl_vars['permission']['id']; ?>
"/>
								<?php endif; ?>
							<?php endforeach; endif; unset($_from); ?>
						<?php else: ?>
							<ul class="permissions-list">
							<?php $_from = $this->_tpl_vars['permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['permission']):
?>
								<li><input type="checkbox" name="user_permissions[]" value="<?php echo $this->_tpl_vars['permission']['id']; ?>
" <?php if ($this->_tpl_vars['permission']['hasPermission']): ?>checked="checked"<?php endif; ?>> <b><?php echo $this->_tpl_vars['permission']['name']; ?>
</b> - <span class="small"><?php echo $this->_tpl_vars['permission']['description']; ?>
</span></li>
							<?php endforeach; endif; unset($_from); ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
				
			</div>
			
		</div><!-- tab-->

		<div class="btns clear">
			<input type="submit" name="submit" value="Save" class="btn sml" onclick="return validUserForm();"/>
			<input type="submit" name="submit" value="Save and Close" class="btn med"  onclick="return validUserForm();"/>
		</div>
		
	</form>
		
</div>