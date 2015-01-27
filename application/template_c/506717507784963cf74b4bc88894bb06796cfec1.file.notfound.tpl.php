<?php /* Smarty version Smarty-3.1.7, created on 2012-08-30 20:08:40
         compiled from "D:/xampp/htdocs/web/application/views\errors\notfound.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32523503f57c82aae93-55312965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '506717507784963cf74b4bc88894bb06796cfec1' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\errors\\notfound.tpl',
      1 => 1344992903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32523503f57c82aae93-55312965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f57c83b102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f57c83b102')) {function content_503f57c83b102($_smarty_tpl) {?><!DOCTYPE html>
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
	<h2>404</h2>
	<hr />
	<p>非常抱歉，你要找的页面没有找到！</p>
	<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
" >点此返回</a>
	</div>
</div>
<div><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>


</div>
</body>
</html><?php }} ?>