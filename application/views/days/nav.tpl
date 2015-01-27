<div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="{#public#}days/find">
		<label>前往公共天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block">提示:输入"1月1日"等类似的形式
</div>
<table class="table table-bordered" id="wallNav">
<tr>
	<td class="userImg">
		<a class="navItem" href="{#public#}userinfo/changeimg">
			<img src="{#imgsmall#}{$userImg}" alt="user picture" />
			<div>修改头像</div>
		</a>
	</td>
	<td>
		<a class="navItem add" href="{#public#}days/add">
			<img src="{#img#}nav/add.png" alt="record something"/>
			<div>为这天增加内容</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}search/sameday?day=today">
			<img src="{#img#}nav/calender.png" alt="same day"/>
			<div>谁出生在这天</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="{#public#}days/list">
			<img src="{#img#}nav/bookmark.png" alt="wall list"/>
			<div>公共天墙列表</div>
		</a>
	</td>
</tr>		
</table>