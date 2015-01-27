<?php /* Smarty version Smarty-3.1.7, created on 2012-09-06 10:33:11
         compiled from "D:/xampp/htdocs/web/application/views\account\registersuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2865050480b672c3df2-38544101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afbcc91834ca2460f6fc72fbf83481a3fec40331' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\account\\registersuccess.tpl',
      1 => 1344992585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2865050480b672c3df2-38544101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50480b673c1d6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50480b673c1d6')) {function content_50480b673c1d6($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/logo.ico">
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

			<div class="span12">
				<div class="registerSuccess">
				<h3>注册成功</h3>
				<hr />
					<p>恭喜你,你已经成功注册了账户,请返回进行登录。
					<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
twitter/index" >点此返回</a>
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