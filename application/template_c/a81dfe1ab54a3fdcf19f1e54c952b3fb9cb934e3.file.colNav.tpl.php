<?php /* Smarty version Smarty-3.1.7, created on 2012-08-30 20:47:09
         compiled from "D:/xampp/htdocs/web/application/views\login\colNav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21480503f60cddf9035-79976641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a81dfe1ab54a3fdcf19f1e54c952b3fb9cb934e3' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\login\\colNav.tpl',
      1 => 1345116865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21480503f60cddf9035-79976641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userId' => 0,
    'userImg' => 0,
    'userName' => 0,
    'specialImg' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f60cdead60',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f60cdead60')) {function content_503f60cdead60($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
?><div class="span3 pull-right">
	<div id="colNav">
		<div class="imgInfo">
			<div id="userId" class="hide"><?php echo $_smarty_tpl->tpl_vars['userId']->value;?>
</div>
			<div id="userImage" class="hide"><?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
</div>
			<div id="userName" class="hide"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</div>
		</div>
		<form class="form-search">
			<input type="text" class="search-query span2" placeholder="搜索公共主页" id="colNavSearch"/>
			<button class="btn"><i class="icon-search"></i></button>
			<p class="help-block">搜索公共主页（*月*号）.
		</form>


		<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['specialImg']->value)){?>	
		<hr />

		<div id="todayUserImg" class="thumbnail">
			<h5>有谁出生在今天:</h5>		
			<ol class="unstyled">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['specialImg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
">
						<img src="<?php echo $_smarty_tpl->getConfigVariable('imgsmall');?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['user_img'];?>
" alt="This is userImg who was born today" />
					</a>
				</li>
				<?php } ?>
			</ol>
			<p><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
search/sameday?day=today">查看完整列表</a>
			</div>
		<?php }?>
		

	</div>
</div><?php }} ?>