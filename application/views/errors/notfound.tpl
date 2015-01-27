<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>{$userName|default:'days366'}</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
{config_load file="smarty.config.ini" section="path" scope="global" }
<link rel="stylesheet" href="{#css#}bootstrap.min.css"/>
<link rel="stylesheet" href="{#css#}login.css" />
<!--[if lt IE 10]>
<link rel="stylesheet" href="{#css#}fixie.css" />
<![endif]-->
<!--[if lt IE 8]>
<script type="text/javascript">
	window.location.href="http://www.days366.com/global/mainifesto#browser"
</script>
<![endif]-->
</head>
<body>
		<div class="header row">
			<div class="span10 offset1">
				<div class="pull-left">
					<img src="{#img#}logo.png" alt="this is logo" />
				</div>
			</div>
		</div>
<div class="container">
<div class="row">
	<div class="span12" style="margin-bottom: 200px;">
	<h2>404</h2>
	<hr />
	<p>非常抱歉，你要找的页面没有找到！</p>
	<p><a href="{#public#}" >点此返回</a>
	</div>
</div>
<div>{include file="footer.tpl"}</div>


</div>
</body>
</html>