<div class="span3 pull-right">
	<div id="colNav">
		<div class="imgInfo">
			<div id="userId" class="hide">{$userId}</div>
			<div id="userImage" class="hide">{$userImg}</div>
			<div id="userName" class="hide">{$userName}</div>
		</div>
		<ul class="nav nav-tabs nav-stacked">
			<li><a href="{#public#}friend"><i class="icon-fire"></i>&nbsp;收藏{$friendNumber}人</a></li>
			<li><a href="{#public#}befriend"><i class="icon-shopping-cart "></i>&nbsp;被{$followerNumber}人收藏</a></li>
			<li><a href="{#public#}search/sameday?day={$userBirthday}"><i class="icon-calendar"></i>&nbsp;同生日{$birthdayNumber}人</a></li>
			<li><a href="{#public#}"><i class="icon-time "></i>&nbsp;自己的天墙</a></li>
		</ul>
	</div>
</div>