<?php /* Smarty version 2.6.25, created on 2012-03-18 17:02:38
         compiled from fromstring:%3Cdiv+id%3D%22footer%22%3E%0D%0A%09%3Cul%3E%0D%0A%09%09%3Cli%3ECopyright+%C2%A9+%7B%24ProductTitle%7D+2012.%3C/li%3E%0D%0A%09%09%3Cli%3E%7Bmenu+parent%3D%22home%22%7D%3C/li%3E%0D%0A%09%3C/ul%3E%0D%0A%3C/div%3E%0D%0A%0D%0A%3Cscript+type%3D%22text/javascript%22%3E%0D%0A%7Bliteral%7D%0D%0A++var+_gaq+%3D+_gaq+%7C%7C+%5B%5D%3B%0D%0A++_gaq.push%28%5B%27_setAccount%27%2C+%27UA-30082414-1%27%5D%29%3B%0D%0A++_gaq.push%28%5B%27_trackPageview%27%5D%29%3B%0D%0A%0D%0A++%28function%28%29+%7B%0D%0A++++var+ga+%3D+document.createElement%28%27script%27%29%3B+ga.type+%3D+%27text/javascript%27%3B+ga.async+%3D+true%3B%0D%0A++++ga.src+%3D+%28%27https:%27+%3D%3D+document.location.protocol+%3F+%27https://ssl%27+:+%27http://www%27%29+%2B+%27.google-analytics.com/ga.js%27%3B%0D%0A++++var+s+%3D+document.getElementsByTagName%28%27script%27%29%5B0%5D%3B+s.parentNode.insertBefore%28ga%2C+s%29%3B%0D%0A++%7D%29%28%29%3B%0D%0A%7B/literal%7D%0D%0A%3C/script%3E */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'menu', 'fromstring:<div id="footer">
	<ul>
		<li>Copyright © {$ProductTitle} 2012.</li>
		<li>{menu parent="home"}</li>
	</ul>
</div>

<script type="text/javascript">
{literal}
  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-30082414-1\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();
{/literal}
</script>', 4, false),)), $this); ?>
<div id="footer">
	<ul>
		<li>Copyright © <?php echo $this->_tpl_vars['ProductTitle']; ?>
 2012.</li>
		<li><?php echo smarty_function_menu(array('parent' => 'home'), $this);?>
</li>
	</ul>
</div>

<script type="text/javascript">
<?php echo '
  var _gaq = _gaq || [];
  _gaq.push([\'_setAccount\', \'UA-30082414-1\']);
  _gaq.push([\'_trackPageview\']);

  (function() {
    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
  })();
'; ?>

</script>