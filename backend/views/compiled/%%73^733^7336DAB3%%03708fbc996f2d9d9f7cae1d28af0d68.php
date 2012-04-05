<?php /* Smarty version 2.6.25, created on 2012-04-03 23:26:49
         compiled from tpl/content/page.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/page.js"></script>

<h1><?php if ($this->_tpl_vars['pageInfo']): ?>Edit<?php else: ?>Creating<?php endif; ?> Page</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/editpage" id="pageForm">
		
		<input type="hidden" name="dosave" value="1"/>
		<input type="hidden" name="page_id" value="<?php echo $this->_tpl_vars['pageInfo']['id']; ?>
"/>
		<input type="hidden" name="page_displayOrder" value="<?php echo $this->_tpl_vars['pageInfo']['displayOrder']; ?>
"/>
		
		<div id="tabs">
			<div class="bar">
				<ul>
					<li><a href="#pageParent" onclick="return false;">Parent</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="pageParent">
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
					<li><a href="#pageTitle" onclick="return false;">Page Title</a></li>
					<li><a href="#pageIdentifier" onclick="return false;">Identifier</a></li>
					<li><a href="#pageUrl" onclick="return false;">URL</a></li>
					<li><a href="#pageTarget" onclick="return false;">Target</a></li>
					<li><a href="#meta" onclick="return false;">Meta</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="pageTitle">
				<input type="text" name="page_title" value="<?php echo $this->_tpl_vars['pageInfo']['title']; ?>
" class="text"/>
			</div>
			
			<div class="block_content tab_content" id="pageIdentifier">
				<input type="text" name="page_keyname" class="text" value="<?php echo $this->_tpl_vars['pageInfo']['keyName']; ?>
"/><br/>
				<span class="small">used for blocks</span> <span class="small">(optional, will autogenerate)</span>
			</div>
			
			<div class="block_content tab_content" id="pageUrl">
				<input type="text" name="page_url" class="text" value="<?php echo $this->_tpl_vars['pageInfo']['url']; ?>
"/><br/>
				<span class="small">(optional, will autogenerate)</span>
			</div>
			
			<div class="block_content tab_content" id="pageTarget">
				<select name="page_windowaction" class="select">
					<option value="_self" <?php if ($this->_tpl_vars['pageInfo']['windowaction'] == '_self'): ?>selected="selected"<?php endif; ?>>Same window</option>
					<option value="_blank" <?php if ($this->_tpl_vars['pageInfo']['windowaction'] == '_blank'): ?>selected="selected"<?php endif; ?>>New window</option>
				</select>
			</div>
			
			<div class="block_content tab_content" id="meta">
				<table width="100%">
					<tr>
						<td width="15%"><label>Title</label></td>
						<td><input type="text" name="meta_title" value="<?php echo $this->_tpl_vars['pageInfo']['meta']['title']; ?>
" class="text lrg"/></td>
					</tr>
					<tr>
						<td><label>Description</label></td>
						<td><input type="text" name="meta_description" value="<?php echo $this->_tpl_vars['pageInfo']['meta']['description']; ?>
" class="text lrg"/></td>
					</tr>
					<tr>
						<td><label>Keywords</label></td>
						<td><input type="text" name="meta_keywords" value="<?php echo $this->_tpl_vars['pageInfo']['meta']['keywords']; ?>
" class="text lrg"/></td>
					</tr>
				</table>
			</div>
		
		</div><!-- tabs -->
		
		<div id="tabs3">
			
			<div class="bar">
				<ul>
					<li><a href="#mainContent" onclick="return false;">Content</a></li>
					<li><a href="#sidebarLeft" onclick="return false;">Left Sidebar</a></li>
					<li><a href="#sidebarRight" onclick="return false;">Right Sidebar</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="mainContent">
				<textarea name="page_content" class="textarea code wysiwyg"><?php echo $this->_tpl_vars['pageInfo']['content']; ?>
</textarea>
			</div>
			
			<div class="block_content tab_content" id="sidebarLeft">
				<textarea name="page_sidebars[left]" class="textarea code"><?php echo $this->_tpl_vars['pageInfo']['sidebars']['left']['content']; ?>
</textarea>
			</div>
			
			<div class="block_content tab_content" id="sidebarRight">
				<textarea name="page_sidebars[right]" class="textarea code"><?php echo $this->_tpl_vars['pageInfo']['sidebars']['right']['content']; ?>
</textarea>
			</div>
			
		</div><!-- tabs -->
		
		<div class="section">
		
		<label>Layout</label>
		<select name="page_layout_id" class="select sml">
			<?php $_from = $this->_tpl_vars['layouts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['layout']):
?>
				<option value="<?php echo $this->_tpl_vars['layout']['id']; ?>
" <?php if ($this->_tpl_vars['layout']['id'] == $this->_tpl_vars['pageInfo']['layout_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['layout']['title']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
		
		<label>Status</label>
		<select name="page_status" class="select sml">
			<option value="published" <?php if ($this->_tpl_vars['pageInfo']['status'] == 'published'): ?>selected="selected"<?php endif; ?>>published</option>
			<option value="draft" <?php if ($this->_tpl_vars['pageInfo']['status'] == 'draft'): ?>selected="selected"<?php endif; ?>>draft</option>
			<option value="hidden" <?php if ($this->_tpl_vars['pageInfo']['status'] == 'hidden'): ?>selected = "selected"<?php endif; ?>>hidden</option>
		</select>
		
		</div><!-- section -->
		
		<div class="btns clear">
			<input type="submit" name="submit" value="Save" class="btn sml" onclick="ajaxSavePage(); return false;"/>
			<input type="submit" name="submit" value="Save and Close" class="btn med" />
			<?php if ($this->_tpl_vars['pageInfo']['url']): ?><a href="<?php echo $this->_tpl_vars['pageInfo']['url']; ?>
?preview=1" class="butt" target="_blank">View Page</a><?php endif; ?>
		</div>
		
	</form>
	
</div>