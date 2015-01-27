<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>{$userName|default:'days366'}</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
{config_load file="smarty.config.ini" section="path" scope="global" }
<link rel="stylesheet" href="{#css#}bootstrap.min.css"/>
<link rel="stylesheet" href="{#css#}style.css" />
<link rel="stylesheet" href="{#css#}add.css" />


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
<script type="text/javascript" src="{#js#}ajaxfileupload.js"></script>
<script type="text/javascript" src="{#js#}jquery.validate.min.js"></script>
<!--[if lt IE 10]>
<link rel="stylesheet" href="{#css#}fixie.css" />
<script type="text/javascript" src="{#js#}ieImageUpload.js"></script>
<![endif]-->
</head>
<body>
{include file="login/day.tpl"}
<div class="container" >
		
		<div class="row" >
			<h4><img src="{#img#}pen.png">&nbsp;记录生活点滴</h4>
			<hr />
			<div class="span3 thumbnail well" id="addImg">
			<h5 class="hide" id="imageUpload" >上传图像</h5>
				<form method="post" action="#" onSubmit="return false;" id="formImage">
					<input type="file" class="hide" id="file" name="file"/>

					<button class="btn" type="button" id="imgButton"><i class="icon-plus-sign"></i>&nbsp;添加图像</button>
					<p class="help-block">非必需。可是发布图片能使你发布的内容更加精彩。
					
				</form>
				<div class="hide loading"><img src="{#img#}loading.jpg"  /></div>
				<div id="fileSuccess" class="hide">
					<label class="success">上传成功，请增加描述</label>
				</div>
				<div id="fileError" class="hide"><label class="error">图像上上传失败</label></div>
			</div>
			<div class="span8 thumbnail well" id="main">
				{if $error|my_count}
				   	<label class="error">{$error.0}</label>
				{/if}
				<form method="post" class="form-horizontal" id="formMain" action="{#public#}twitter/save">
						<input type="hidden" value="none" name="hiddenImg" id="hiddenImg"/>
						<div id="title" class="control-group">
							<label class="control-label">标题</label>
							<div class="controls">
							<input type="text" class="span7" id="title" name="title"/>
							<p class="help-block">非必需.	
							</div>			
						</div>
					
						<div id="content" class="control-group">
							<label class="control-label">内容</label>
							<div class="controls">
								<textarea class="span7" id="content" name="content"></textarea>
								<p class="help-block">你发表的内容中出现的&lt;br&gt;标签是帮助你换行.							
							</div>

						</div>
					
						<div id="link" class="control-group">
							<label class="control-label">链接</label>
							<div class="controls">
								<input type="text" class="span7" value="http://" name="href" id="href">
								<p class="help-block">非必需,来源URL即为你想分享的照片,文章等的出处，它帮助你的朋友更容易阅读，分享它。							
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button class="btn btn-info">发布</button>								
							</div>
					
						</div>
						
				</form>
			</div>
		{include file="footer.tpl"}
	</div>
</div>
<script type="text/javascript" src="{#js#}microBlog/display.js"></script>

</body>
</html>