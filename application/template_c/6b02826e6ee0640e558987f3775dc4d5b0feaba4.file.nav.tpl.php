<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:55:19
         compiled from "D:/xampp/htdocs/web/application/views\days\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15092503f5776bd30d1-24607548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b02826e6ee0640e558987f3775dc4d5b0feaba4' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\days\\nav.tpl',
      1 => 1347173505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15092503f5776bd30d1-24607548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f5776c1f8c',
  'variables' => 
  array (
    'userImg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f5776c1f8c')) {function content_503f5776c1f8c($_smarty_tpl) {?><div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/find">
		<label>前往公共天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block">提示:输入"1月1日"等类似的形式
</div>
<table class="table table-bordered" id="wallNav">
<tr>
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
		<a class="navItem add" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/add">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/add.png" alt="record something"/>
			<div>为这天增加内容</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
search/sameday?day=today">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/calender.png" alt="same day"/>
			<div>谁出生在这天</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/list">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/bookmark.png" alt="wall list"/>
			<div>公共天墙列表</div>
		</a>
	</td>
</tr>		
</table><?php }} ?>