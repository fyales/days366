<?php /* Smarty version Smarty-3.1.7, created on 2012-09-07 18:25:14
         compiled from "D:/xampp/htdocs/web/application/views\friend\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106625049c6f0139e19-70469061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3478d5cb728ec903f0be7ff1f6fc53fc5cc712c5' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\friend\\nav.tpl',
      1 => 1347013490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106625049c6f0139e19-70469061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5049c6f01407f',
  'variables' => 
  array (
    'friendId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5049c6f01407f')) {function content_5049c6f01407f($_smarty_tpl) {?><div class="searchWall offset2">
	<form class="form-inline" methond="GET" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/chooseday">
		<label>前往此人的特定天墙:&nbsp;</label>
		<input type="text" id="colNavSearch" placeholder="choose date" id="wallDate" name="wallDate"/>
		<input type="hidden" name="friendId" id="friendId" value="<?php echo $_smarty_tpl->tpl_vars['friendId']->value;?>
" />
		<button class="btn btn-success">Go</button>
	</form>
	<p class="help-block" id="ownWall">提示:输入"1月1日"等类似的形式
</div>
<?php }} ?>