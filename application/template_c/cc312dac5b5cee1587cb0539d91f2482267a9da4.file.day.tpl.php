<?php /* Smarty version Smarty-3.1.7, created on 2012-08-30 20:07:18
         compiled from "D:/xampp/htdocs/web/application/views\login\day.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25799503f5776ae1140-23291299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc312dac5b5cee1587cb0539d91f2482267a9da4' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\login\\day.tpl',
      1 => 1346050751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25799503f5776ae1140-23291299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messageNumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f5776b90a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f5776b90a2')) {function content_503f5776b90a2($_smarty_tpl) {?><div class="container-fluid">
<div class="row-fluid">
<div class="navbar" id="days366Nav">
	<div class="navbar-inner">
		<div class="container">
			<div class="row">
			<div class="brand">
				<img src="<?php echo $_smarty_tpl->getConfigVariable('img');?>
smallLogo.png" alt="This is logo" />
			</div>

				<ul class="nav">
					<li>
						<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
twitter/index" title="每天动态"><i class="icon-refresh icon-white"></i></a>
					</li>				
					<li>
						<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
days/index" title="公共天墙"><i class="icon-flag icon-white"></i></a>
					</li>

					<li>
						<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
message/index" title="消息"><i class="icon-comment icon-white"></i>
						<?php if ($_smarty_tpl->tpl_vars['messageNumber']->value!=0){?>
						<span style="color: red">(<?php echo $_smarty_tpl->tpl_vars['messageNumber']->value;?>
)</span>
						<?php }?>
						</a>
					</li>
					<li>
					<li>
					<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/index" title="搜索朋友" ><i class="icon-search icon-white"></i></a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
account/logout" title="注销"><i class="icon-off icon-white"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php }} ?>