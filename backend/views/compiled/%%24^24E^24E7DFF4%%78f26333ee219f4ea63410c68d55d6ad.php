<?php /* Smarty version 2.6.25, created on 2012-03-18 17:02:25
         compiled from tpl/design/layout.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/layout.js"></script>

<h1><?php if ($this->_tpl_vars['pageInfo']): ?>Edit<?php else: ?>Creating<?php endif; ?> Layout</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/design/layouts_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/design/editlayout" id="layoutForm">
		
		<input type="hidden" name="dosave" value="1"/>
		<input type="hidden" name="layout_id" value="<?php echo $this->_tpl_vars['layoutInfo']['id']; ?>
"/>
		
		<div id="tabs">
			<div class="bar">
				<ul>
					<li><a href="#layoutTitle" onclick="return false;">Layout Title</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="layoutTitle">
				<input type="text" name="layout_title" value="<?php echo $this->_tpl_vars['layoutInfo']['title']; ?>
" class="text"/><br>
			</div>
			
		</div><!-- tabs-->
		
		<div id="tabs2">
			<div class="bar">
				<ul>
					<li><a href="#layoutHTML" onclick="return false;">HTML</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="layoutHTML">
				<textarea name="layout_code" class="textarea code"><?php echo $this->_tpl_vars['layoutInfo']['code']; ?>
</textarea>
			</div>
			
		</div><!-- tabs-->
		
		<input type="submit" name="submit" value="Save" class="btn sml" onclick="ajaxSaveLayout(); return false;"/>
		<input type="submit" name="submit" value="Save and Close" class="btn med" />
		
	</form>
	
</div>