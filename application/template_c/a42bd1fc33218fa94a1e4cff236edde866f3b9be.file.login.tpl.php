<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 13:50:15
         compiled from "D:/xampp/htdocs/web/application/views\days\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5638503f5776532b36-18508812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42bd1fc33218fa94a1e4cff236edde866f3b9be' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\days\\login.tpl',
      1 => 1347169667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5638503f5776532b36-18508812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f57767fe9c',
  'variables' => 
  array (
    'userName' => 0,
    'month' => 0,
    'day' => 0,
    'result' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f57767fe9c')) {function content_503f57767fe9c($_smarty_tpl) {?><!DOCTYPE html>
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
<div class="container-fluid">
	<div class="row-fluid">
		<div id="displayWall" class="span12">
		<hr id="specialHr"/>
		<h4 class="success"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
月<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
日墙</h4>
		<div class="result">

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="item thumbnail">
		<?php if ($_smarty_tpl->tpl_vars['item']->value['days_image']!='none'&&$_smarty_tpl->tpl_vars['item']->value['days_image']){?> 
		<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
response/days?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['days_id'];?>
" >
			<img src="<?php echo $_smarty_tpl->getConfigVariable('favourite');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['days_image'];?>
" class="thumbnail" alt="this is a picture" />
		</a>
		<?php }?>
			<div class="resultImgData">
		   			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['days_user_id'];?>
">
		   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['action_user_image'];?>
" alt="这是用户的头像" >
		   			</a>
			</div>
			<div class="resultTextData" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['days_id'];?>
">
		   		<div class="textData">
					   <h6><span><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['days_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['action_user_name'];?>
</a></span>&nbsp;	
					   		<?php if ($_smarty_tpl->tpl_vars['item']->value['days_type']==2){?>
						   	发表
						   	<?php }else{ ?>
						   	收藏
						   	<?php }?>
						   	于<?php echo $_smarty_tpl->tpl_vars['item']->value['days_time'];?>
</h6>
						   <hr />
					<h4><?php echo $_smarty_tpl->tpl_vars['item']->value['days_title'];?>
</h4>
		   			<p><?php echo $_smarty_tpl->tpl_vars['item']->value['days_content'];?>

		   			<?php if ($_smarty_tpl->tpl_vars['item']->value['days_url']!='http://'&&$_smarty_tpl->tpl_vars['item']->value['days_url']){?>
		   			<p>来源URL:<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['days_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['days_url'];?>
</a>
		   			<?php }?>
		   			<div class="buttons">
						<span class="dayLike"><button class="btn btn-mini" title="喜欢"><i class="icon-heart"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['days_like'];?>
</span></button></span>
						<span class="dayFavourite"><button  class="btn btn-mini" title="收藏"><i class="icon-plus-sign"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['days_favourite'];?>
</span></button></span>
						<span class="dayComment"><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
response/days?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['days_id'];?>
"><button class="btn btn-mini" title="评论"><i class="icon-comment"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['days_comment'];?>
</span></button></a></span>
		 				
		   				
		   			</div>
		
		   		</div>		   	
			</div>
		
		</div>
		<?php } ?> 

		</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
allAjax.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days/action.js"></script>
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