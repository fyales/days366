<div class="container-fluid">
<div class="row-fluid">
<div class="navbar" id="days366Nav">
	<div class="navbar-inner">
		<div class="container">
			<div class="row">
			<div class="brand">
				<img src="{#img#}smallLogo.png" alt="This is logo" />
			</div>

				<ul class="nav">
					<li>
						<a href="{#public#}twitter/index" title="每天动态"><i class="icon-refresh icon-white"></i></a>
					</li>				
					<li>
						<a href="{#public#}days/index" title="公共天墙"><i class="icon-flag icon-white"></i></a>
					</li>

					<li>
						<a href="{#public#}message/index" title="消息"><i class="icon-comment icon-white"></i>
						{if $messageNumber neq 0}
						<span style="color: red">({$messageNumber})</span>
						{/if}
						</a>
					</li>
					<li>
					<li>
					<a href="{#public#}friend/index" title="搜索朋友" ><i class="icon-search icon-white"></i></a>
					</li>
					<li>
						<a href="{#public#}account/logout" title="注销"><i class="icon-off icon-white"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
</div>
