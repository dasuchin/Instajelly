<?php /* Smarty version 2.6.25, created on 2012-03-15 15:16:47
         compiled from tpl/slideshows/shows.tpl */ ?>
<h1>Slideshows</h1>

<div class="pad25">

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/slideshows/slideshow_minimenu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<ul class="item-title">
		<li class="col-first">Slideshow</li>
	</ul>
	
	<div class="hug">
	<?php if (! empty ( $this->_tpl_vars['slideshowList'] )): ?>
			<?php $_from = $this->_tpl_vars['slideshowList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['slideshow']):
?>
			<div class="item">
			
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/slideshows/deleteshow?show_id=<?php echo $this->_tpl_vars['slideshow']['id']; ?>
" onclick="return confirm('Are you sure you want to delete this slideshow?');" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete"/></a>
			
				<div class="half-left">
					<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/slideshows/editshow?show_id=<?php echo $this->_tpl_vars['slideshow']['id']; ?>
">
						<?php echo $this->_tpl_vars['slideshow']['title']; ?>
 <span class="small grey">(<?php echo $this->_tpl_vars['slideshow']['keyName']; ?>
)</span>
					</a>
				</div>
			
			<div class="clear"></div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		- no slideshows setup yet -
	<?php endif; ?>
	</div>
	
</div>