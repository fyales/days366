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
{include file="login/day.tpl"}
<div class="container" >
	<div class="row" >
		<div class="span10 offset1">
			{include file="days/nav.tpl"}		
		</div>

	</div>
</div>
<div class="container">
	<div class="row">
	<h4>公共天墙列表</h4>
	<p>每一天都应该拥有自己的标签，所以请为自己的一天选择标签。
	<table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>天数</th>
	                  <th>标签</th>
	                  <th>描述</th>
	                </tr>
	              </thead>
	              <tbody>
	                <tr>
	                  <td>9月12号</td>
	                  <td>文化</td>
	                  <td>近代西方思想史的三大发现</td>
	                </tr>
	                <tr>
	                  <td>9月13号</td>
	                  <td>电影</td>
	                  <td>肖申克的救赎</td>
	                </tr>
	                <tr>
	                  <td>9月14号</td>
	                  <td>城市</td>
	                  <td>南京</td>
	                </tr>
	              </tbody>
	</table>
	<p class="success">更新中...</p>	
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