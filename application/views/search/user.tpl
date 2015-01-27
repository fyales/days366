<!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="day,birthday,days366,大学,同学,朋友,交友,每一天" />
<meta name="Description" content="remember every day!,记住每一天" />
<title>{$userName|default:'days366'}</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
{config_load file="smarty.config.ini" section="path" scope="global" }
<link rel="stylesheet" href="{#css#}bootstrap.min.css"/>
<link rel="stylesheet" href="{#css#}friend.css" />
<link rel="stylesheet" href="{#css#}style.css" />
<!--[if lt IE 10]>
<link rel="stylesheet" href="{#css#}fixie.css" />
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
<script type="text/javascript" src="{#js#}bootstrap.min.js"></script>
<script type="text/javascript" src="{#js#}jquery.masonry.min.js"></script>
<script type="text/javascript" src="{#js#}jquery.imagesloaded.min.js"></script>
</head>
<body>
{include file="login/day.tpl"}
<div class="container">
	<div class="row">
		
		<div class="row">
		<div class="span9" id="friendIndex">
			<form method="POST" class="form-horizontal" action="{#public#}search/name" style="margin-top:20px;">
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
								<input type="radio" name="type"  value="day"   id="day" >更据出生日期找到同日出生的人
							</label>
							<label class="radio">
								<input type="radio" name="type" value="people"  id="people" checked>更据大学与人名找到自己的好友						
							</label>
						</div>

					</div>
					<input type="hidden"  value="{$userInput|default:''}"  id="userInput"/>
					<input type="hidden"  value="{$type|default:''}"  id="userInputType" />
				</form>
				<h4>我们为你搜索的结果如下：</h4>
				   	{if $error|my_count|default:''}
   					<label class="success">{$error}</label>
   					{/if}  
				<div  id="searchResult">

					{foreach from=$result item=item}
				   	<div class="friendInfo thumbnail" >
								<div class="imgData">
						   			<a href="{#public#}friend/findfriendmainpage?id={$item.user_id}">
						   				<img src="{#imgfinish#}{$item.user_img}" alt="这是用户的头像" />
						   			</a>
						   		</div>
						   		
						   		<div class="textData">
						   		<hr />
						   			<p><span><a href="{#public#}friend/findfriendmainpage?id={$item.user_id}">{$item.user_name}</a>&nbsp;&nbsp;{$item.user_birthday}</span>
						   			<p>{$item.user_province}{$item.user_city}&nbsp;&nbsp;<span>{$item.user_us}</span><p>
						   			<p><a href="#collectFriend" data-toggle="modal"  class="collect" data="{$item.user_id}"><button class="btn btn-mini" >收藏此人</button></a>
						   		</div>
				   	</div>
					{/foreach}
				</div>
			{$pageNumber|my_forpage|default:''}
			</div>
		</div>
		{include file="footer.tpl"}
	</div>
</div>
   	<div class="modal fade" id="collectFriend" >
   
	    <div class="modal-header">
	    <a class="close" data-dismiss="modal">×</a>
	    <h4>收藏此人</h4>
	    </div>
	    <div class="modal-body">
	    <p>你真的想收藏此人吗?</p>
	    </div>
	    <div class="modal-footer">
	    <button class="btn" id="saveFriendButton" >确定</button>
	    </div>
	</div>
{literal}
<script type="text/javascript">


