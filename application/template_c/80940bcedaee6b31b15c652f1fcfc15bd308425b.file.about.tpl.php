<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 23:55:47
         compiled from "D:/xampp/htdocs/web/application/views\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13749504cbc03a04de5-32003962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80940bcedaee6b31b15c652f1fcfc15bd308425b' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\about.tpl',
      1 => 1347171274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13749504cbc03a04de5-32003962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_504cbc03b317e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504cbc03b317e')) {function content_504cbc03b317e($_smarty_tpl) {?><!DOCTYPE html>
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
	<div class="row">
		<div class="span12 about">	
				<div class="span12">
					<h3>网站的构思</h3>
					<hr />
					<p>网站的构思来源于我想送给一位女性朋友的生日礼物.后来我想到每一天都有人过生日。那么，每一天对某些人来说都具有极其特殊的意义。所以为什么不珍藏每一天，并且大家可以找到与自己同一天出生的朋友，与自己的朋友分享每一天的趣事，并将它永久珍藏。于是days366诞生了。
					<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account" >点此返回</a>						
				</div>
			</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
gg.js"></script>
</body>
</html><?php }} ?>