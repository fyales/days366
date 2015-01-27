<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 13:53:01
         compiled from "D:/xampp/htdocs/web/application/views\days\notlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15599503f58925807c0-97335235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4902da5298e658d947acc6bd2f187ed4cd43fdd2' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\days\\notlogin.tpl',
      1 => 1347169977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15599503f58925807c0-97335235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f58927d985',
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
<?php if ($_valid && !is_callable('content_503f58927d985')) {function content_503f58927d985($_smarty_tpl) {?><!DOCTYPE html>
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
<?php echo $_smarty_tpl->getSubTemplate ("day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" >
	<div class="row" >
		<div class="span10 offset1">
			<?php echo $_smarty_tpl->getSubTemplate ("days/navNotLogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
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
response/index?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['days_id'];?>
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
						<span class="dayLike"><a class="btn btn-mini" title="喜欢" class="navItem" href="#accountNotLogin" data-toggle="modal"><i class="icon-heart"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['days_like'];?>
</span></a></span>
						<span class="dayFavourite"><a class="btn btn-mini" title="收藏" class="navItem" href="#accountNotLogin" data-toggle="modal"><i class="icon-plus-sign"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['days_favourite'];?>
</span></a></span>
						<span class="dayComment"><a class="btn btn-mini" title="评论" class="navItem" href="#accountNotLogin" data-toggle="modal"><i class="icon-comment"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['days_comment'];?>
</span></a></span>
		 				
		   				
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
days366.js"></script>

<script type="text/javascript">
$(function(){
	var container = $('.result');	
	container.imagesLoaded(function(){
		container.masonry({
		itemSelector : '.item'

		  });
		});
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