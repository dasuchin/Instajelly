<?php /* Smarty version 2.6.25, created on 2012-03-18 17:03:17
         compiled from tpl/content/link.tpl */ ?>
<h1><?php if ($this->_tpl_vars['pageInfo']): ?>Edit<?php else: ?>Creating<?php endif; ?> Link</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/editpage">
		
		<input type="hidden" name="dosave" value="1"/>
		<input type="hidden" name="page_id" value="<?php echo $this->_tpl_vars['pageInfo']['id']; ?>
"/>
		<input type="hidden" name="page_displayOrder" value="<?php echo $this->_tpl_vars['pageInfo']['displayOrder']; ?>
"/>
		<input type="hidden" name="page_type" value="link"/>
		<input type="hidden" name="type" value="link"/>
		<input type="hidden" name="page_status" value="published"/>
		
		<div id="tabs">
			<div class="bar">
				<ul>
					<li><a href="#linkParent" onclick="return false;">Parent</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="linkParent">
				<select name="page_parent_id" class="select">
					<option value="none">none</option><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_list_select.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</select>
			</div>
			
		</div><!-- tab-->
		
		<div id="tabs2">
			<div class="bar">
				<ul>
					<li><a href="#linkTitle" onclick="return false;">Link Title</a></li>
					<li><a href="#linkIdentifier" onclick="return false;">Identifier</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="linkTitle">
				<input type="text" name="page_title" value="<?php echo $this->_tpl_vars['pageInfo']['title']; ?>
" class="text"/>
			</div>
			
			<div class="block_content tab_content" id="linkIdentifier">
				<input type="text" name="page_keyName" value="<?php echo $this->_tpl_vars['pageInfo']['keyName']; ?>
" class="text"/>
			</div>

		</div><!-- tab -->
		
		<div id="tabs3">
			<div class="bar">
				<ul>
					<li><a href="#linkURL" onclick="return false;">URL</a></li>
					<li><a href="#linkTarget" onclick="return false;">Target</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="linkURL">
				<input type="text" name="page_content" value="<?php echo $this->_tpl_vars['pageInfo']['content']; ?>
" class="text"/>
			</div>
			
			<div class="block_content tab_content" id="linkTarget">
				<select name="page_windowaction" class="select">
					<option value="_self" <?php if ($this->_tpl_vars['pageInfo']['windowaction'] == '_self'): ?>selected="selected"<?php endif; ?>>Same window</option>
					<option value="_blank" <?php if ($this->_tpl_vars['pageInfo']['windowaction'] == '_blank'): ?>selected="selected"<?php endif; ?>>New window</option>
				</select>
			</div>
			
		</div><!-- tab -->
		
		<div class="btns clear">
			<input type="submit" name="submit" value="Save" class="btn sml" />
			<input type="submit" name="submit" value="Save and Close" class="btn med" />
		</div>
		
	</form>
	
</div>