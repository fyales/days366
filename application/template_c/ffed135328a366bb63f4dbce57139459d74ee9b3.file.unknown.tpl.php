<?php /* Smarty version Smarty-3.1.7, created on 2012-09-06 10:30:02
         compiled from "D:/xampp/htdocs/web/application/views\errors\unknown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95795040ac57f11c74-28571963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffed135328a366bb63f4dbce57139459d74ee9b3' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\errors\\unknown.tpl',
      1 => 1346898598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95795040ac57f11c74-28571963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5040ac5806b12',
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5040ac5806b12')) {function content_5040ac5806b12($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
<?php  $_config = new Smarty_Internal_Config("smarty.config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("path", 'global'); ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
login.css" />
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
	<div class="span12" style="margin-bottom: 200px;">
	<h3>错误</h3>
	<hr />
	<p>发生未知错误,请重试!</p>
	<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
" >点此返回</a>
	</div>
</div>
<div><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>


</div>
</body>
</html><?php }} ?>