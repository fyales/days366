<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:17:35
         compiled from "D:/xampp/htdocs/web/application/views\friend\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31171503f63e2b3b724-27029648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d60225b763c91b4990d43d7b9b12fdff99cf86f' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\friend\\index.tpl',
      1 => 1347171082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31171503f63e2b3b724-27029648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f63e2d950f',
  'variables' => 
  array (
    'userName' => 0,
    'userInput' => 0,
    'type' => 0,
    'result' => 0,
    'item' => 0,
    'pageNumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f63e2d950f')) {function content_503f63e2d950f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_forpage')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_forpage.php';
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

<div class="container">
	<div class="row">

		<div class="row">
			<div class="span9">
				<form method="POST" class="form-horizontal" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
search/name" style="margin-top:20px;">
					<div class="control-group">
						<label class="control-label">搜索你的好友</label>
						<div class="controls">
							<input type="search"  class="input-medium span3" id="search"  name="search" placeholder="举例：北京大学  董敏"/>
							<button type="submit" class="btn"  ><i class="icon-search"></i>&nbsp;搜索</button>										
						</div>
					</div>
	
					<div class="control-group">
						<label class="control-label">选择搜索选项</label>
						<div class="controls">
							<label class="radio">
								<input type="radio" name="type"  value="day"   id="day" checked>更据出生日期找到同日出生的人
							</label>
							<label class="radio">
								<input type="radio" name="type" value="people"  id="people">更据大学与人名找到自己的好友						
							</label>
						</div>

					</div>
					<input type="hidden"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['userInput']->value)===null||$tmp==='' ? '' : $tmp);?>
"  id="userInput"/>
					<input type="hidden"  value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['type']->value)===null||$tmp==='' ? '' : $tmp);?>
"  id="userInputType" />
				</form>
				<h4>你收藏的人</h4>
			   	<div id="searchResult" >
			   	
			   	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   	<div class="friendInfo thumbnail" >
				   		<div class="imgData">
				   		
				   			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
">
				   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgfinish');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['user_img'];?>
" alt="这是用户的头像" />
				   			</a>
				   		</div>
				   		
				   		<div class="textData">
				   		<hr />
				   			<p><span><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</a>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['user_birthday'];?>
</span>
				   			<p><?php echo $_smarty_tpl->tpl_vars['item']->value['user_province'];?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['user_city'];?>
&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['item']->value['user_us'];?>
</span><p>
				   			<p><a href="#deleteFriend" data-toggle="modal"  class="delete" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
"><button class="btn btn-mini" >取消收藏</button></a>
				   		</div>
				
				   	</div>
			   	<?php } ?>
			   	</div>
			   	<div class="modal fade" id="deleteFriend" >
			   
				    <div class="modal-header">
				    <a class="close" data-dismiss="modal">×</a>
				    <h3>取消收藏</h3>
				    </div>
				    <div class="modal-body">
				    <p>你真的想想取消收藏此人吗?</p>
				    </div>
				    <div class="modal-footer">
				    <button class="btn" id="deleteFriendButton" >确定</button>
				    </div>
				</div>
			   	
			   	<?php echo smarty_modifier_my_forpage($_smarty_tpl->tpl_vars['pageNumber']->value);?>

			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>

<script type="text/javascript">


	var userId;
	$(function()
			{

				$('#page ul li a').click(function()
						{
							var number=$(this).attr('value');
							$.getJSON('http://www.days366.com/friend/choosepage?pageNumber='+number,function(data)
									{
										var result=data;
										$('#searchResult').empty();
										for (var i=0;i<result.result.length;i++)
											{
		
											var imgData=$('<div class="imgData">').append('<a href="http://www.days366.com/friend/findfriendmainpage?id='+result.result[i].friendId+'"'+' >'+'<img src="http://www.days366.com/userImg/userimg/small/'+result.result[i].userImg+'" alt="这是用户的头像" />'+'</a>');
											var button=$('<p>').append('<a href="#deleteFriend" data-toggle="modal" class="delete"  data="'+result.result[i].friendId+'"  ><button class="btn btn-mini">取消收藏</button></a>');
											var textData=$('<div class="textData">').append('<hr /><p><span><a href="http://www.days366.com/friend/findfriendmainpage?id='+result.result[i].friendId+'"'+' >'+result.result[i].userName+'</a>&nbsp;&nbsp;'+result.result[i].userBirthday+'</span>')
																										.append('<p><span>'+result.result[i].userProvince+result.result[i].userCity+'&nbsp;&nbsp;'+result.result[i].userUs+'</span>')
																										.append(button);
											var friendInfo=$('<div class="friendInfo thumbnail">')
																				.append(imgData)
																				.append(textData);

										
											$('#searchResult').append(friendInfo);
										}
								
								});
							});
				$('#search').popover(
						{
							title:'注意!',
							trigger:'focus',
							placement:'left',
							content:"<p>如果你想寻找好友，选择人名单选按钮:</p><p>&nbsp;&nbsp;并输入\"北京大学 董敏\"的形式</p><p>如果你想寻找同一天出生的人，选择日期单选按钮</p><p>&nbsp;&nbsp;请输入1992-01-01或01-01的形式"						
						});
				$('.friendInfo a.delete').live('click',function(){userId=$(this).attr('data');});
				$('#deleteFriendButton').live('click',function()
					{
						$.ajax({
							url:'http://www.days366.com/friend/delete?id='+userId,
							dataType:'json',
							async:false,
							success:function(data)
							{
									$('#deleteFriend').modal('hide');
									var result=data;
									if (result.result.state=='fail')
									{
										var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h3>取消收藏</h3>');
										var modalbody=$('<div class="modal-body">').append('<p>数据操作失败');
										var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																														.append(modalbody);
										$('body').append(modal);
										$('#ajaxError').modal('show');
									}
								else
									{
									var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h4>取消收藏</h4>');
									var modalbody=$('<div class="modal-body">').append('<p><span>取消收藏成功！</span>');
									var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																													.append(modalbody);
									$('body').append(modal);
									$('#ajaxError').modal('show');

									}									
							},
							error:function()
							{
								
								var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h3>取消收藏</h3>');
								var modalbody=$('<div class="modal-body">').append('<p>数据操作失败');
								var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																												.append(modalbody);
								$('body').append(modal);
								$('#ajaxError').modal('show');

							}
				
							});
					});

				var $container = $('#searchResult');
				$container.imagesLoaded(function(){
				$container.masonry({
				itemSelector : '.thumbnail'
	
				  });
				});
				
		});
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
</body>
</html><?php }} ?>