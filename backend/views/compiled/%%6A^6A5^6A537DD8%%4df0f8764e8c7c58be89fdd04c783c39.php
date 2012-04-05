<?php /* Smarty version 2.6.25, created on 2012-04-05 13:19:51
         compiled from login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title><?php echo $this->_tpl_vars['ProductTitle']; ?>
 Admin</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['bento']; ?>
/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['skin']; ?>
css/login.css"/>
</head>
<body>
	
	<div id="container">
		
		<div id="login-box">
		
		<h1>account login</h1>
		
			<div class="pad25 clear">
				
				<?php if ($this->_tpl_vars['showLogout'] == 1): ?>
					<p><b>You are now logged out, see ya soon!</b></p>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['errorMsg']): ?>
					<div class="error"><?php echo $this->_tpl_vars['errorMsg']; ?>
</div>
				<?php endif; ?>
				
				<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/login/login">
				
				<p>
					<label>email address</label><br/>
					<input type="text" name="email" class="text" tabindex="1"/>
				</p>
				
				<p>
					<label>password</label><br/>
					<input type="password" name="password" class="text" tabindex="2"/>
				</p>
				
				<input type="submit" value="login" class="btn med a-right" tabindex="3"/>
				
				<div class="checkbox">
					<label for="rememberme">remember me</label> <input type="checkbox" id="rememberme"/>
				</div>
				
				</form>
				
				<div class="clear"></div>
				
			</div>
		</div><!-- login-box -->
		
	</div><!-- container -->
	
</body>
</html>