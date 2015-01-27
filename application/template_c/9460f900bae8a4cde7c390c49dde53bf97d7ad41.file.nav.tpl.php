<?php /* Smarty version Smarty-3.1.7, created on 2012-09-04 20:09:07
         compiled from "D:/xampp/htdocs/web/application/views\wall\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19748503f60d92da9a7-27799137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9460f900bae8a4cde7c390c49dde53bf97d7ad41' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\wall\\nav.tpl',
      1 => 1346760540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19748503f60d92da9a7-27799137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f60d92e51f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f60d92e51f')) {function content_503f60d92e51f($_smarty_tpl) {?><div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
wall/chooseday">
		<label>前往自己的特定天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block" id="ownWall">提示:输入"1月1日"等类似的形式
</div>
<?php }} ?>