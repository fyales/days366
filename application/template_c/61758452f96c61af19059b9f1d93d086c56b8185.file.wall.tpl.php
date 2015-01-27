<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 19:20:00
         compiled from "D:/xampp/htdocs/web/application/views\wall\wall.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84875040b7399f50f4-55224560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61758452f96c61af19059b9f1d93d086c56b8185' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\wall\\wall.tpl',
      1 => 1347171274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84875040b7399f50f4-55224560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5040b739bfe16',
  'variables' => 
  array (
    'userName' => 0,
    'month' => 0,
    'day' => 0,
    'days366Result' => 0,
    'item' => 0,
    'twitterResult' => 0,
    'userImg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5040b739bfe16')) {function content_5040b739bfe16($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
?><!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="day,birthday,days366,大学,同学,朋友,交友,每一天" />
<meta name="Description" content="remember every day!,记住每一天" />
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
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
				<?php echo $_smarty_tpl->getSubTemplate ("wall/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
			<div class="span12" id="displayWall">
				<hr />
				<h4 class="success">你个人的<?php echo $_smarty_tpl->tpl_vars['month']->value;?>
月<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
日墙</h4>
				<div class="result">
					<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['days366Result']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days366Result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<div class="item thumbnail" id="itemDays366">
					<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_image']&&$_smarty_tpl->tpl_vars['item']->value['twitter_image']!='none'){?>
					<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
response/index?type=twitter&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
"  target="_blank">
						<img src="<?php echo $_smarty_tpl->getConfigVariable('wall');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_image'];?>
"  class="thumbnail"  alt="this is a picture" />
					</a>
					<?php }?>
						<div class="resultImgData">
					   			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=96">
					   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
days366.png" alt="这是用户的头像" >
					   			</a>
						</div>
						<div class="resultTextData" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
">
					   		<div class="textData">
					   			<h6><span><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=96">Days366</a>&nbsp;的收藏</span></h6>
					   			<hr />
					<h4><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_title'];?>
</h4>
		   			<p><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_content'];?>

		   			<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_url']!='http://'&&$_smarty_tpl->tpl_vars['item']->value['twitter_url']){?>
		   			<p>来源URL:<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_url'];?>
</a>
		   			<?php }?>
					
							</div>		   	
					   	</div>
					</div>
					<?php } ?>
					<?php }?> 
					<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['twitterResult']->value)){?>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['twitterResult']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<div class="item thumbnail" id="items">
					<a class="close" title="删除" href="#delete" data-toggle="modal">&times;</a>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['twitter_image']&&$_smarty_tpl->tpl_vars['item']->value['twitter_image']!='none'){?>
					<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
message/find?type=twitter&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
" >
						<img src="<?php echo $_smarty_tpl->getConfigVariable('wall');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_image'];?>
"  class="thumbnail  ownWallImg"  alt="this is a picture" />
					</a>
					<?php }?>
						<div class="resultImgData">
					   			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_user_id'];?>
">
					   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
<?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
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
									<span class="dayLike"><button disabled class="btn btn-mini" title="喜欢"><i class="icon-heart"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_like'];?>
</button></span>
									<span class="dayFavourite"><button disabled class="btn btn-mini" title="收藏"><i class="icon-plus-sign"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_favourite'];?>
</button></span>
									<span class="dayComment"><a class="btn btn-mini"  href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
message/find?type=twitter&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_id'];?>
" title="评论" ><i class="icon-comment"></i><?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_comment'];?>
</a></span>
							</div>
							</div>		   	
						</div>
					</div>
					<?php } ?> 
					<?php }?>
				</div>
			</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>

<div class="modal fade" id='delete' >
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h4>删除</h4>
		</div>
		<div class="modal-body">
				<p>你确定要删除?一经删除后，数据将不可恢复,所有的评论,喜欢,收藏的数据都将消失!
		</div>
		<div class="modal-footer">
			<button class="btn" id="close">取消</button>
			<button class="btn" id="buttonDelete">确定</button>
		</div>
</div>
<div class="modal fade" id='deleteSuccess' >
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h4>删除成功</h4>
		</div>
		<div class="modal-body">
				<p>删除成功!
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">确定</button>
		</div>
</div>
<div class="hidden" id="userImage"><?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
</div>
<div class="hidden"><div id="month"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</div><div id="day"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</div></div>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
allAjax.js"></script>
  

 <script type="text/javascript">
 var container = $('.result');
 $(function()
		 {
		
		container.imagesLoaded(function(){
		container.masonry({
		itemSelector : '.item'

		  });
		});

		$('#close').click(function(){$('#delete').modal('hide');});
	 	var deleteType;
	 	var id;
	 	var month=$('#month').text();
	 	var day=$('#day').text();
		var month=$('#month').text();

		$('#items .close').live('click',function()
				{

					 id=$(this).parent().children('.resultTextData').attr('data');
			});
		$('.modal-footer #buttonDelete').live('click',function()
				{
					$.ajax(
							{
								dataType:'json',
								url:"http://www.days366.com/wall/deletetwitter"+'?id='+id,
								error:function(){Remove();$('#delete').modal('hide');Error();},
								success:function(){Remove();$('#delete').modal('hide');$('#deleteSuccess').modal('show');},
								beforeSend:function(){addLoading($('.modal-footer'));}
							});
					

			});

		});
			
 </script>
 
 
 <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
</body>
</html><?php }} ?>