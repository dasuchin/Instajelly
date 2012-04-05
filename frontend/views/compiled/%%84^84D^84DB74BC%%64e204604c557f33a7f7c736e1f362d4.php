<?php /* Smarty version 2.6.25, created on 2012-03-16 05:20:35
         compiled from fromstring:%7Bforeach+from%3D%24recentUsers+item%3Duser%7D%0D%0A%3Cli%3E%3Ca+href%3D%22/%7B%24user.username%7D%22%3E%3Cimg+src%3D%22%7B%24user.image%7D%22+alt%3D%22%22+title%3D%22%7B%24user.username%7D%22/%3E%3C/a%3E%3C/li%3E%0D%0A%7B/foreach%7D */ ?>
<?php $_from = $this->_tpl_vars['recentUsers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
<li><a href="/<?php echo $this->_tpl_vars['user']['username']; ?>
"><img src="<?php echo $this->_tpl_vars['user']['image']; ?>
" alt="" title="<?php echo $this->_tpl_vars['user']['username']; ?>
"/></a></li>
<?php endforeach; endif; unset($_from); ?>