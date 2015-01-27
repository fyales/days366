<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 23:55:49
         compiled from "D:/xampp/htdocs/web/application/views\userrule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13386504cbc05b1f681-27672231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1755ab3dac3873ac1c0bd09620c3e3d90b5e202a' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\userrule.tpl',
      1 => 1347171342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13386504cbc05b1f681-27672231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_504cbc05c2436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504cbc05c2436')) {function content_504cbc05c2436($_smarty_tpl) {?><!DOCTYPE html>
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
global.css" />
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
			<div class="span12">
				<div id="mainifesto" >
					<h3>使用条款</h3>
					<hr />
					<ul>
						<li>本站对维基百科中出现的中华民国（1949年以后）进行了修改，皆以'台湾'代替。本人虽不热衷于政治。但坚持"台湾是中国不可分割的一部分这一基本立场"。</li>
						<li>若注册用户依靠本网站进行违反法律法规的行为，本站会予以冻结账号，并且删除其有害言论。本站不承担任何法律责任。</li>
						<li>在用户不违背法律的基础之上。day366会尽力保护用户的隐私，以及使用畅通的使用网站的各种功能。
						<li>最终解释权归days366所有。
					</ul>
					<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account" >点此返回</a>
				</div>
			</div>
	</div>
	<div >
	<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
gg.js"></script>
</body>
</html>
  ·<?php }} ?>