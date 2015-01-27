<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 23:55:52
         compiled from "D:/xampp/htdocs/web/application/views\mainifesto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3288504cbc086038a2-57692745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f2389ed753f4012e15ab2cc998153d6c3b66b5' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\mainifesto.tpl',
      1 => 1347171342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3288504cbc086038a2-57692745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_504cbc086a212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504cbc086a212')) {function content_504cbc086a212($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
<?php  $_config = new Smarty_Internal_Config("smarty.config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("path", 'global'); ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
style.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
global.css" />
<!--[if lt IE 10]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
fixie.css" />
<![endif]-->
<!--[if lt IE 8]>
<script type="text/javascript">
	window.location.href="http://www.days366.com/global/mainifesto#browser"
</script>
<![endif]-->
</head>
<body>
		<div class="header row">
			<div class="span12">
				<div class="pull-left">
					<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
logo.png" alt="this is logo" />
				</div>
			</div>
		</div>
<div class="container">
	<div class="row">
			<div class="span12">
				<div id="mainifesto" >
					<h4>声明</h4>
					<hr />
					<ul>
						<li>本站的图片材料一般取自于一些素材共享站点。如果其中有侵犯你个人或者你所在组织的权利，请尽快通知本站，本站会予以删除</li>
						<li>本站部分采用的源代码遵循The Apache License，MIT or GPL Version 2 licenses。例如jquery框架，bootstrap等开源框架，个人在此表示感谢。</li>
						<li>本站对维基百科中出现的中华民国（1949年以后）进行了修改，皆以'台湾'代替。本人虽不热衷于政治。但坚持"台湾是中国不可分割的一部分这一基本立场"。</li>
			
					</ul>
					<h4>关于浏览器</h4>
					<hr />
					<p>网站并不支持IE以下版本的浏览器，并且永远不会支持IE6，IE7,它们是过期,危险的产品。现在有许多先进的浏览器，你使用它们将会有更好的上网体验，而且会更加安全，不易受到网络攻击。如果你是在网吧或者是使用公司的电脑,用着过时的IE6,7。那么是时候通知你的网管:是时候给浏览器升级换代了。
					<div class="browserPic">
						<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
firefox.jpg" alt="this is browser picture" />
						<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
safari.jpg" alt="this is browser picture" />
						<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
chrome.jpg" alt="this is browser picture" />
						<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
IE.jpg" alt="this is browser picture" />
					</div>								
					<h4>在这里我们给出最新的浏览器的下载地址，你可以根据你的喜好进行下载</h4>
					<ul>
						<li><a href="http://firefox.com.cn/"  target="_blank">Firefox</a></li>
						<li><a href="http://www.google.cn/chrome/intl/zh-CN/landing_chrome.html?hl=zh-CN" target="_blank">Chrome</a></li>
						<li><a href="http://www.apple.com.cn/safari/"  target="_blank">Safari</a></li>
						<li><a href="http://windows.microsoft.com/zh-CN/internet-explorer/products/ie/home" target="_blank">IE</a></li>
						<li><a href="http://www.opera.com/download/" target="_blank">Opera</a></li>
					</ul>
					<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account" >点此返回</a>
				</div>
		</div>
	</div>
	<div >
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
gg.js"></script>
</body>
</html>
<?php }} ?>