<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:15:47
         compiled from "D:/xampp/htdocs/web/application/views\twitter\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4262503f63d74829a3-51652465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5867de135ac77ecb7c389969920d8ac370c73168' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\twitter\\index.tpl',
      1 => 1347171217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4262503f63d74829a3-51652465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f63d77c5b9',
  'variables' => 
  array (
    'userName' => 0,
    'preLastMonth' => 0,
    'preYesterday' => 0,
    'lastMonth' => 0,
    'yesterday' => 0,
    'month' => 0,
    'day' => 0,
    'allTwitterResult' => 0,
    'item' => 0,
    'pageNumber' => 0,
    'type' => 0,
    'pageMonth' => 0,
    'pageDay' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f63d77c5b9')) {function content_503f63d77c5b9($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_forother')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_forother.php';
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
			<?php echo $_smarty_tpl->getSubTemplate ("twitter/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
		</div>

	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="#displayWall" class="span12">
		<hr id="specialHr"/>
				<div class="pagination pagination-centered">
					<ul >
						<li><a href="http://www.days366.com/twitter/findday?month=<?php echo $_smarty_tpl->tpl_vars['preLastMonth']->value;?>
&day=<?php echo $_smarty_tpl->tpl_vars['preYesterday']->value;?>
">&larr; 前天</a></li>
						<li><a href="http://www.days366.com/twitter/findday?month=<?php echo $_smarty_tpl->tpl_vars['lastMonth']->value;?>
&day=<?php echo $_smarty_tpl->tpl_vars['yesterday']->value;?>
">&larr; 昨天</a></li>
						<li><a href="http://www.days366.com/twitter/findday?month=<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
&day=<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">今天</a></li>
					</ul>
				</div>		
		<div class="result">

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allTwitterResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="item thumbnail">
		<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_image']!='none'){?> 
		<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
response/index?type=twitter&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
" >
			<img src="<?php echo $_smarty_tpl->getConfigVariable('favourite');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_image'];?>
" class="thumbnail" alt="this is a picture" />
		</a>
		<?php }?>
			<div class="resultImgData">
		   			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_user_id'];?>
">
		   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['action_user_image'];?>
" alt="这是用户的头像" >
		   			</a>
			</div>
			<div class="resultTextData" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
">
		   		<div class="textData">
					   <h6><span><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['action_user_name'];?>
</a></span>&nbsp;	
					   		<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_type']==2){?>
						   	发表
						   	<?php }else{ ?>
						   	收藏
						   	<?php }?>
						   	于<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_time'];?>
</h6>
						   <hr />
					<h4><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_title'];?>
</h4>
		   			<p><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_content'];?>

		   			<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_url']!='http://'&&$_smarty_tpl->tpl_vars['item']->value['twitter_url']){?>
		   			<p>来源URL:<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_url'];?>
</a>
		   			<?php }?>
		   			<div class="buttons">
						<span class="dayLike"><button class="btn btn-mini" title="喜欢"><i class="icon-heart"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_like'];?>
</span></button></span>
						<span class="dayFavourite"><button  class="btn btn-mini" title="收藏"><i class="icon-plus-sign"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_favourite'];?>
</span></button></span>
						<span class="dayComment"><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
response/index?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
" title="评论" class="btn btn-mini"><i class="icon-comment"></i>&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_comment'];?>
</span></a></span>
		 				
		   				
		   			</div>
		
		   		</div>		   	
			</div>
		
		</div>
		<?php } ?> 

		</div>
		<?php if ($_smarty_tpl->tpl_vars['pageNumber']->value!=1&&$_smarty_tpl->tpl_vars['pageNumber']->value!=0){?>
		<div class="pagination pagination-centered">
 			<?php echo (($tmp = @smarty_modifier_my_forother($_smarty_tpl->tpl_vars['pageNumber']->value,$_smarty_tpl->tpl_vars['type']->value,$_smarty_tpl->tpl_vars['pageMonth']->value,$_smarty_tpl->tpl_vars['pageDay']->value))===null||$tmp==='' ? '' : $tmp);?>

		</div>
		<?php }?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<div id="month" class="hidden"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</div>
<div id="day" class="hidden"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</div>
<div id="pageDay" class="hidden"><?php echo $_smarty_tpl->tpl_vars['pageDay']->value;?>
</div>
<div id="pageMonth" class="hidden"><?php echo $_smarty_tpl->tpl_vars['pageMonth']->value;?>
</div>


<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
allAjax.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
microBlogAction.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
</body>
</html><?php }} ?>