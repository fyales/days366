<?php /* Smarty version Smarty-3.1.7, created on 2012-09-04 18:47:14
         compiled from "D:/xampp/htdocs/web/application/views\user\imgcheck.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20700503f62b34bf5b8-38542332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b9ab3f75a92fcdab1ca5972fb81cf94fbeb7b10' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\user\\imgcheck.tpl',
      1 => 1346331423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20700503f62b34bf5b8-38542332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f62b35bede',
  'variables' => 
  array (
    'userName' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f62b35bede')) {function content_503f62b35bede($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="day,birthday,days366,大学,同学,朋友,交友,每一天" />
<meta name="Description" content="remember every day!,记住每一天" />
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/logo.ico">
<?php  $_config = new Smarty_Internal_Config("smarty.config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("path", 'global'); ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
twitter.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
style.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
jquery.Jcrop.css" />
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
jquery.Jcrop.min.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="row">
		
		<div class="row">
			<div class="span9">
				<div class="span8 thumbnail" id="primaryPic">
						<div id="formImage">
						<h4>&nbsp;&nbsp;请对你的头像进行裁剪:</h4>
						<hr />
						<div id="imgArea">
							<img src="<?php echo $_smarty_tpl->getConfigVariable('userimg');?>
<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"  id="target" alt="这是你的头像" class="thumbnail"/>
						</div>
						
						<form action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
valid/imgfinish" method="post" >
							<input type="hidden" id="x" name="x" />
							<input type="hidden" id="y" name="y" />
							<input type="hidden" id="w" name="w" />
							<input type="hidden" id="h" name="h" />
							<input type="hidden" id="img" name="img" value="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" />
							<input type="submit"  class="btn btn-samll btn-info" value="提交"  />
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

<script type="text/javascript">


$(function(){

	$('#target').Jcrop({
		onSelect: updateCoords
	});

});

function updateCoords(c)
{
	$('#x').val(c.x);
	$('#y').val(c.y);
	$('#w').val(c.w);
	$('#h').val(c.h);
};

$('form').submit(function()
	{	
	if (parseInt($('#w').val())) {return  true;}
	$('.span9 form .btn').popover(
			{
				title:"提醒",
				content:'你必须选择一个有效的图像区域(必须进行裁剪)'
				}
			);
	$('form .btn').popover('show');
	return false;
	});



</script>

	</body>
</html><?php }} ?>