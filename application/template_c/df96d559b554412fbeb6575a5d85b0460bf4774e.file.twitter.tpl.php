<?php /* Smarty version Smarty-3.1.7, created on 2012-09-09 14:45:40
         compiled from "D:/xampp/htdocs/web/application/views\message\twitter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104355040be267036a1-04907068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df96d559b554412fbeb6575a5d85b0460bf4774e' => 
    array (
      0 => 'D:/xampp/htdocs/web/application/views\\message\\twitter.tpl',
      1 => 1347173134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104355040be267036a1-04907068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5040be2692362',
  'variables' => 
  array (
    'userName' => 0,
    'content' => 0,
    'userImg' => 0,
    'item' => 0,
    'number' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5040be2692362')) {function content_5040be2692362($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['userName']->value)===null||$tmp==='' ? 'days366' : $tmp);?>
</title>
<link rel="icon" type="image/ico" href="http://www.days366.com/favicon.ico">
<?php  $_config = new Smarty_Internal_Config("smarty.config.ini", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("path", 'global'); ?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
bootstrap.min.css"/>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
style.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('css');?>
twitter.css" />
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
ajaxfileupload.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("login/day.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
		
		<div class="row">
			<div class="span9">
				<div class="result">
					<div class="displayItem row">
						<div class="span302">
					   			<a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_user_id'];?>
">
					   				<img src="<?php echo $_smarty_tpl->getConfigVariable('imgfinish');?>
<?php echo $_smarty_tpl->tpl_vars['userImg']->value;?>
" alt="这是用户的头像" style="width:80px;height:80px;">
					   			</a>
						</div>
						<div class="span7 thumbnail" data="<?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_id'];?>
">
					   		<div class="textData">
						   		<h4>
						   			<span><a href="<?php echo $_smarty_tpl->getConfigVariable('public');?>
friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</a></span>
						   			<?php if ($_smarty_tpl->tpl_vars['content']->value['twitter_type']==2){?>
						   			发表
						   			<?php }else{ ?>
						   			收藏
						   			<?php }?>
						   			于<?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_time'];?>

						   		</h4>
						   		<hr />
						<?php if ($_smarty_tpl->tpl_vars['content']->value['twitter_image']){?>
							<div class="displayImage"><img class="thumbnail" src="<?php echo $_smarty_tpl->getConfigVariable('public');?>
userImg/favourite/<?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_image'];?>
" alt="this is a picture" /></div>
						<?php }?>
					<h4><?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_title'];?>
</h4>
		   			<p><?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_content'];?>

		   			<?php if ($_smarty_tpl->tpl_vars['content']->value['twitter_url']!='http://'&&$_smarty_tpl->tpl_vars['content']->value['twitter_url']){?>
		   			<p>来源URL:<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['twitter_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_url'];?>
</a>
		   			<?php }?>
					   			<div class="buttons">
									<span class="dayLike"><button class="btn btn-mini "  ><i class="icon-heart"></i>&nbsp;(<span><?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_like'];?>
</span>)</button></span>
									<span class="dayFavourite"><button class="btn btn-mini "  ><i class="icon-plus-sign"></i>&nbsp;(<span><?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_favourite'];?>
</span>)</button></span>
									<span class="dayComment"><button class="btn btn-mini" ><i class="icon-comment"></i>&nbsp;(<span><?php echo $_smarty_tpl->tpl_vars['content']->value['twitter_comment'];?>
</span>)</button></span>
					   			</div>
					
					   		</div>

					   	<div class="hiddenComment">
					   	<?php if ($_smarty_tpl->tpl_vars['number']->value!=0){?>
					   	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					   	<hr />
					   	<div class="twiiterComment">
					   	<div class="commentImgData pull-left">
					   		<a href="http://www.days366.com/friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tc_user_id'];?>
">
								<img alt="这是用户的头像" src="http://www.days366.com/userImg/userimg/small/<?php echo $_smarty_tpl->tpl_vars['item']->value['action_user_img'];?>
">
							</a>
					   	</div>
						<div class="commentTextData" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['tc_user_id'];?>
">
						<h6><a href="http://www.days366.com/friend/findfriendmainpage?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tc_user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['action_user_name'];?>
</a>&nbsp;评论于<?php echo $_smarty_tpl->tpl_vars['item']->value['tc_time'];?>
</h6>
						<p><?php echo $_smarty_tpl->tpl_vars['item']->value['tc_comment'];?>
</p>
						<span class="repeat"><button class="btn btn-mini">回复</button></span>
						</div>
					   	</div>
						<?php } ?>
					   	<?php }?>
						   	</div>	
						</div>
					</div>
				</div>
			</div>

	</div>		<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
allAjax.js"></script>

<script type="text/javascript">
$(function()
		{
	var userName=$('title').text();
	var d=new Date();
	$('.repeat button').click(function()
			{
				visitorName=$(this).parent().parent().children('h6').children('a').text();
				var formComment=$('<form>').append('<textarea name="textareaComment" class="textareaComment" id="textareaComment"/><button class="btn btn-mini">提交</button>');
				formComment.attr('class','formComment');
				formComment.attr('onSubmit','return false');
				$(this).parent().parent().append(formComment);
				$(this).attr('disabled','disabled');

		});
	$('.formComment').live('submit',function()
			{
				var content=$(this).children('textarea').val();
				var textContent='回复'+visitorName+':'+$(this).children('textarea').val();
				visitorName='';
			
				if (strlen(textContent)>240)
				{
					$('.formComment').append('<label class="error">输入不能超过240字节</label>');
					return false;
				}else if (strlen(content)== 0)
					{
						$('.formComment').append('<label class="error">输入不能为空</label>');
						return false;
					}
		
				var itemId=$('.span7').attr('data');
				var userID=$(this).parent().attr('data');
				$.ajax(
						{
							type:'POST',
							dataType:'json',
							async:false,
							data:{content:textContent,id:itemId,userId:userID,type:2,attr:2},
							url:'http://www.days366.com/twitter/comment',
							success:function(data)
							{
								var result=data;
								if (result.result.state=='fail')
								{
												Error();
												return 1;
								}
								userImg=getCookie('userImg');
								var imgData=$('<div class="commentImgData pull-left">').append('<a href="#" >'+'<img src="http://www.days366.com/userImg/userimg/small/'+userImg+'" alt="这是用户的头像" />'+'</a>');
								var textData=$('<div class="commentTextData">').append('<h6><a href="#" >'+userName+'</a>&nbsp;评论于'+d.toLocaleTimeString()+'</h6>')
																							.append('<p>'+textContent+'</p>');

								var twitterComment=$('<div class="twitterComment">').append(imgData)
																	.append(textData);
								var hiddenComment=$('.hiddenComment');
								hiddenComment.prepend(twitterComment)
										.prepend('<hr />');
								var comment=$('.dayComment').children('button').children('span');
								comment.text(parseInt(comment.text())+1);		
							},
							error:function()
							{
								Remove();
								Error();
							},
							complete:function(){$('.formComment').empty();}
						});


			});


	});
function strlen(str){  
    var len = 0;  
    for (var i=0; i<str.length; i++) {   
     var c = str.charCodeAt(i);    
     if ((c >= 0x0001 && c <= 0x007e) || (0xff60<=c && c<=0xff9f)) {   
       len++;   
     }   
     else {   
      len+=2;   
     }   
    }   
    return len;  
} 
function getCookie(value){
	var cookie=document.cookie;
	var first=cookie.indexOf(value+'=');
	if (first >= 0){
			var str=cookie.substring(first,cookie.length);
			var last=str.indexOf(';');
			if (last<0){
					last=str.length;
				}
			str=str.substring(0,last).split('=');
			return str[1];
		}else
		{
			return null;
		}
}
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('js');?>
days366.js"></script>
</body>
</html><?php }} ?>