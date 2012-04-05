<?php /* Smarty version 2.6.25, created on 2012-04-03 23:26:45
         compiled from tpl/content/pages.tpl */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/contentpages.js"></script>

<h1>Pages</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<div class="small hand">
		<span onclick="expandAllPages();"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-plus.gif" alt="+"/> Expand all</span>
		<span onclick="collapseAllPages();"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-minus.gif" alt="-"/> Collapse all</span>
	</div>
	
	<ul class="item-title">
		<li class="col-last clone">Status</li>
		<li class="col">Layout</li>
		<li class="col-first">Item Title (identifer)</li>
	</ul>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
</div>