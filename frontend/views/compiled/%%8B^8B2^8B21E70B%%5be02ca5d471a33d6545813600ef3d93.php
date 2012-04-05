<?php /* Smarty version 2.6.25, created on 2012-03-15 23:32:05
         compiled from fromstring:%3Ch1%3E%3Cimg+alt%3D%22Instajelly%22+src%3D%22/bento/img/icon-instajelly.png%22+title%3D%22Instajelly%22+/%3E%3C/h1%3E%0D%0A%3Ch2%3EInstajelly%3C/h2%3E%0D%0A%3Ch3%3EYour+own+Instagram+gallery+at+instajelly.com/%3Cem%3Eusername%3C/em%3E%3C/h3%3E%0D%0A%3Ca+href%3D%22/user/register%22+class%3D%22btn+green%22%3ECreate+your+gallery%3C/a%3E%0D%0A%7B%24userInfo%7C%40print_r%7D%0D%0A%3Cul+id%3D%22newcomers%22%3E%0D%0A%09%3Cli%3E%3Ch4%3ENewest+Jelly%3C/h4%3E%3C/li%3E%0D%0A%09%7Bblock+identifier%3D%22recent-users%22%7D%0D%0A%3C/ul%3E */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'print_r', 'fromstring:<h1><img alt="Instajelly" src="/bento/img/icon-instajelly.png" title="Instajelly" /></h1>
<h2>Instajelly</h2>
<h3>Your own Instagram gallery at instajelly.com/<em>username</em></h3>
<a href="/user/register" class="btn green">Create your gallery</a>
{$userInfo|@print_r}
<ul id="newcomers">
	<li><h4>Newest Jelly</h4></li>
	{block identifier="recent-users"}
</ul>', 5, false),array('function', 'block', 'fromstring:<h1><img alt="Instajelly" src="/bento/img/icon-instajelly.png" title="Instajelly" /></h1>
<h2>Instajelly</h2>
<h3>Your own Instagram gallery at instajelly.com/<em>username</em></h3>
<a href="/user/register" class="btn green">Create your gallery</a>
{$userInfo|@print_r}
<ul id="newcomers">
	<li><h4>Newest Jelly</h4></li>
	{block identifier="recent-users"}
</ul>', 8, false),)), $this); ?>
<h1><img alt="Instajelly" src="/bento/img/icon-instajelly.png" title="Instajelly" /></h1>
<h2>Instajelly</h2>
<h3>Your own Instagram gallery at instajelly.com/<em>username</em></h3>
<a href="/user/register" class="btn green">Create your gallery</a>
<?php echo print_r($this->_tpl_vars['userInfo']); ?>

<ul id="newcomers">
	<li><h4>Newest Jelly</h4></li>
	<?php echo smarty_function_block(array('identifier' => "recent-users"), $this);?>

</ul>