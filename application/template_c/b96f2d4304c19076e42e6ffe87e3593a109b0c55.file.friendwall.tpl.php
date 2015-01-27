<?php /* Smarty version Smarty-3.1.7, created on 2012-09-07 18:39:32
         compiled from "D:/xampp/htdocs/web/application/views\friend\friendwall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8631503f60d8ecf0f2-06788835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b96f2d4304c19076e42e6ffe87e3593a109b0c55' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\friend\\friendwall.tpl',
      1 => 1347014347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8631503f60d8ecf0f2-06788835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f60d922112',
  'variables' => 
  array (
    'userName' => 0,
    'friendId' => 0,
    'friendName' => 0,
    'month' => 0,
    'day' => 0,
    'twitterResult' => 0,
    'item' => 0,
    'friendImg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f60d922112')) {function content_503f60d922112($_smarty_tpl) {?><!doctype html>
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
			<div class="span12">
				<?php echo $_smarty_tpl->getSubTemplate ("friend/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="#displayWall" class="span12">
		<hr />
		<h4 class="success">&nbsp;&nbsp;<a href="http://www.days366.com/friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['friendId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['friendName']->value;?>
</a>的<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
月<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
日墙</h4>		
		<div class="result">

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['twitterResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div class="item thumbnail">
		<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_image']&&$_smarty_tpl->tpl_vars['item']->value['twitter_image']!='none'){?> 
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
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['friendId']->value;?>
">
		   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
<?php echo $_smarty_tpl->tpl_vars['friendImg']->value;?>
" alt="这是用户的头像" >
		   			</a>
			</div>
			<div class="resultTextData" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
">
		   		<div class="textData">
					   <h6><span><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
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
						<span class="dayLike"><button class="btn btn-mini" title="喜欢"><i class="icon-heart"></i><span><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_like'];?>
</span></button></span>
						<span class="dayFavourite"><button  class="btn btn-mini" title="收藏"><i class="icon-plus-sign"></i><span><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_favourite'];?>
</span></button></span>
						<span class="dayComment"><a class="btn btn-mini" title="评论" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
response/index?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
"><i class="icon-comment"></i><span><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_comment'];?>
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
allAjax.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
  

 <script type="text/javascript">
 var container = $('.result');
 $(function()
		 {
		container.imagesLoaded(function(){
			container.masonry({
			itemSelector : '.item'

			  });
			});
		var userImg=$('#userImage').text();
		var userName=$('#userName').text();
		var d=new Date();
		var month=$('#month').text();
	 	var id;
	 	var month=$('#month').text();
	 	var day=$('#day').text();
		var month=$('#month').text();
				$('.result .dayLike button').live('click',function()
						{
					var item=$(this).parent().parent().parent().parent();
					var itemId=item.attr('data');
					var number=$(this).children('span').text();
					
					number=parseInt(number);
					var button=$(this);	
					$.ajax(
							{
					async:false,
					dataType:'json',
					global:true,
					url:'http://www.days366.com/twitter/like?id='+itemId,
					success:function(data)
					{
						var result=data;
						Remove();
						if (result.result.state=='fail')
						{
										Error();
										return 1;
						}
					
						button.children('span').text(number+1);
						button.attr('disabled','disabled');							
						},

					error:function()
					{

						Error();
					}
					});

								});

				$('.result .dayFavourite button').live('click',function()
						{
					var item=$(this).parent().parent().parent().parent();
					var itemId=item.attr('data');
					var number=$(this).children('span').text();
					number=parseInt(number);
					var button=$(this);	
					$.ajax(
							{
					async:false,
					dataType:'json',
					global:false,
					url:'http://www.days366.com/twitter/favourite?id='+itemId,
					success:function(data)
					{
						var result=data;
						button.children('span').text(number+1);
						button.attr('disabled','disabled');							
						}
					});
			});

		 });

 </script>

</body>
</html><?php }} ?>