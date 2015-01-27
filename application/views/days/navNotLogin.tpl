<div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="{#public#}days/find">
		<label>前往公共天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block">提示:输入"1月1日"等类似的形式
</div>
<table class="table table-bordered" id="wallNav">
<tr class="notLogin">
	<td class="userImgNotLogin">
		<a href="{#public#}account" class="btn span2">登录</a>
		<a href="{#public#}account/register" class="btn btn-info span2">注册</a>
	</td>
	<td>
		<a class="navItem add" href="#accountNotLogin" data-toggle="modal" >
			<img src="{#img#}nav/add.png" alt="record something"/>
			<div>为这天增加内容</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="#accountNotLogin" data-toggle="modal">
			<img src="{#img#}nav/calender.png" alt="same day"/>
			<div>谁出生在这天</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="#accountNotLogin" data-toggle="modal">
			<img src="{#img#}nav/bookmark.png" alt="wall list"/>
			<div>公共天墙列表</div>
		</a>
	</td>
</tr>		
</table>
<div id="accountNotLogin" class="modal fade in hide" aria-hidden="false">
		<div class="modal-header">
			<a data-dismiss="modal" class="close">×</a>
			<h4>提示</h4>
		</div>
		<div class="modal-body">
			<p>你还未登陆或者注册，请先<a href="{#public#}account">登陆</a>或者注册<a href="{#public#}account/register">注册</a>
		</div>
		<div class="modal-footer">
			<a data-dismiss="modal" class="btn btn-primary" href="#">确定</a>
		</div>
</div>