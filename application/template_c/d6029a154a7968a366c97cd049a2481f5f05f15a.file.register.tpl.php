<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:15:50
         compiled from "D:/xampp/htdocs/web/application/views\account\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:712550480b4d5a1a92-39444264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6029a154a7968a366c97cd049a2481f5f05f15a' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\account\\register.tpl',
      1 => 1347170958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '712550480b4d5a1a92-39444264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_50480b4d702dd',
  'variables' => 
  array (
    'userName' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50480b4d702dd')) {function content_50480b4d702dd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
?><!DOCTYPE html>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
 !window.jQuery && document.write("<script type=\"text/javascript\" src=\"http://www.days366.com/js/jquery-1.7.1.min.js\"><\/script>");
</script>
<script type="text/javascript"  src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
jquery.validate.min.js"></script>
</head>
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
<div class="container" >
	<div class="row"> 

		<div class="row">
			<div class="span12">
    
				<h4>注册&nbsp;&nbsp;<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
twitter/index" style="font-size:13px;">返回首页</a></h4>
				<hr />
			    <form id="registerForm" method="POST" class="form-horizontal" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
validnoid" >
			    	<div id="formMain">
						<div class="control-group">
				        	<label for="email"  class="control-label">你的邮箱</label>
							<div class="controls">
								<input type="email"  id="email" placeholder="Email"  name='email'/>
							</div>
						</div> 
				        <div class="control-group">
				        	<label for="password" class="control-label">你的密码</label>
							<div class="controls">
								<input type="password" id="password" name='password' placeholder="Password"/>
							</div>
				        </div>
						<div class="control-group">
				        	<label for="repeatPassword" class="control-label">重复密码</label>
							<div class="controls">
								<input type="password"  id="repeatPassword" name='repeatPassword' placeholder="Repeat Password"/>
							</div>
						</div>

	
						<div class="control-group">
							<label for="button" class="control-label">&nbsp;</label>
							<div class="controls">
								<button type="submit" class="btn btn-small" id="registerButton">注册</button>
							</div>
						</div>
					</div>
				
				</form>
				<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['error']->value)){?>
				<div id="registerError">
			   	<label class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</label>
			   	</div>
			   	<?php }?> 
			</div>
		</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
gg.js"></script>

<script type="text/javascript">

$(function(){
	$('#registerForm').validate({
		rules:{
			email:{
				required:true,
				email:true
			},
			password:{
				required:true,
				minlength:6,
				maxlength:15
			},
			repeatPassword:{
				required:true,
				equalTo:"#password"
			}

		},
		messages:{
			email:"&nbsp;&nbsp;请输入一个有效的email地址",
			password:{
				required:"&nbsp;&nbsp;请输入密码",
				minlength:"&nbsp;&nbsp;请至少输入一个长度为6的密码",
				maxlength:"&nbsp;&nbsp;密码的长度不应该大于15."	
			},
			repeatPassword:{
				required:"&nbsp;&nbsp;请重复密码",
				equalTo:"&nbsp;&nbsp;两次输入的密码不相符，请重新输入"
			}
}
			
	});
});

</script>

</body>

</html>		<?php }} ?>