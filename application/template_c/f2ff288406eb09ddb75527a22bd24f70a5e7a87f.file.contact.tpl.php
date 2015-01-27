<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 23:55:51
         compiled from "D:/xampp/htdocs/web/application/views\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32699504cbc071c4747-83719346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2ff288406eb09ddb75527a22bd24f70a5e7a87f' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\contact.tpl',
      1 => 1347171342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32699504cbc071c4747-83719346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_504cbc0735143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504cbc0735143')) {function content_504cbc0735143($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
			<div class="span12">
				<div id="contact">
					<h3>联系我们</h3>
					<hr />
					<p>网站所有内容皆出自我手。但是我知道一个人的力量远没有团队的力量强大。如果你也想做点有趣的东西，希望锻炼自己的能力（当然前提你必须要有能力）。欢迎加入。我们的联系方式是sww201006@gmail.com.欢迎你的加盟。
					<p>又或者，你对网站有什么建议或者不满。我也欢迎你的来信。请发邮件至sww201006@126.com
					<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account" >点此返回</a>
				</div>
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