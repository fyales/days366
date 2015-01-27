<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:17:42
         compiled from "D:/xampp/htdocs/web/application/views\message\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95975040bdf07ee500-34819152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb2cfb325df30182c9e58850479bf0c8555a83f' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\message\\index.tpl',
      1 => 1347171173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95975040bdf07ee500-34819152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5040bdf0995e6',
  'variables' => 
  array (
    'userName' => 0,
    'resultNumber' => 0,
    'result' => 0,
    'item' => 0,
    'responseNumber' => 0,
    'responseResult' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5040bdf0995e6')) {function content_5040bdf0995e6($_smarty_tpl) {?><!DOCTYPE html>
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
twitter.css" />
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
ajaxfileupload.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="row">
		
		<div class="row">
			<div class="span9">
				<div id="result" class="span8">
				<h3><span class="badge badge-success">你的追随消息</span></h3>
				<?php if ($_smarty_tpl->tpl_vars['resultNumber']->value==0){?>
					<div class="thumbnail"><h4>无追随消息</h4></div>
				<?php }else{ ?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>	
						<div class="thumbnail result" >
							<div class="blue"></div>
							<div><a href="http://www.days366.com/message/find?type=twitter&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
" target="_blank">你的生活点滴有一条追随消息</a></div>
						</div>
					<?php } ?>
				<?php }?>
				</div>
				<div id="result" class="span8">
				<h3><span class="badge badge-info">你追随的消息</span></h3>
				<?php if ($_smarty_tpl->tpl_vars['responseNumber']->value==0){?>
				
					<div class="thumbnail">
					<h4>无回复</h4></div>
				<?php }else{ ?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['responseResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>	
						<div class="thumbnail result" >
							<div class="blue"></div>
				
							<div><a href="http://www.days366.com/response/index?type=twitter&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
" target="_blank">你追随的生活点滴有一条回复消息</a></div>
	
		
						</div>
					<?php } ?>
				<?php }?>
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