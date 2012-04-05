<?php /* Smarty version 2.6.25, created on 2012-04-03 23:26:45
         compiled from tpl/content/pages_list.tpl */ ?>
<div class="sortable" saveurl="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/savepageorder">
<?php $_from = $this->_tpl_vars['pageList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
	<div class="item<?php if (! empty ( $this->_tpl_vars['page']['children'] )): ?>-parent<?php endif; ?> sort<?php if (! empty ( $this->_tpl_vars['page']['children'] )): ?>-parent<?php endif; ?>" id="page_<?php echo $this->_tpl_vars['page']['id']; ?>
">
		
		<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/deletepage?page_id=<?php echo $this->_tpl_vars['page']['id']; ?>
" onclick="return confirm('Are you sure you want to delete this page?')" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete" title="delete"/></a>
		<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/clonepage?page_id=<?php echo $this->_tpl_vars['page']['id']; ?>
" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-clone.gif" alt="clone bahhh" title="clone bahhh"/></a>
		
		<div class="half-left">
			
			<?php if ($this->_tpl_vars['page']['type'] == 'link'): ?>
				
				<img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-link.gif" alt="<?php echo $this->_tpl_vars['page']['title']; ?>
" class="icon" />
				<?php if (! empty ( $this->_tpl_vars['page']['children'] )): ?>
					<span onclick="showhideChildren('<?php echo $this->_tpl_vars['page']['id']; ?>
');" class="pop" id="expandbutton_<?php echo $this->_tpl_vars['page']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-plus.gif" alt="expand"/></span>
				<?php endif; ?>
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/editpage?page_id=<?php echo $this->_tpl_vars['page']['id']; ?>
&amp;type=link">
				<?php echo $this->_tpl_vars['page']['title']; ?>

				</a>
				
				<span class="small grey">(<?php echo $this->_tpl_vars['page']['url']; ?>
)</span>
				
			<?php else: ?>
				
				<img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-page.gif" alt="<?php echo $this->_tpl_vars['page']['title']; ?>
" class="icon" />
				<?php if (! empty ( $this->_tpl_vars['page']['children'] )): ?>
					<span onclick="showhideChildren('<?php echo $this->_tpl_vars['page']['id']; ?>
');" class="pop" id="expandbutton_<?php echo $this->_tpl_vars['page']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-plus.gif" alt="expand"/></span>
				<?php endif; ?>
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/content/editpage?page_id=<?php echo $this->_tpl_vars['page']['id']; ?>
">
				<?php echo $this->_tpl_vars['page']['title']; ?>

				</a>
				
				<span class="small grey">(<?php echo $this->_tpl_vars['page']['keyName']; ?>
)</span>
				
			<?php endif; ?>
			
		</div>
		
		
		<div class="col"><?php echo $this->_tpl_vars['page']['status']; ?>
</div>
		<div class="col"><?php echo $this->_tpl_vars['page']['template']; ?>
</div>
		
		<?php if (! empty ( $this->_tpl_vars['page']['children'] )): ?>
			<?php $this->assign('pageList', $this->_tpl_vars['page']['children']); ?>
			<div class="spacer clear"> </div>
			<div id="childrenPages_<?php echo $this->_tpl_vars['page']['id']; ?>
" style="display: none;">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "tpl/content/pages_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		<?php endif; ?>
		
		<div class="clear"></div>
		
	</div>
<?php endforeach; endif; unset($_from); ?>
</div>