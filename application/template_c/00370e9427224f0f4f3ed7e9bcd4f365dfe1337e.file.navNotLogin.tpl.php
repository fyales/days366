<?php /* Smarty version Smarty-3.1.7, created on 2012-08-30 20:12:02
         compiled from "D:/xampp/htdocs/web/application/views\days\navNotLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23173503f5892929298-27271695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00370e9427224f0f4f3ed7e9bcd4f365dfe1337e' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\days\\navNotLogin.tpl',
      1 => 1346327606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23173503f5892929298-27271695',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f5892968eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f5892968eb')) {function content_503f5892968eb($_smarty_tpl) {?><div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/find">
		<label>前往公共天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block">提示:输入"1月1日"等类似的形式
</div>
<table class="table table-bordered" id="wallNav">
<tr class="notLogin">
	<td class="userImgNotLogin">
		<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account" class="btn span2">登录</a>
		<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account/register" class="btn btn-info span2">注册</a>
	</td>
	<td>
		<a class="navItem add" href="#accountNotLogin" data-toggle="modal" >
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/add.png" alt="record something"/>
			<div>为这天增加内容</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="#accountNotLogin" data-toggle="modal">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/calender.png" alt="same day"/>
			<div>谁出生在这天</div>
		</a>
	</td>
	<td>
		<a class="navItem" href="#accountNotLogin" data-toggle="modal">
			<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
nav/bookmark.png" alt="wall list"/>
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
			<p>你还未登陆或者注册，请先<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account">登陆</a>或者注册<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account/register">注册</a>
		</div>
		<div class="modal-footer">
			<a data-dismiss="modal" class="btn btn-primary" href="#">确定</a>
		</div>
</div><?php }} ?>