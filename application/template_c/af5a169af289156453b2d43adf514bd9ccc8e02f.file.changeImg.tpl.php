<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:18:17
         compiled from "D:/xampp/htdocs/web/application/views\user\changeImg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141503f6131e96531-30006138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5a169af289156453b2d43adf514bd9ccc8e02f' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\user\\changeImg.tpl',
      1 => 1347171274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141503f6131e96531-30006138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f61321315c',
  'variables' => 
  array (
    'userName' => 0,
    'userImg' => 0,
    'time' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f61321315c')) {function content_503f61321315c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
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
				<div class="row" id="addItem">
					<div class="span302">
						<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userinfo/changeimg" title="修改头像">
							<img src="<?php echo $_smarty_tpl->getConfigVariable('imgfinish');?>
<?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
" alt="这是用户的头像" style="width:80px;height:80px" />
						</a>
					</div>
					<div class="span7 thumbnail">
						<div id="info">
							<h4>&nbsp;&nbsp;个人头像设置</h4>
							<hr />
							<form method="post"  id="userimg" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
valid/userimg"	 class="form-horizontal" enctype="multipart/form-data">
								<div>
									<label for="file" class="control-label">上传头像</label>
									<div class="controls">
										<input type="file" name="file" />
										<button type="submit"  class="btn btn-info btn-small" name="submit" id="submit" >提交</button>
									</div>
									<input type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
" id="photoId" name="photoId" />
								</div>
							</form>
							<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['error']->value)){?>
					   		<p><label class="days366Error"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</label>
					   		<?php }?>   
							<div id="uploadImgAttention">
								<p><span >图片大小不应该大于4M</span> 
								<p><span >只支持png,jpg,gif格式</span>
								<p><span>若图片过大，可以先进行裁剪再上传</span>
								<p><span>你上传动画片将会被拒绝！</span>
								
							</div>
						</div>	
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