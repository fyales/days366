<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 19:30:08
         compiled from "D:/xampp/htdocs/web/application/views\days\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319215048020306a535-49076235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83e9b397e8c970e679a307be549ec99064e8511a' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\days\\add.tpl',
      1 => 1347171038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319215048020306a535-49076235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5048020316a89',
  'variables' => 
  array (
    'userName' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048020316a89')) {function content_5048020316a89($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
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
style.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
add.css" />


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
ajaxfileupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
jquery.validate.min.js"></script>
<!--[if lt IE 10]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
fixie.css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
ieImageUpload.js"></script>
<![endif]-->
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" >
		
		<div class="row" >
			<h4><img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
pen.png">&nbsp;为你出生的一天增加色彩</h4>
			<hr />
			<div class="span3 thumbnail well" id="addImg">
			<h5 class="hide" id="imageUpload" >上传图像</h5>
				<form method="post" action="#" onSubmit="return false;" id="formImage">
					<input type="file" class="hide" id="file" name="file"/>

					<button class="btn" type="button" id="imgButton"><i class="icon-plus-sign"></i>&nbsp;添加图像</button>
					<p class="help-block">非必需。可是发布图片能使你发布的内容更加精彩。
					
				</form>
				<div class="hide loading"><img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
loading.jpg"  /></div>
				<div id="fileSuccess" class="hide">
					<label class="success">上传成功，请增加描述</label>
				</div>
				<div id="fileError" class="hide"><label class="error">图像上上传失败</label></div>
			</div>
			<div class="span8 thumbnail well" id="main">
				<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['error']->value)){?>
				   	<label class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</label>
				<?php }?>
				<form method="post" class="form-horizontal" id="formMain" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/save">
						<input type="hidden" value="none" name="hiddenImg" id="hiddenImg"/>
						<div id="title" class="control-group">
							<label class="control-label">标题</label>
							<div class="controls">
							<input type="text" class="span7" id="title" name="title"/>
							<p class="help-block">非必需.	
							</div>			
						</div>
					
						<div id="content" class="control-group">
							<label class="control-label">内容</label>
							<div class="controls">
								<textarea class="span7" id="content" name="content"></textarea>
								<p class="help-block">你发表的内容中出现的&lt;br&gt;标签是帮助你换行.							
							</div>

						</div>
					
						<div id="link" class="control-group">
							<label class="control-label">链接</label>
							<div class="controls">
								<input type="text" class="span7" value="http://" name="href" id="href">
								<p class="help-block">非必需,来源URL即为你想分享的照片,文章等的出处，它帮助你的朋友更容易阅读，分享它。							
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button class="btn btn-info">发布</button>								
							</div>
					
						</div>
						
				</form>
			</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
microBlog/display.js"></script>

</body>
</html>
<?php }} ?>