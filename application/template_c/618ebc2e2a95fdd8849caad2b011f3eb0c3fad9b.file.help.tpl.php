<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 23:55:45
         compiled from "D:/xampp/htdocs/web/application/views\help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32236504cbc012e1af1-06068467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '618ebc2e2a95fdd8849caad2b011f3eb0c3fad9b' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\help.tpl',
      1 => 1347171342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32236504cbc012e1af1-06068467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_504cbc015c3cf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504cbc015c3cf')) {function content_504cbc015c3cf($_smarty_tpl) {?><!DOCTYPE html>
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
			<div class="span10 offset1">
				<div class="pull-left">
					<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
logo.png" alt="this is logo" />
				</div>
			</div>
		</div>
<div class="container">

	<div class="row">
			<div class="span12" >
				<div>
					<h4>关于本网站的主题</h4>
					<hr />
					<p>网站的口号是"记住每一天".这也是days366最想传达给每个人的信息。days366帮助大家珍藏生活的点滴，分享自己每一天的趣事，寻找志趣相投，有缘的朋友。
				</div>
				<div id="dayWall">
					<h4>关于天墙</h4>
					<hr />
					<p>每一个人都有366个天墙,也就是说你生活的每一天都各自有一个墙壁。你在这一天所记录的事情，收藏的事物都将出现在你对应的天墙之内。
				</div>
				<div id="dayWall">
					<h4>关于公共主页</h4>
					<hr />
					<p>与天墙一样，公共主页也有366份天墙。但它记录了每一天发生的最有趣的事情。同时，你可以为公共主页添加内容。找到对应这天出生的朋友。
				</div>
				<div id="dayWall">
					<h4>关于收藏好友</h4>
					<hr />
					<p>在days366.你可以找到与自己出生同一天的人，并且收藏他们。同时，你也可以收藏有共同爱好的人，在生活中的朋友，同事以及家人。
				</div>
				<div id="dayWall">
					<h4>关于农历和公历的问题</h4>
					<hr />
					<p>days366支持公历，不支持农历。这一点我深感抱歉。
				</div>				
				<div>
					<h4>关于用户隐私</h4>
					<hr />
					<p>我相信人的隐私高于一切。因此我们只需要你最低限度的信息。但有些是必须的:一个有效的电子邮件地址,真实姓名,公历生日,出生日期，当然还包括真实的性别。这样我们才能更好地为你提供服务。
				</div>
			
				<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account" >点此返回</a>	
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
gg.js"></script>
</body>
</html><?php }} ?>