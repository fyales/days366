<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:48:47
         compiled from "D:/xampp/htdocs/web/application/views\user\label.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14603503f60cdbd07f6-37105129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebec57794c0c3a0ed4440160f100389d8b91de44' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\user\\label.tpl',
      1 => 1347171274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14603503f60cdbd07f6-37105129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f60cdd72e8',
  'variables' => 
  array (
    'userName' => 0,
    'error' => 0,
    'userImg' => 0,
    'people' => 0,
    'gender' => 0,
    'birthday' => 0,
    'hometown' => 0,
    'us' => 0,
    'permit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f60cdd72e8')) {function content_503f60cdd72e8($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
?><!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="day,birthday,days366,大学,同学,朋友,交友,每一天" />
<meta name="Description" content="remember every day!,记住每一天" />
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
<?php  $_config = new Smarty_Internal_Config("smarty.config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("path", 'global'); ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
twitter.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
style.css" />
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
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
jquery.masonry.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
jquery.imagesloaded.min.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">

	<div class="row">
		
		<div class="row">
			<div class="span9">
				<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['error']->value)){?>
				   	<label class="days366Success"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</label>
				<?php }?>
				<div class="row" id="addItem">
					<div class="span302">
						<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userinfo/changeimg" title="修改头像">
							<img src="<?php echo $_smarty_tpl->getConfigVariable('imgfinish');?>
<?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
" alt="这是用户的头像" style="width:80px;height:80px" />
						</a>
						<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userinfo/changeimg">修改头像</a>
					</div>
					<div class="span7 thumbnail">
						<form class="form-horizontal" id="info">
									
									<h4>&nbsp;&nbsp;你的个人资料<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userinfo/index" style="font-size:13px">(更改资料)</a></h4>
									<hr />
									<div class="control-group">
										<label class="control-label">姓名：</label>
										<div class="controls">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['people']->value;?>
</label>
										</div>
									</div>
												
									<div class="control-group">
										<label class="control-label">性别：</label>
										<div class="controls">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">生日：</label>
										<div class="controls">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['birthday']->value;?>
</label>
										</div>
									</div>			
									<div class="control-group">
										<label class="control-label">故乡：</label>
										<div class="controls">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['hometown']->value;?>
</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">大学：</label>
										<div class="controls">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['us']->value;?>
</label>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">设置的权限：</label>
										<div class="controls">
											<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['permit']->value;?>
</label>
										</div>
									</div>
									
							</form>
					</div>
				</div>

		
		
		</div>	
		</div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
</body>
</html><?php }} ?>