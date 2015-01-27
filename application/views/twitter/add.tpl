<div class="row" id="addItem">
	<div class="span302">
		<a href="{#public#}userinfo/changeimg" title="修改头像">
			<img src="{#imgfinish#}{$userImg}" alt="这是用户的头像" style="width:80px;height:80px" />
		</a>
	</div>
	<div class="span7 thumbnail">
		<ol class="unstyled">
			<li>
				<a href="{#public#}twitter/add" >
					<img src="{#img#}pen.png" />
					<span>写点什么</span>		
				</a>
				<a href="{#public#}twitter/add" >
					<img src="{#img#}image.png" />
					<span>上传图像</span>		
				</a>
			</li>
		</ol>

	</div>
</div>
<div id="divFormText" class="modal hide fade">
	<div class="modal-header">
		<button class="close" data-dismiss="modal" type="button">×</button>
		<h3>记录点滴</h3>
	</div>
	<div class="modal-body">
		<form action="post" class="form-horizontal" id="formText" onSubmit="return false;">
			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input type="text" class="title" id="textTitle"/>
					<p class="help-block">非必需.
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">添加的内容</label>
				<div class="controls">
					<textarea class="textarea" id="textTextarea"></textarea>
					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >来源URL</label>
				<div class="controls">
					<input type="text" value="http://" class="href" id="textHref" />
				</div>
			</div>
		</form>
		<div id="imageDiv"><img src="{#img#}loading.jpg"  id="formTextLoading" class="hide" alt="loading" /></div>	
		
	</div>
	<div class="modal-footer">
		<a class="btn" data-dismiss="modal" href="#">取消</a>
		<a class="btn submit"  href="#">提交</a>
	</div>
</div>
<div id="divAllText" class="modal hide fade">
	<div class="modal-header">
		<button class="close" data-dismiss="modal" type="button">×</button>
		<h3>添加图像</h3>
	</div>
	<div class="modal-body">
		<form method="post" class="form-inline" onSubmit="return false;" id="formImage">

				<label class="control-label">上传图像</label>
				<input type="file" name="file" id="file"/>
				<button class="btn btn-primary" type="submit">提交</button>				
				
		</form>
		<div id="imageDiv"><img src="{#img#}loading.jpg"  id="formImageLoading" class="hide" alt="loading" /></div>	
		<hr />		
		<form action="post" class="form-horizontal" id="formAll" onSubmit="return false;">
			<input type="hidden" id="imgHidden" name="imgHidden" value="" />
			<div class="control-group">
				<label class="control-label">标题</label>
				<div class="controls">
					<input type="text" class="title" id="textTitle"/>
					<p class="help-block">非必需.
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">添加的内容</label>
				<div class="controls">
					<textarea class="textarea" id="textTextarea"></textarea>
					<p class="help-block">你发表的内容中出现的&lt;br&gt;标签是帮助你换行.
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" >来源URL</label>
				<div class="controls">
					<input type="text" value="http://" class="href" id="textHref" />
					<p class="help-block">非必需.来源URL即为你想分享的照片,文章等的出处，它帮助你的朋友更容易阅读，分享它。
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<a class="btn" data-dismiss="modal" href="#">关闭</a>
		<a class="btn" class="submit" href="#">取消</a>
	</div>
</div>