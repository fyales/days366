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
<link rel="stylesheet" href="{#css#}twitter.css" />
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
			<div class="span9">
				<div class="row" id="addItem">
					<div class="span302">
						<a href="{#public#}userinfo/changeimg" title="修改头像">
							<img src="{#imgfinish#}{$userImg}" alt="这是用户的头像" style="width:80px;height:80px" />
						</a>
					</div>
					<div class="span7 thumbnail">
						<div id="info">
							<h4>&nbsp;&nbsp;个人头像设置</h4>
							<hr />
							<form method="post"  id="userimg" action="{#public#}valid/userimg"	 class="form-horizontal" enctype="multipart/form-data">
								<div>
									<label for="file" class="control-label">上传头像</label>
									<div class="controls">
										<input type="file" name="file" />
										<button type="submit"  class="btn btn-info btn-small" name="submit" id="submit" >提交</button>
									</div>
									<input type="hidden"  value="{$time}" id="photoId" name="photoId" />
								</div>
							</form>
							{if $error|my_count}
					   		<p><label class="days366Error">{$error.0}</label>
					   		{/if}   
							<div id="uploadImgAttention">
								<p><span >图片大小不应该大于4M</span> 
								<p><span >只支持png,jpg,gif格式</span>
								<p><span>若图片过大，可以先进行裁剪再上传</span>
								<p><span>你上传动画片将会被拒绝！</span>
								
							</div>
						</div>	
					</div>
				</div>

		
		</div>
		</div>
		{include file="footer.tpl"}
	</div>
</div>
<script type="text/javascript" src="{#js#}days366.js"></script>
</body>
</html>