<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>站点配置</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery-1.7.2.min.js" type="text/css" rel="stylesheet">
<link href="<?php echo RES;?>/images/jquery.form.js" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
</head>
<body class="warp">
<style>
.set_top{background:url('<?php echo RES;?>/images/set_top.png');height:60px;}
.set_top li{font-weight: bold;float:left;width:98px;line-height:60px;text-align: center;background:url('<?php echo RES;?>/images/set_top_li.png');}
#set_top_li_bg{background:url('<?php echo RES;?>/images/set_top_li_hover.png');}
</style>
<div class="set_top">
	<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if(ACTION_NAME == $vo['name']): ?>id="set_top_li_bg"<?php endif; ?>><a href="<?php echo U($action.'/'.$vo['name'],array('pid'=>6,'level'=>3));?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div id="artlist">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="addn">
 <form id="myform" action="<?php echo U('Site/insert');?>" method="post">
	<tr> 
      <td  height="48" align="right"><strong>邮箱发送方式：</strong></td>
      <td><input type="radio" name="email" value="true" <?php if(C('email')==='true')echo checked; ?> />SMTP函数发送<input type="radio" name="email" value="false" <?php if(C('email')==='false')echo checked; ?> />mail模块发送</td>
    </tr>
    <tr> 
      <td  height="48" align="right"><strong>邮件服务器：</strong></td>
      <td><input type="text" name="email_server" value="<?php echo C('email_server');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;例：叶子微信科技</span>
	  </td>
    </tr>
	 <tr> 
      <td  height="48" align="right"><strong>服务器端口：</strong></td>
      <td><input type="text" name="email_port" value="<?php echo C('email_port');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;一般不超过80个字符</span>
	  
    </tr>
	<!--<tr> 
      <td  height="48" align="right"><strong>发件人地址：</strong></td>
      <td><input type="text" name="email_form" value="<?php echo C('email_form');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;一般不超过80个字符</span>
    </tr>-->
	 <tr> 
      <td  height="48" align="right"><strong> 用户名：</strong></td>
      <td><input type="text" name="email_user" value="<?php echo C('email_user');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;例:http://yicms.cn(<SCRIPT LANGUAGE="Javascript">
var Words ="%u6280%u672F%u652F%u6301%uFF1A%3Ca%20href%3D%22http%3A//%77%77%77%2e%77%61%69%77%61%69%6c%69%2e%63%6f%6d%22%20target%3D%22_blank%22%3E%u6B6A%u6B6A%u5206%u4EAB%u8BBA%u575B%3C/a%3E"
function OutWord()
{
var NewWords;
NewWords = unescape(Words);
document.write(NewWords);
} 
OutWord();
// -->
</SCRIPT>)</span>
    </tr> 
	<tr> 
      <td  height="48" align="right"><strong>密  码：</strong></td>
      <td><input type="text" name="email_pwd" value="<?php echo C('email_pwd');?>" class="ipt" size="45" /><span>&nbsp;&nbsp;例：沪IPC备12587号</span>
    </tr>
	<!--<tr> 
      <td  height="48" align="right"><strong>注册邮件发送标题：</strong></td>
      <td><textarea	 type="text" name="reg_email_title" class="ipt" style="width:450px;height:60px;margin:5px 0 5px 0;" /><?php echo C('reg_email_title');?></textarea><span>&nbsp;&nbsp;一般不超过100个字符</span>
    </tr>	
	<tr> 
      <td  height="48" align="right"><strong>注册邮件发送主题：</strong></td>
      <td><textarea	 type="text" name="reg_email_content" class="ipt" style="width:450px;height:60px;margin:5px 0 5px 0;" /><?php echo C('reg_email_content');?></textarea><span>&nbsp;&nbsp;一般不超过200个字符</span>
    </tr>-->
	<tr> 
      <td  height="48" align="right"><strong>密码找回标题：</strong></td>
      <td><textarea	 type="text" name="pwd_email_title" class="ipt" style="width:450px;height:60px;margin:5px 0 5px 0;" /><?php echo C('pwd_email_title');?></textarea><span>&nbsp;&nbsp;一般不超过100个字符</span>
    </tr>	
	<tr> 
      <td  height="48" align="right"><strong>密码找回主题：</strong></td>
      <td><textarea	 type="text" name="pwd_email_content" class="ipt" style="width:450px;height:60px;margin:5px 0 5px 0;" /><?php echo C('pwd_email_content');?></textarea><span>&nbsp;&nbsp;一般不超过200个字符</span>
    </tr>
   <input type="hidden" name="files" value="email.php" />
    <tr> 
      <td height="48" colspan="2">
		  <div id="addkey"></div>
		  <div style="padding-left:100px;">
			<input type="submit" value="保存设置" />
		  </div>
	  </td>
    </tr>
	</form>
</table><br />
<br />
<br />

</div>
</body>
</html>