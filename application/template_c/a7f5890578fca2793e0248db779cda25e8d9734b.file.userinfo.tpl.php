<?php /* Smarty version Smarty-3.1.7, created on 2012-08-30 20:59:57
         compiled from "D:/xampp/htdocs/web/application/views\user\userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25451503f636b2326d6-88053745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7f5890578fca2793e0248db779cda25e8d9734b' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\user\\userinfo.tpl',
      1 => 1346331592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25451503f636b2326d6-88053745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_503f636b356fd',
  'variables' => 
  array (
    'userName' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503f636b356fd')) {function content_503f636b356fd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_my_count')) include 'D:\\xampp\\htdocs\\web\\library\\smarty\\libs\\plugins\\modifier.my_count.php';
?><!doctype html>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Keywords" content="day,birthday,days366,大学,同学,朋友,交友,每一天" />
<meta name="Description" content="remember every day!,记住每一天" />
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/logo.ico">
<?php  $_config = new Smarty_Internal_Config("smarty.config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("path", 'global'); ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
twitter.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
style.css" />
<!--[if lt IE 10]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
fixie.css" />
<![endif]-->
<!--[if lt IE 8]>
<script type="text/javascript">
	window.location.href="http://www.days366.com/global/mainifesto#browser"
</script>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
 !window.jQuery && document.write("<script type=\"text/javascript\" src=\"http://www.days366.com/js/jquery-1.7.1.min.js\"><\/script>");
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
jquery.validate.min.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="row">
		
	<div class="row">
		<div class="span9">
			<div class="thumbnail"  id="formInfo">

			<h4>&nbsp;&nbsp;完善资料</h4>
			<hr />
			<?php echo $_smarty_tpl->getSubTemplate ("user/changeUserInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php if (smarty_modifier_my_count($_smarty_tpl->tpl_vars['error']->value)){?>
			   	<label class="label-warning"><?php echo $_smarty_tpl->tpl_vars['error']->value[0];?>
</label>
			<?php }?>
			</div>
		</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
	<div class="modal fade" id='birthdayImportant' >
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h4>为什么生日如此重要</h4>
		</div>
		<div class="modal-body">
			<p>等你填完你的生日之后:</p>
			<p>你的朋友就可以清楚地知道你的生日</p>
			<p>你可以知道谁和你一起出生,结交同年同月同日出生的好友</p>
			<p>你可以还知道你出生那天世界到底发生了什么重大事件</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">确定</a>
		</div>
	</div>
	</div>
	<div class="modal fade " id="pop">
		<div class="modal-header">
			<a class="close" data-dismiss="modal">×</a>
			<h4>添加你的大学</h4>
		</div>
		
		<div class="modal-body">
			<p>我们非常抱歉未将你的大学地址收入数据库中，我们希望你能帮助我们了解你的大学。请将你的大学名称填入下文的文本框中。</p>
			<form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('public');?>
valid/addus" id="formUs">
			<input type="text" class="span6" id="addUs" name="addUs" />
			
			<div class="pull-right"><button type="submit" class="btn">提交</button></div>
			</form>
		</div>
		
	</div>
<script type="text/javascript" src="http://www.days366.com/js/chooseday.js"></script>

<script type="text/javascript" >
	
		function chooseProvince(province){
			switch (province){
					case "安徽省":
						universites='AH';
						break;
					case "澳门":
						universites='AM';
						break;
					case "北京市":
						universites='BJ';
						break;
					case "重庆市":
						universites='CQ';
						break;
					case "福建省":
						universites='FJ';
						break;
					case "甘肃省":
						universites='GS';
						break;
					case "广东省":
						universites='GD';
						break;
					case "广西":
						universites='GX';
						break;
					case "贵州省":
						universites='GZ';
						break;
					case "海南省":
						universites='HN';
						break;
					case "河北省":
						universites='HB';
						break;
					case "河南省":
						universites='HeN';
						break;
					case "黑龙江省":
						universites='HLJ';
						break;
					case "湖北省":
						universites='HuB';
						break;
					case "湖南省":
						universites='HuN';
						break;
					case "吉林省":
						universites='JL';
						break;
					case "江苏省":
						universites='JS';
						break;
					case "江西省":
						universites='JX';
						break;
					case "辽宁省":
						universites='LN';
						break;
					case "内蒙古":
						universites='NMG';
						break;
					case "宁夏":
						universites='NX';
						break;
					case "青海省":
						universites='QH';
						break;
					case "山东省":
						universites='SD';
						break;
					case "山西省":
						universites='SX';
						break;
					case "陕西省":
						universites='SiX';
						break;
					case "上海市":
						universites='SH';
						break;
					case "四川省":
						universites='SC';
						break;
					case "台湾省":
						universites='TW';
						break;
					case "天津市":
						universites='TJ';
						break;
					case "西藏":
						universites='XZ';
						break;
					case "香港":
						universites='XG';
						break;
					case "新疆":
						universites='XJ';
						break;
					case "云南省":
						universites='YN';
						break;
					case "浙江省":
						universites='ZJ';
						break;
				}
			return province;
		}
		$(function(){
			$('#usProvince').change(function (){
				$('#us').empty();
				$('#usProvince').live('change',function(){
					$('#us').empty();
				});
				var usProvince=$('#usProvince').val();
				var universities=chooseProvince(usProvince);

			
				$.getScript('http://www.days366.com/js/universites/'+universites+'.js',function(){

					for (i=0;i<us.length;i++){
						$('#us').append("<option value='"+us[i]+"' >"+us[i]+"</option>");
					}
				});
			});
			$('#provinceCities').change(function(){
				$('#city').empty();
				
				$('#provinceCities').live('change',function(){
					$("#city").empty();
				});
				
				var provinceCities=$('#provinceCities').val();
				var city=chooseProvince(provinceCities);
				
				$.getScript('http://www.days366.com/js/cities.js',function(){
						for (i=0;i<cities[provinceCities].length;i++){
						
							
						$('#city').append("<option value='"+cities[provinceCities][i]+"' >"+cities[provinceCities][i]+"</option>");
							}
						
				});
				
			});
			$('.name').popover({trigger:'focus',content:"请填写你的真实姓名,从而方便别人找到你"});
			$('#addUs').popover({trigger:'focus',placement:'bottom',content:"你仅需要填写你的大学名称"});
			$('#userinfo').validate({
				rules:{
					firstname:{
						required:true,
						maxlength:4
					},
					lastname:{
						required:true,
						maxlength:4
					}
				},
				messages:{
					firstname:
					{
						required:"姓氏不能为空",
						maxlength:"姓氏不应超过两位"
					},
					lastname:
						{
						required:"名字不能为空",
						maxlength:"名字不应超过三位"
					}
				}
			});
			$('#formUs').validate({rules:{addUs:{maxlength:30,required:true}},messages:{addUs:{maxlength:'你输入的大学名称过长,请重新输入.',required:"大学名称不能为空！"}}});	
			
		});
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
</body>
</html><?php }} ?>