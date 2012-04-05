<?php /* Smarty version 2.6.25, created on 2012-03-22 01:51:28
         compiled from tpl/templates/template.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'tpl/templates/template.tpl', 38, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/template.js"></script>

<h1>Edit <?php echo $this->_tpl_vars['group']; ?>
 Template</h1>

<div class="pad25">

	<form method="post" action="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/template/edittemplate" id="templateForm">
		
		<input type="hidden" name="dosave" value="1"/>
		<input type="hidden" name="template_id" value="<?php echo $this->_tpl_vars['templateInfo']['id']; ?>
"/>
		<input type="hidden" name="group" value="<?php echo $this->_tpl_vars['group']; ?>
"/>
		
		<div id="tabs">
			
			<div class="bar">
				<ul>
					<li><a href="#templateName" onclick="return false;">Name</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="templateName">
				<?php echo $this->_tpl_vars['templateInfo']['name']; ?>
 (<?php echo $this->_tpl_vars['templateInfo']['keyName']; ?>
)
			</div>
			
		</div><!-- tabs -->
		
		<div id="tabs2">
			
			<div class="bar">
				<ul>
					<li><a href="#mainContent" onclick="return false;">Content</a></li>
					<li><a href="#leftContent" onclick="return false;">Left Sidebar</a></li>
					<li><a href="#rightContent" onclick="return false;">Right Sidebar</a></li>
				</ul>
			</div>
			
			<div class="block_content tab_content" id="mainContent">
				<textarea name="template_content" class="textarea code"><?php echo ((is_array($_tmp=$this->_tpl_vars['templateInfo']['content'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</textarea>
			</div>
			
			<div class="block_content tab_content" id="leftContent">
				<textarea name="template_left_sidebar" class="textarea code"><?php echo $this->_tpl_vars['templateInfo']['left_sidebar']; ?>
</textarea>
			</div>
			
			<div class="block_content tab_content" id="rightContent">
				<textarea name="template_right_sidebar" class="textarea code"><?php echo $this->_tpl_vars['templateInfo']['right_sidebar']; ?>
</textarea>
			</div>
			
		</div><!-- tabs -->
		
		<div class="btns clear">
			<input type="submit" name="submit" value="Save" class="btn sml" onclick="ajaxSaveTemplate(); return false;"/>
			<input type="submit" name="submit" value="Save and Close" class="btn med" />
		</div>
		
	</form>
		
</div>