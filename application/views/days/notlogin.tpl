<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>{$userName|default:'days366'}</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
{config_load file="smarty.config.ini" section="path" scope="global" }
<link rel="stylesheet" href="{#css#}bootstrap.min.css"/>
<link rel="stylesheet" href="{#css#}style.css" />
<link rel="stylesheet" href="{#css#}wall.css" />
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
{include file="day.tpl"}
<div class="container" >
	<div class="row" >
		<div class="span10 offset1">
			{include file="days/navNotLogin.tpl"}		
		</div>

	</div>
</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div id="displayWall" class="span12">
		<hr id="specialHr"/>
		<h4 class="success">{$month}月{$day}日墙</h4>		
		<div class="result">

		{foreach from=$result item=item}
		<div class="item thumbnail">
		{if $item.days_image neq 'none' && $item.days_image} 
		<a href="{#public#}response/index?id={$item.days_id}" >
			<img src="{#favourite#}{$item.days_image}" class="thumbnail" alt="this is a picture" />
		</a>
		{/if}
			<div class="resultImgData">
		   			<a href="{#public#}friend/findfriendmainpage?id={$item.days_user_id}">
		   				<img src="{#imgsmall#}{$item.action_user_image}" alt="这是用户的头像" >
		   			</a>
			</div>
			<div class="resultTextData" data="{$item.days_id}">
		   		<div class="textData">
					   <h6><span><a href="{#public#}friend/findfriendmainpage?id={$item.days_user_id}">{$item.action_user_name}</a></span>&nbsp;	
					   		{if $item.days_type eq 2}
						   	发表
						   	{else}
						   	收藏
						   	{/if}
						   	于{$item.days_time}</h6>
						   <hr />
					<h4>{$item.days_title}</h4>
		   			<p>{$item.days_content}
		   			{if $item.days_url neq 'http://' && $item.days_url}
		   			<p>来源URL:<a href="{$item.days_url}" target="_blank">{$item.days_url}</a>
		   			
		   			{/if}
		   			<div class="buttons">
						<span class="dayLike"><a class="btn btn-mini" title="喜欢" class="navItem" href="#accountNotLogin" data-toggle="modal"><i class="icon-heart"></i>&nbsp;<span>{$item.days_like}</span></a></span>
						<span class="dayFavourite"><a class="btn btn-mini" title="收藏" class="navItem" href="#accountNotLogin" data-toggle="modal"><i class="icon-plus-sign"></i>&nbsp;<span>{$item.days_favourite}</span></a></span>
						<span class="dayComment"><a class="btn btn-mini" title="评论" class="navItem" href="#accountNotLogin" data-toggle="modal"><i class="icon-comment"></i>&nbsp;<span>{$item.days_comment}</span></a></span>
		 				
		   				
		   			</div>
		
		   		</div>		   	
			</div>
		
		</div>
		{/foreach} 

		</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		{include file="footer.tpl"}
	</div>
</div>
<script type="text/javascript" src="{#js#}days366.js"></script>
{literal}
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
{/literal}
</body>
</html>