var userId;
$(function()
		{
			$('.friendInfo p a').live('click',function(){ userId=$(this).attr('data');});
			$('#saveFriendButton').live('click',function()
					{
						var id=$('.user').val();
						$.ajax({
								url:'http://www.days366.com/friend/save?id='+userId,
								dataType:'json',
								async:false,
								success:function(data)
								{
										$('#collectFriend').modal('hide');
										var result=data;
										if (result.result.state=='fail')
										{
											if (result.result.type=="exist")
												{
												var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h4>警告！</h4>');
												var modalbody=$('<div class="modal-body">').append('<p><span  >你已收藏此人！</span>');
												var modal=$('<div class="modal fade" id="ajaxWarning">').append(modalheader)
																																.append(modalbody);
												$('body').append(modal);
												$('#ajaxWarning').modal('show');
												return 1;
												}
											var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h4>失败</h4>');
											var modalbody=$('<div class="modal-body">').append('<p>数据操作失败！');
											var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																								.append(modalbody);
											$('body').append(modal);
											$('#ajaxError').modal('show');
											return 1;
										}
									else
										{
										var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h4>收藏</h4>');
										var modalbody=$('<div class="modal-body">').append('<p><span>收藏成功！</span>');
										var modal=$('<div class="modal fade" id="ajaxSuccess">').append(modalheader)
																														.append(modalbody);
										$('body').append(modal);
										$('#ajaxSuccess').modal('show');

										}									
								},
								error:function()
								{
									$('#collectFriend').modal('hide');
									var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h3>取消收藏</h3>');
									var modalbody=$('<div class="modal-body">').append('<p>数据操作失败');
									var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																						.append(modalbody);
									$('body').append(modal);
									$('#ajaxError').modal('show');

								}
						});
					return false;
						}
			);
			$('#search').popover(
					{
						title:'注意!',
						trigger:'focus',
						placement:'left',
						content:"<p>如果你想寻找好友，选择人名单选按钮:</p><p>&nbsp;&nbsp;并输入\"北京大学 董敏\"的形式</p><p>如果你想寻找同一天出生的人，选择日期单选按钮</p><p>&nbsp;&nbsp;请输入1992-01-01或01-01的形式"					
					});
			$('#page ul li a').live('click',function()
					{
						var userInput=$('form #userInput').val();
						var searchType=$('form #userInputType').val();
						var number=$(this).attr('value');
						$.ajax(
								{
									dataType:'json',
									type:'POST',
									timeout:3000,
									data:{search:userInput,page:number,type:searchType},
									url:'http://www.days366.com/search/choosepage',
									success:function(data)
									{
											
											var result=data;
											if (result.result.state=='fail')
												{
													var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h4>注意！</h4>');
													var modalbody=$('<div class="modal-body">').append('<p>数据加载失败');
													var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																																	.append(modalbody);
													$('body').append(modal);
													$('#ajaxError').modal('show');
												}
											else
											{
												$('#searchResult').empty();
												for (var i=0;i<result.result.length;i++)
													{
													var result=data;
													$('#searchResult').empty();
													for (var i=0;i<result.result.length;i++)
														{
					
														var imgData=$('<div class="imgData">').append('<a href="http://www.days366.com/friend/findfriendmainpage?id='+result.result[i].friendId+'"'+' >'+'<img src="http://www.days366.com/userImg/userimg/small/'+result.result[i].userImg+'" alt="这是用户的头像" />'+'</a>');
														var button=$('<p>').append('<a href="#collectFriend" data-toggle="modal" class="collect"  data="'+result.result[i].friendId+'"  ><button class="btn btn-mini">收藏此人</button></a>');
														var textData=$('<div class="textData">').append('<hr /><p><span><a href="http://www.days366.com/friend/findfriendmainpage?id='+result.result[i].friendId+'"'+' >'+result.result[i].userName+'</a>&nbsp;&nbsp;'+result.result[i].userBirthday+'</span>')
																													.append('<p><span>'+result.result[i].userProvince+result.result[i].userCity+'&nbsp;&nbsp;'+result.result[i].userUs+'</span>')
																													.append(button);
														var friendInfo=$('<div class="friendInfo thumbnail">')
																							.append(imgData)
																							.append(textData);

													
														$('#searchResult').append(friendInfo);
													}
											}
												

											}
									},
									error:function()
									{
										var modalheader=$('<div class="modal-header">').append('<a class="close" data-dismiss="modal">&times;</a><h4>注意</h4>');
										var modalbody=$('<div class="modal-body">').append('<p>数据加载失败');
										var modal=$('<div class="modal fade" id="ajaxError">').append(modalheader)
																							.append(modalbody);
										$('body').append(modal);
										$('#ajaxError').modal('show');
									}
								}

								);

				});	


		});




</script>
{/literal}
<script type="text/javascript" src="{#js#}days366.js"></script>
</body>