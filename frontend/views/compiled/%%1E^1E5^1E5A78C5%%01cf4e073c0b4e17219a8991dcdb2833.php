<?php /* Smarty version 2.6.25, created on 2012-03-15 23:35:21
         compiled from fromstring:%7Bforeach+from%3D%24recentUsers+item%3Duser%7D%0D%0A%7B%24user.user_query%7C%40json_decode%7D%0D%0A%3Cli%3E%3Ca+href%3D%22/%7B%24user.username%7D%22%3E%3Cimg+src%3D%22http://images.instagram.com/profiles/profile_5375007_75sq_1308523329.jpg%22+alt%3D%22%22+title%3D%22%22/%3E%3C/a%3E%3C/li%3E%0D%0A%7B/foreach%7D */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_decode', 'fromstring:{foreach from=$recentUsers item=user}
{$user.user_query|@json_decode}
<li><a href="/{$user.username}"><img src="http://images.instagram.com/profiles/profile_5375007_75sq_1308523329.jpg" alt="" title=""/></a></li>
{/foreach}', 2, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['recentUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
<?php echo json_decode($this->_tpl_vars['user']['user_query']); ?>

<li><a href="/<?php echo $this->_tpl_vars['user']['username']; ?>
"><img src="http://images.instagram.com/profiles/profile_5375007_75sq_1308523329.jpg" alt="" title=""/></a></li>
<?php endforeach; endif; unset($_from); ?>