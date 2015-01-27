<div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="{#public#}days/find">
		<label>前往公共天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block">提示:输入"1月1日"等类似的形式
</div>
<table class="table table-bordered">
<tr class="twitterNav">
	<td class="userImg">
		<a class="navItem" href="{#public#}userinfo/changeimg">
			<img src="{#imgsmall#}{$userImg}" alt="user picture" />
			<div>修改头像</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}twitter/add">
			<img src="{#img#}nav/add.png" alt="record something"/>
			<div>记录今天</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}wall/index">
			<img src="{#img#}nav/calender.png" alt="wall"/>
			<div>自己的天墙</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}userinfo/label">
			<img src="{#img#}nav/info.png" alt="user information"/>
			<div>个人信息</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}friend/index">
			<img src="{#img#}nav/user.png" alt="user favouite friend"/>
			<div>收藏的人</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}befriend/index">
			<img src="{#img#}nav/id.png" alt="收藏自己的人"/>
			<div>被谁收藏</div>
		</a>
	</td>
</tr>		
</table>