<?php /* Smarty version 2.6.25, created on 2012-03-12 23:47:22
         compiled from tpl/design/stylesheet.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/stylesheet.js"></script>

<h1><?php if ($this->_tpl_vars['pageInfo']): ?>Edit<?php else: ?>Creating<?php endif; ?> Stylesheet</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/design/stylesheets_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/editstylesheet" id="stylesheetForm">
		
		<input type="hidden" name="dosave" value="1"/>
		
		<div id="tabs">
			<div class="bar">
				<ul>
					<li><a href="#stylesheetTitle" onclick="return false;">Stylesheet Title</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="stylesheetTitle">
				<input type="text" name="css_filename" value="<?php echo $this->_tpl_vars['filename']; ?>
" class="text med"/> .css
			</div>
			
		</div><!-- tabs -->
		
		<div id="tabs2">
			<div class="bar">
				<ul>
					<li><a href="#stylesheetCSS" onclick="return false;">CSS Lovin'</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="stylesheetCSS">
				<textarea name="css_content" class="textarea code"><?php echo $this->_tpl_vars['stylesheet']; ?>
</textarea>
			</div>
			
		</div><!-- tabs -->
		
		<input type="submit" name="submit" value="Save" class="btn sml" onclick="ajaxSaveStylesheet(); return false;"/>
		<input type="submit" name="submit" value="Save and Close" class="btn med" />
		
	</form>
	
</div>