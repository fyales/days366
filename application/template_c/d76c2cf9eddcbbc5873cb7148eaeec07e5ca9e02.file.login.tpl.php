<?php /* Smarty version Smarty-3.1.7, created on 2012-08-30 20:16:54
         compiled from "D:/xampp/htdocs/web/application/views\account\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28854503f59b6eceb54-66784119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd76c2cf9eddcbbc5873cb7148eaeec07e5ca9e02' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\account\\login.tpl',
      1 => 1346152559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28854503f59b6eceb54-66784119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f59b7124ee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f59b7124ee')) {function content_503f59b7124ee($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
 !window.jQuery && document.write("<script type=\"text/javascript\" src=\"http://www.days366.com/js/jquery-1.7.1.min.js\"><\/script>");
</script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
jquery.validate.min.js"></script>
</head>
<body class="days366">
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

			<div class="row" id="mainpage">
				<div class="span10"  id="login">
						<form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
validnoid/login" id="loginForm" class="form-horizontal">
						<h4>登录</h4>
						<hr />
							<div class="control-group">
					        	<label for="email"  class="control-label">账号</label>
								<div class="controls">
									<input type="email"  autofocus id="account" placeholder="Email"  name='account'  />
								</div>
							</div> 
					        <div class="control-group">
					        	<label for="password" class="control-label">密码</label>
								<div class="controls">
										<input type="password"  id="password" name='password' placeholder="Password"  />
								</div>
					        </div>
					    	<div class="control-group" id="btn-login">
								<label for="button" class="control-label">&nbsp;</label>
								<div class="controls">
									<button class="btn btn-small">登陆</button>
									<a class="btn btn-info btn-small" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account/register" id="register">注册</a>
								</div>
							</div>
							<div class="control-group">
								<label for="foget" class="control-label">&nbsp;</label>
								<div class="controls">
									<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account/findpass">?忘记密码</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days">返回公共主页</a>
								</div>
							</div>							
						</form>
						<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['error']->value)){?>
						   	<label class="error" id="loginError"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</label>
						 <?php }?>  
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>

<script type="text/javascript" >
$(function(){$('#loginForm').validate({rules:{account:{required:true,email:true},password:{required:true}},messages:{account:"&nbsp;&nbsp;请输入一个有效的email地址",password:{required:"&nbsp;&nbsp;请输入密码"}}});});
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
gg.js"></script>
</body>
</html>


<?php }} ?>