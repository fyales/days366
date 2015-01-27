<?php /* Smarty version Smarty-3.1.7, created on 2012-09-07 18:53:08
         compiled from "D:/xampp/htdocs/web/application/views\friend\stranger.tpl" */ ?>
<?php /*%%SmartyHeaderCode:302055049cc731cf440-46566529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27e826be229c7903fcc5dab10020a6e7f53f7948' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\friend\\stranger.tpl',
      1 => 1347015168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302055049cc731cf440-46566529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5049cc7327095',
  'variables' => 
  array (
    'userName' => 0,
    'friendId' => 0,
    'friendImg' => 0,
    'friendName' => 0,
    'friendBirthday' => 0,
    'friendProvince' => 0,
    'friendCity' => 0,
    'friendUs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049cc7327095')) {function content_5049cc7327095($_smarty_tpl) {?><!doctype html>
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
friend.css" />
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
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
<div class="row">
	<div class="span4 thumbnail" style="margin-left:33.3%">

		<div id="strangerInformation">
			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['friendId']->value;?>
" target="_blank" >
				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgfinish');?>
<?php echo $_smarty_tpl->tpl_vars['friendImg']->value;?>
" alt="这是用户的头像" />
			</a>
		</div>
		<div id="textInformation">
				<h4><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['friendId']->value;?>
" target="_blank" ><span><?php echo $_smarty_tpl->tpl_vars['friendName']->value;?>
</span></a>&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['friendBirthday']->value;?>
</span></h4>
				<h4><span><?php echo $_smarty_tpl->tpl_vars['friendProvince']->value;?>
</span><span><?php echo $_smarty_tpl->tpl_vars['friendCity']->value;?>
</span></h4>
				<h4><span><?php echo $_smarty_tpl->tpl_vars['friendUs']->value;?>
</span></h4>
				<p>由于你未收藏此人或者是此人未开放权限,因此你只能浏览到这些信息。你可以收藏此人得到浏览权限。
				<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
twitter/index" >点此返回</a>
		</div>
	</div>
<div class="span12"><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>	
</div>
</div>


</body>
</html><?php }} ?>