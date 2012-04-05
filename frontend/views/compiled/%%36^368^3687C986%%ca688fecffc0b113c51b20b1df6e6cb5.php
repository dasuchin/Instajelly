<?php /* Smarty version 2.6.25, created on 2012-03-11 16:48:03
         compiled from fromstring:%3Cscript+type%3D%22text/javascript%22+src%3D%22/frontend/views/js/userProfile.js%22%3E%3C/script%3E%0D%0A%0D%0A%3Ch1%3EMy+Profile%3C/h1%3E%0D%0A%3Cdiv+class%3D%22pad10%22%3E%0D%0A%7Bif+%24message%7D%0D%0A%3Cdiv+class%3D%22success%22%3E%7B%24message%7D%3C/div%3E%3Cbr/%3E%0D%0A%7B/if%7D%0D%0A%3Cdiv%3E%0D%0A%09%3Cform+method%3D%22post%22+action%3D%22/User/saveprofile%22+id%3D%22userprofile_form%22%3E%0D%0A%09%09%3Cinput+type%3D%22hidden%22+name%3D%22user_id%22+value%3D%22%7B%24userInfo.id%7D%22/%3E%0D%0A%09%09%3Ctable+width%3D%22100%25%22+class%3D%22form%22%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd+width%3D%2220%25%22%3E%3Clabel%3EEmail%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+name%3D%22user_email%22+value%3D%22%7B%24userInfo.email%7D%22+class%3D%22text+lrg%22+readonly/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3ECompany%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_company%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.company%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3ETitle%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_title%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.title%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3EFirst+Name%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_fName%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.fName%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3ELast+Name%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_lName%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.lName%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3EPhone%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_phone%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.phone%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3EAddress%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_address%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.address%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3EAddress+2%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_address2%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.address2%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3ECountry%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_country%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.country%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3ECity%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_city%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.city%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3EProvince%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_province%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.province%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3EZip%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22text%22+name%3D%22user_zip%22+class%3D%22text+lrg%22+value%3D%22%7B%24userInfo.zip%7D%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%09%3Ctr%3E%0D%0A%09%09%09%09%3Ctd%3E%3Clabel%3E%3C/label%3E%3C/td%3E%0D%0A%09%09%09%09%3Ctd%3E%3Cinput+type%3D%22submit%22+value%3D%22Save%22+class%3D%22button-blue%22/%3E%3C/td%3E%0D%0A%09%09%09%3C/tr%3E%0D%0A%09%09%3C/table%3E%0D%0A%09%3C/form%3E%0D%0A%3C/div%3E%0D%0A%3C/div%3E */ ?>
<script type="text/javascript" src="/frontend/views/js/userProfile.js"></script>

<h1>My Profile</h1>
<div class="pad10">
<?php if ($this->_tpl_vars['message']): ?>
<div class="success"><?php echo $this->_tpl_vars['message']; ?>
</div><br/>
<?php endif; ?>
<div>
	<form method="post" action="/User/saveprofile" id="userprofile_form">
		<input type="hidden" name="user_id" value="<?php echo $this->_tpl_vars['userInfo']['id']; ?>
"/>
		<table width="100%" class="form">
			<tr>
				<td width="20%"><label>Email</label></td>
				<td><input name="user_email" value="<?php echo $this->_tpl_vars['userInfo']['email']; ?>
" class="text lrg" readonly/></td>
			</tr>
			<tr>
				<td><label>Company</label></td>
				<td><input type="text" name="user_company" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['company']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Title</label></td>
				<td><input type="text" name="user_title" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['title']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>First Name</label></td>
				<td><input type="text" name="user_fName" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['fName']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Last Name</label></td>
				<td><input type="text" name="user_lName" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['lName']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Phone</label></td>
				<td><input type="text" name="user_phone" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['phone']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Address</label></td>
				<td><input type="text" name="user_address" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['address']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Address 2</label></td>
				<td><input type="text" name="user_address2" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['address2']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Country</label></td>
				<td><input type="text" name="user_country" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['country']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>City</label></td>
				<td><input type="text" name="user_city" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['city']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Province</label></td>
				<td><input type="text" name="user_province" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['province']; ?>
"/></td>
			</tr>
			<tr>
				<td><label>Zip</label></td>
				<td><input type="text" name="user_zip" class="text lrg" value="<?php echo $this->_tpl_vars['userInfo']['zip']; ?>
"/></td>
			</tr>
			<tr>
				<td><label></label></td>
				<td><input type="submit" value="Save" class="button-blue"/></td>
			</tr>
		</table>
	</form>
</div>
</div>