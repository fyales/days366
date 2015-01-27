<?php /* Smarty version Smarty-3.1.7, created on 2012-08-31 21:56:11
         compiled from "D:/xampp/htdocs/web/application/views\twitter\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23271503f63d789e9e5-56049735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baa1ac858bb006d3df190a01dabb44686330bdc4' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\twitter\\nav.tpl',
      1 => 1346420545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23271503f63d789e9e5-56049735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f63d793efb',
  'variables' => 
  array (
    'userImg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f63d793efb')) {function content_503f63d793efb($_smarty_tpl) {?><div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/find">
		<label>前往公共天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block">提示:输入"1月1日"等类似的形式
</div>
<table class="table table-bordered">
<tr class="twitterNav">
	<td class="userImg">
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userinfo/changeimg">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
<?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
" alt="user picture" />
			<div>修改头像</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
twitter/add">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/add.png" alt="record something"/>
			<div>记录今天</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
wall/index">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/calender.png" alt="wall"/>
			<div>自己的天墙</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userinfo/label">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/info.png" alt="user information"/>
			<div>个人信息</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/index">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/user.png" alt="user favouite friend"/>
			<div>收藏的人</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
befriend/index">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/id.png" alt="收藏自己的人"/>
			<div>被谁收藏</div>
		</a>
	</td>
</tr>		
</table><?php }} ?>