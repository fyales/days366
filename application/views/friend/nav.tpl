<div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="{#public#}friend/chooseday">
		<label>前往此人的特定天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<input type="hidden" name="friendId" id="friendId" value="{$friendId}" />
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block" id="ownWall">提示:输入"1月1日"等类似的形式
</div>
