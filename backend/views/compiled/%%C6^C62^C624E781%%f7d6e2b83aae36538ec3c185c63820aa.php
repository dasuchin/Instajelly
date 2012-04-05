<?php /* Smarty version 2.6.25, created on 2012-03-22 13:37:08
         compiled from tpl/blog/comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'tpl/blog/comments.tpl', 30, false),)), $this); ?>
<h1>Comments</h1>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['skin']; ?>
js/comment.js"></script>

<div class="pad25">

	<div class="action">
		<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/comments" class="butt">All Comments</a>
		<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/comments?status=pending" class="butt">Pending Comments</a>
		<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/comments?status=approved" class="butt">Approved Comments</a>
		<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/comments?status=spam" class="butt">Spam Comments</a>
	<div class="clear"></div>
	</div>
	
	<ul class="item-title">
		<li class="col-last">Status</li>
		<li class="col">Article</li>
		<li class="col">Author</li>
		<li class="col-first">Comment</li>
	</ul>
	
	<div class="hug">
	<?php if (! empty ( $this->_tpl_vars['commentList'] )): ?>
			<?php $_from = $this->_tpl_vars['commentList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
			<div class="item">
			
				<a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/deletecomment?comment_id=<?php echo $this->_tpl_vars['comment']['id']; ?>
" onclick="return confirm('Are you sure you want to delete this comment?');" class="icon-trash"><img src="<?php echo $this->_tpl_vars['skin']; ?>
img/icon-trash.gif" alt="delete"/></a>
				
				<div class="left">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['comment'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 60) : smarty_modifier_truncate($_tmp, 60)); ?>

				</div>
				
				
				<div class="col">
					<select id="status<?php echo $this->_tpl_vars['comment']['id']; ?>
" onchange="javascript:updateStatus(<?php echo $this->_tpl_vars['comment']['id']; ?>
)">
						<option value="pending" <?php if ($this->_tpl_vars['comment']['status'] == 'pending'): ?>selected="selected"<?php endif; ?>>Pending</option>
						<option value="approved" <?php if ($this->_tpl_vars['comment']['status'] == 'approved'): ?>selected="selected"<?php endif; ?>>Approved</option>
						<option value="spam" <?php if ($this->_tpl_vars['comment']['status'] == 'spam'): ?>selected="selected"<?php endif; ?>>Spam</option>
					</select>
				</div>
				<div class="col"><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/blog/editarticle?article_id=<?php echo $this->_tpl_vars['comment']['article_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20) : smarty_modifier_truncate($_tmp, 20)); ?>
</a></div>
				<div class="col"><?php if ($this->_tpl_vars['comment']['user_id'] != 0): ?><a href="<?php echo $this->_tpl_vars['httpUrl']; ?>
admin/users/edituser?user_id=<?php echo $this->_tpl_vars['comment']['user_id']; ?>
"><?php echo $this->_tpl_vars['comment']['name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['comment']['name']; ?>
<?php endif; ?></div>
				
				
			<div class="clear"></div>
			</div>
			<?php endforeach; endif; unset($_from); ?>
	<?php else: ?>
		- no comments yet -
	<?php endif; ?>
	</div>
	
</div>