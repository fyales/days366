<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 15:07:13
         compiled from "D:/xampp/htdocs/web/application/views\days\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2167504c3d5a1c35e0-74047213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4fc3a8f01e1eb2d082b1893d424fe5abc1f4c2f' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\days\\list.tpl',
      1 => 1347174422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2167504c3d5a1c35e0-74047213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_504c3d5a2789e',
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504c3d5a2789e')) {function content_504c3d5a2789e($_smarty_tpl) {?><!DOCTYPE html>
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
wall.css" />
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

<div class="container" >
	<div class="row" >
		<div class="span10 offset1">
			<?php echo $_smarty_tpl->getSubTemplate ("days/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
		</div>

	</div>
</div>
<div class="container">
	<div class="row">
	<h4>公共天墙列表</h4>
	<p>每一天都应该拥有自己的标签，所以请为自己的一天选择标签。
	<table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>天数</th>
	                  <th>标签</th>
	                  <th>描述</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>9月12号</td>
	                  <td>文化</td>
	                  <td>近代西方思想史的三大发现</td>
	                </tr>
	                <tr>
	                  <td>9月13号</td>
	                  <td>电影</td>
	                  <td>肖申克的救赎</td>
	                </tr>
	                <tr>
	                  <td>9月14号</td>
	                  <td>城市</td>
	                  <td>南京</td>
	                </tr>
	              </tbody>
	</table>
	<p class="success">更新中...</p>	
	</div>
</div>
<div class="container">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>

<script type="text/javascript">
$(function(){
	$('#wallNav .add div').popover({
				title:"提示",
				content:"只有你出生此天墙所表示的日期，你才能为这一天增加内容",
				placement:'bottom',
				trigger:'hover'
			});
});
</script>

</body>
</html><?php }} ?>