<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
<script src="<?php echo RES;?>/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
<div class="topbg">
<div class="top">
<div class="toplink">
<style>
.topbg{BACKGROUND-IMAGE: url(<?php echo RES;?>/images/top.png);BACKGROUND-REPEAT: repeat-x; height:124px; box-shadow:0 0 10px #000;-moz-box-shadow:0 0 10px #000;-webkit-box-shadow:0 0 10px #000;}
.top {
	MARGIN: 0px auto; WIDTH: 988px; HEIGHT: 124px;
}
.top .toplink{ height:27px; line-height:27px; color:#999; font-size:12px;}
.top .toplink .welcome{ float:left;}
.top .toplink .memberinfo{ float:right;}
.top .toplink .memberinfo a{ color:#999;}
.top .toplink .memberinfo a:hover{ color:#F90}
.top .toplink .memberinfo a.green{ background:none; color:#0C0}

.top .logo {WIDTH: 990px;COLOR: #333; height:70px;  FONT-SIZE:16px; PADDING-TOP:25px}
.top h1{ font-size:25px; margin-top:20px; float:left; width:230px; margin:0; padding:0;}
.top .navr {WIDTH:750px; float:right; overflow:hidden; margin-top:10px;}
.top .navr ul{ width:850px;}
.navr LI {TEXT-ALIGN:center;FLOAT: left;HEIGHT:32px;FONT-SIZE:1em;width:103px; margin-right:5px;}
.navr LI A {width:103px;TEXT-ALIGN:center; LINE-HEIGHT:30px; FLOAT: left;HEIGHT:32px;COLOR: #333; FONT-SIZE: 1em;TEXT-DECORATION: none
}
.navr LI A:hover {BACKGROUND: url(<?php echo RES;?>/images/navhover.gif) center no-repeat;color:#009900;}
.navr LI.menuon {BACKGROUND: url(<?php echo RES;?>/images/navon.gif) center no-repeat; display:block;width:103px;HEIGHT:32px;}
.navr LI.menuon a{color:#FFF;}
.navr LI.menuon a:hover{BACKGROUND: url(img/navon.gif) center no-repeat;}
.banner{height:200px; text-align:center; border-bottom:2px solid #ddd;}
.hbanner{ background: url(img/h2003070126.jpg) center no-repeat #B4B4B4;}
.gbanner{ background: url(img/h2003070127.jpg) center no-repeat #264C79;}
.jbanner{ background: url(img/h2003070128.jpg) center no-repeat #E2EAD5;}
.dbanner{ background: url(img/h2003070129.jpg) center no-repeat #009ADA;}
.nbanner{ background: url(img/h2003070130.jpg) center no-repeat #ffca22;}
a.a_upload{color:#f30}
</style>
<div class="welcome">欢迎使用多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="/#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="tpl/Home/pigcms/common/images/logo-pigcms.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">         
            <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="http://www.pigcms.com/index.php/Index/price">资费说明</a></li>
                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">微信导航</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css?id=100" rel="stylesheet" type="text/css" />
  <!--中间内容-->
  <script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
  
  <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle2">
        <div class="vipuser">


<div class="logo">
<img src="<?php echo ($wecha["headerpic"]); ?>" width="100" height="100">
</div>

<div id="nickname">
<strong><?php echo ($wecha["wxname"]); ?></strong><a href="#" target="_blank" class="vipimg vip-icon<?php echo $userinfo['id']-1; ?>" title=""></a></div>
<div id="weixinid">微信号:<?php echo ($wecha["weixin"]); ?></div>
</div>

        <div class="accountInfo">
<table class="vipInfo" width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><strong>VIP有效期：</strong><?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></td>
<td><strong>图文自定义：</strong><?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></td>
<td><strong>活动创建数：</strong><?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></td>
<td><strong>请求数：</strong><?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></td>
</tr>
<tr>
<td><strong>请求数剩余：</strong><?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></td>
<td><strong>已使用：</strong><?php echo $_SESSION['diynum']; ?></td>
<td><strong>当月赠送请求数：</strong><?php echo ($userinfo["connectnum"]); ?></td>
<td><strong>当月剩余请求数：</strong><?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></td>
</tr>

</table>
    </div>
        <div class="clr"></div>
      </div>
      <!--左侧功能菜单-->

 
<style type="text/css">
#sideBar{
border-right: 0px solid #D3D3D3 !important;
float: left;
padding: 0 0 10px 0;
width: 170px;
}
.tableContent {
background: none repeat scroll 0 0 #f5f6f7;
padding: 0;
}
.tableContent .content {
border-left: 1px solid #D7DDE6 !important;
}
ul#menu, ul#menu ul {
  list-style-type:none;
  margin: 0;
  padding: 0;
}

ul#menu a {
  display: block;
  text-decoration: none;	
}

ul#menu li {
  margin: 1px;
}
ul#menu li ul li{
  margin: 1px 0;
}
ul#menu li a {
  background: #EBEEF1;
  color: #464D6A;	
  padding: 0.5em;
}
ul#menu li .nav-header{
font-size:14px;
border-bottom: 1px solid #D7DDE6;
}
ul#menu li .nav-header:hover {
  background: #DDE4EB;
}

ul#menu li ul li a {
  background: #FCFCFC;
  color: #8288A4;
  padding-left: 20px;
}
ul#menu li ul li:last-child {
    border-bottom: 1px solid #D7DDE6;
}
ul#menu li ul li a:hover {
  background: #fff;
  border-left: 5px #4A98E0 solid;
 
}
ul#menu li.selected a{
  background: #fff;
  border-left: 5px #4A98E0 solid;
  padding-left: 15px;
  color: #4A98E0;
}
.code { border: 1px solid #ccc; list-style-type: decimal-leading-zero; padding: 5px; margin: 0; }
.code code { display: block; padding: 3px; margin-bottom: 0; }
.code li { background: #ddd; border: 1px solid #ccc; margin: 0 0 2px 2.2em; }
.indent1 { padding-left: 1em; }
.indent2 { padding-left: 2em; }
.tableContent .content{min-height: 1328px;}
</style>
    
      <div class="tableContent">
        
        <!--左侧功能菜单-->
 <div  class="sideBar" id="sideBar">
<div class="catalogList">
<ul id="menu">
<a class="nav-header">基础设置</a>
<ul class="ckit">
<li <?php if(MODULE_NAME == 'Function'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>">功能管理</a>
</li>
<li <?php if(MODULE_NAME == 'Areply'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Areply/index',array('token'=>$token));?>">关注时回复与帮助</a>
</li>
<li <?php if(MODULE_NAME == 'Text'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Text/index',array('token'=>$token));?>">微信－文本回复</a>
</li>
<li <?php if(MODULE_NAME == 'Img'): ?>class="selected" <?php else: ?> class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Img/index',array('token'=>$token));?>">微信－图文回复</a>
</li>
<li   <?php if(MODULE_NAME == 'Voiceresponse'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>">微信－语音回复</a>
</li>
<li   <?php if(MODULE_NAME == 'Company'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Company/index',array('token'=>$token));?>">自定义LBS回复</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Other'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Other/index',array('token'=>$token));?>">回答不上来的配置</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Sms'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Index/editsms',array('id'=>session('wxid'),'token'=>$token));?>">短信平台配置</a><span class="new"></span>
</li>
<li <?php if(MODULE_NAME == 'Email'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>><a href="<?php echo U('Index/editemail',array('id'=>session('wxid'),'token'=>$token));?>">邮件平台配置</a><span class="new"></span>
</li>
<!--li   <?php if(MODULE_NAME == 'lbslist'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="javascript:alert('已经实现智能地理位置回复，无需人工设置')">LBS回复</a><span class="new"></span>
</li-->
</ul>


<a class="nav-header">3G网站设置</a>
<ul class="ckit">
		<li <?php if(ACTION_NAME == 'set'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> 
			<a href="<?php echo U('Home/set',array('token'=>$token));?>">首页回复配置</a>
		</li>
		<li <?php if(MODULE_NAME == 'Classify'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Classify/index',array('token'=>$token));?>">分类管理</a>
		</li>
		<li <?php if(ACTION_NAME == 'plugmenu'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> 
			<a href="<?php echo U('Home/plugmenu',array('token'=>$token));?>">一键拨号与版权</a><span class="new"></span>
		</li>
		
		<li   <?php if(MODULE_NAME == 'Tmpls'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>">模板管理</a><span class="new"></span>
		</li>
		<?php
 if (is_dir($_SERVER['DOCUMENT_ROOT'].'/cms')&&!strpos($_SERVER['HTTP_HOST'],'pigcms')){ echo '<li class="subCatalogList"> <a href="/cms/manage/index.php">高级模板</a><span class="new"></span></li>'; } ?>
		<li   <?php if(MODULE_NAME == 'Flash'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Flash/index',array('token'=>$token));?>">首页幻灯片<span class="new"></span></a>
		</li>
		<li   <?php if(MODULE_NAME == 'Diymen'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Diymen/index',array('token'=>$token));?>">自定义菜单<span class="new"></span></a>
		</li>
		<li   <?php if(MODULE_NAME == 'Panorama'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Panorama/index',array('token'=>$token));?>">360°全景<span class="new"></span></a>
		</li>
</ul>

<a class="nav-header">电商系统</a>
<ul class="ckit">
<li   <?php if(MODULE_NAME == 'Alipay_config'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>">支付宝设置</a></li>
	<li   <?php if(MODULE_NAME == 'Taobao'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Taobao/index',array('token'=>$token));?>">淘宝天猫店铺配置</a></li>
	<li   <?php if(MODULE_NAME == 'apilist'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Api/index',array('token'=>$token));?>">融合第三方</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Adma'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Adma/index',array('token'=>$token));?>">DIY宣传页</a></li>
	<li   <?php if(MODULE_NAME == 'Photo'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Photo/index',array('token'=>$token));?>">3G图集(相册)</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Selfform'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Selfform/index',array('token'=>$token));?>">万能表单,报名,留言,预约</a></li>
	 <li   <?php if(MODULE_NAME == 'Host'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Host/index',array('token'=>$token));?>">通用订单(酒店,KTV)</a><span class="new"></span></li> 
	 <li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Groupon/index',array('token'=>$token));?>">微信团购系统</a><span class="new"></span></li>
	 <li   <?php if((MODULE_NAME == 'Product') and (ACTION_NAME == 'index')): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Product/index',array('token'=>$token));?>">微信商城系统</a><span class="new"></span></li> 
	 <li   <?php if(ACTION_NAME == 'orders'): ?>class="selected"<?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>">无线订餐（网络打印）</a><span class="new"></span></li>
	 
</ul>

<a class="nav-header">微用户管理开发中</a>
<ul class="ckit">
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">分组管理－新增</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">微信群发－新增</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'wechat_grout'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="javascript:alert('开发中，感谢关注')">人工客服－新增</a><span class="new"></span></li>

</ul>
<a class="nav-header">推广活动</a>
<ul class="ckit">
	<li   <?php if(MODULE_NAME == 'Lottery'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Lottery/index',array('token'=>$token));?>">幸运大转盘</a><span class="new"></span></li>
	<li   <?php if(MODULE_NAME == 'Coupon'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Coupon/index',array('token'=>$token));?>">优惠券</a></li>
	<li   <?php if(MODULE_NAME == 'Guajiang'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>">刮刮卡</a></li>
</ul>
<a class="nav-header">会员卡</a>
<ul class="ckit">
	<li <?php if(ACTION_NAME == ''): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/index',array('token'=>$token));?>">会员卡设计</a></li>
	<li  style="display:none"> <a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>">最新通知</a></li>
	<li <?php if(ACTION_NAME == 'privilege'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>">会员特权</a></li>
	<li <?php if(ACTION_NAME == 'info'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/info',array('token'=>$token));?>">会员卡详情</a></li>
	<li <?php if(ACTION_NAME == 'create'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/create',array('token'=>$token));?>">在线开卡(自定义卡号)</a></li>
	<li  <?php if(ACTION_NAME == 'exchange'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>">积分设置</a></li>
		<li   <?php if(MODULE_NAME == 'Member'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?>> <a href="<?php echo U('Member/index',array('token'=>$token));?>">会员资料管理</a><span class="new"></span></li>
</ul>

<a class="nav-header">统计分析</a>
<ul class="ckit">
<li   <?php if(MODULE_NAME == 'index'): ?>class="selected" <?php else: ?>class="subCatalogList"<?php endif; ?> > <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>">请求数详情</a>
</li>
</ul>
</ul>
</div>
</div>
<style>
a.nav-header{background:url(/tpl/static/images/arrow_click.png) center right no-repeat;cursor:pointer}
a.nav-header-current{background:url(/tpl/static/images/arrow_unclick.png) center right no-repeat;}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$(".nav-header").mouseover(function(){
		$(this).css('background-color','#126CA9');
	}).mouseout(function(){
		$(this).css('background-color','#2f8bc9');
	}).click(function(){
		$(this).toggleClass('nav-header-current');
		$(this).next('.ckit').slideToggle();
	})
});
</script>
<style type="text/css">
.plug-menu {
width:36px;
height:36px;
border-radius:36px;
-moz-box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
-webkit-box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
box-shadow:0 0 0 4px #FFFFFF, 0 2px 5px 4px rgba(0, 0, 0, 0.25);
background-color: FF0000;
position:relative
}
.plug-menu span {
display: block;
width:28px;
height:28px;
background: url(tpl/User/default/common/images/photo/plugmenu.png) no-repeat;
background-size: 28px 28px;
text-indent: -999px;
position:absolute;
top:4px;
left:4px;
overflow: hidden;
}
</style>
<script src="./tpl/User/default/common/js/cart/jscolor.js" type="text/javascript"></script>
<form method="post" action="" enctype="multipart/form-data">
 <input type="hidden" name="formhash" id="formhash" value="a68de075">
   <div class="content">

<div class="cLineB">
  <h4>快捷菜单 <span class="FAQ">提供一键拨号，一键导航，一键email等等快捷功能</span></h4>
  
 </div>
 <div class="msgWrap bgfc" style="padding: 5px 20px;">
 	<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%">
<tbody>
<tr>
<td width="60"><div class="plug-menu" id="plugmenucolor" style="background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>"><span class="close"></span></div></td>
<td width="140"><strong>请选择快捷菜单的颜色：</strong></td>
<td width="95"><input type="text" name="plugmenucolor" id="themeStyle" value="<?php echo ($homeInfo["plugmenucolor"]); ?>" class="px color" style="width: 55px; background-image: none; background-color:<?php echo ($homeInfo["plugmenucolor"]); ?>; color: rgb(255, 255, 255);" onblur="document.getElementById('plugmenucolor').style.backgroundColor=document.getElementById('themeStyle').value;"></td>
<td width="536">请在手机上查看效果！</td>

</tr>
<?php if($userGroup["iscopyright"] == 1): ?><tr>
<td width="60"> </td>
<td><strong>设置页面版权：</strong></td>
 
<td colspan="2"><textarea class="px" style="width:550px; height:35px" name="copyright"><?php echo ($homeInfo["copyright"]); ?></textarea><br>例如：© 2001-2013 某某版权所有 </td>

</tr><?php endif; ?>
</tbody>
</table>
 </div>
         
 
 <div class="msgWrap form">
         
<div class="bdrcontent">
<div id="div_ptype">
<table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
<thead>
<tr>
<th style=" width:40px;">图标</th>
                    <th style=" width:80px;">名称</th>
<th style=" width:270px;"><span class="tooltips">外链网站或活动 <img src="<?php echo RES;?>/images/price_help.png" align="absmiddle"><span>
<p>比如你想跳转到百度，就填写<a class="red">http://www.baidu.com</a></p>
<p>不需要跳转就不用填写，还可以外链活动，</p>
<p>直接填写活动外链地址：<a class="red">大转盘 888</a></p>
</span></span></th>
<th style=" width:70px;">显示顺序</th>
<th>显示(<span class="red">只显示勾选的前4项</span>) </th>
                        </tr>
</thead>
                    
<tbody><tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu1.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>电话</td>
<td><input class="px" type="text" style="width:250px;" name="url_tel" value="<?php echo $menus['tel']['url']; ?>"></td>
<td><input type="text" name="sort_tel" value="<?php echo $menus['tel']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_tel" value="1" <?php if($menus['tel']['display']){echo 'checked';} ?> /> 默认为商家电话，可以输入电话号码，比如：13888888888</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu2.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>会员资料</td>
<td><input class="px" type="text" style="width:250px;" name="url_memberinfo" value="<?php echo $menus['memberinfo']['url']; ?>"></td>
<td><input type="text" name="sort_memberinfo" value="<?php echo $menus['memberinfo']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_memberinfo" value="1" <?php if($menus['memberinfo']['display']){echo 'checked';} ?> /> 默认为会员卡资料，可以填写外链</td></tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu3.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>导航</td>
<td><input class="px" type="text" style="width:250px;" name="url_nav" value="<?php echo $menus['nav']['url']; ?>"></td>
<td><input type="text" name="sort_nav" value="<?php echo $menus['nav']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_nav" value="1" <?php if($menus['nav']['display']){echo 'checked';} ?> /> 默认为商家地图</td></tr>

<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu5.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>分享</td>
<td><input class="px" type="text" style="width:250px;" name="url_share" value="<?php echo $menus['share']['url']; ?>"></td>
<td><input type="text" name="sort_share" value="<?php echo $menus['share']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_share" value="1" <?php if($menus['share']['display']){echo 'checked';} ?> /> </td></tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu6.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>首页</td>
<td><input class="px" type="text" style="width:250px;" name="url_home" value="<?php echo $menus['home']['url']; ?>"></td>
<td><input type="text" name="sort_home" value="<?php echo $menus['home']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_home" value="1" <?php if($menus['home']['display']){echo 'checked';} ?> /> 默认为首页</td></tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu7.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>相册</td>
<td><input class="px" type="text" style="width:250px;" name="url_album" value="<?php echo $menus['album']['url']; ?>"></td>
<td><input type="text" name="sort_album" value="<?php echo $menus['album']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_album" value="1" <?php if($menus['album']['display']){echo 'checked';} ?> /> 默认为3g相册</td></tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu8.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>邮箱</td>
<td><input class="px" type="text" style="width:250px;" name="url_email" value="<?php echo $menus['email']['url']; ?>"></td>
<td><input type="text" name="sort_email" value="<?php echo $menus['email']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_email" value="1" <?php if($menus['email']['display']){echo 'checked';} ?> /> 请填写邮箱地址</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu9.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>购物</td>
<td><input class="px" type="text" style="width:250px;" name="url_shopping" value="<?php echo $menus['shopping']['url']; ?>"></td>
<td><input type="text" name="sort_shopping" value="<?php echo $menus['shopping']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_shopping" value="1" <?php if($menus['shopping']['display']){echo 'checked';} ?> /> 默认为微商城</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu10.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>会员卡</td>
<td><input class="px" type="text" style="width:250px;" name="url_membercard" value="<?php echo $menus['membercard']['url']; ?>"></td>
<td><input type="text" name="sort_membercard" value="<?php echo $menus['membercard']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_membercard" value="1" <?php if($menus['membercard']['display']){echo 'checked';} ?> /> 默认为会员卡</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu11.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>活动</td>
<td><input class="px" type="text" style="width:250px;" name="url_activity" value="<?php echo $menus['activity']['url']; ?>"></td>
<td><input type="text" name="sort_activity" value="<?php echo $menus['activity']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_activity" value="1" <?php if($menus['activity']['display']){echo 'checked';} ?> /> 请填写活动外链代码</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu12.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>新浪微博</td>
<td><input class="px" type="text" style="width:250px;" name="url_weibo" value="<?php echo $menus['weibo']['url']; ?>"></td>
<td><input type="text" name="sort_weibo" value="<?php echo $menus['weibo']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_weibo" value="1" <?php if($menus['weibo']['display']){echo 'checked';} ?> /> 请填写微博地址</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu13.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>腾讯微博</td>
<td><input class="px" type="text" style="width:250px;" name="url_tencentweibo" value="<?php echo $menus['tencentweibo']['url']; ?>"></td>
<td><input type="text" name="sort_tencentweibo" value="<?php echo $menus['tencentweibo']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_tencentweibo" value="1" <?php if($menus['tencentweibo']['display']){echo 'checked';} ?> /> 请填写微博地址</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu14.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>腾讯空间</td>
<td><input class="px" type="text" style="width:250px;" name="url_qqzone" value="<?php echo $menus['qqzone']['url']; ?>"></td>
<td><input type="text" name="sort_qqzone" value="<?php echo $menus['qqzone']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_qqzone" value="1" <?php if($menus['qqzone']['display']){echo 'checked';} ?> /> 请填写空间地址</td>
</tr>
<tr style="display:none">
<td><img src="tpl/User/default/common/images/photo/plugmenu15.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>微信</td>
<td><input class="px" type="text" style="width:250px;" name="url_wechat" value="<?php echo $menus['wechat']['url']; ?>"></td>
<td><input type="text" name="sort_wechat" value="<?php echo $menus['wechat']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_wechat" value="1" <?php if($menus['wechat']['display']){echo 'checked';} ?> /> 默认为您的微信号</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu16.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>音乐</td>
<td><input class="px" type="text" style="width:250px;" name="url_music" value="<?php echo $menus['music']['url']; ?>"></td>
<td><input type="text" name="sort_music" value="<?php echo $menus['music']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_music" value="1" <?php if($menus['music']['display']){echo 'checked';} ?> /> 请填写音乐地址</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu17.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>视频</td>
<td><input class="px" type="text" style="width:250px;" name="url_video" value="<?php echo $menus['video']['url']; ?>"></td>
<td><input type="text" name="sort_video" value="<?php echo $menus['video']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_video" value="1" <?php if($menus['video']['display']){echo 'checked';} ?> /> 请填写视频地址</td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu18.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>推荐</td>
<td><input class="px" type="text" style="width:250px;" name="url_recommend" value="<?php echo $menus['recommend']['url']; ?>"></td>
<td><input type="text" name="sort_recommend" value="<?php echo $menus['recommend']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_recommend" value="1" <?php if($menus['recommend']['display']){echo 'checked';} ?> /></td>
</tr>
<tr>
<td><img src="tpl/User/default/common/images/photo/plugmenu19.png" align="absmiddle" style=" background-color:#CCC;width:32px;"></td>
<td>其他</td>
<td><input class="px" type="text" style="width:250px;" name="url_other" value="<?php echo $menus['other']['url']; ?>"></td>
<td><input type="text" name="sort_other" value="<?php echo $menus['other']['taxis']; ?>" class="px" style="width:50px;"></td>
<td><input class="checkbox" type="checkbox" name="display_other" value="1" <?php if($menus['other']['display']){echo 'checked';} ?> /></td>
</tr>
             
                 <tr>
                 	<td class="norightborder">&nbsp;</td>
                 	<td colspan="4" class="norightborder">
                 		<button type="submit" name="batchsubmit" value="true" class="btnGreen vm"><strong>保存</strong></button></td>
                 	</tr>
  </tbody></table>
</div>
</div>



     <script>

$(document).ready(function(){
 
 
  $(".checkbox").click(function(){
var i=0; 
 
  $("input:checked").each(function(){
  
 
    i++;
  
  });
 if(i>4){
 alert('最多只显示四项');
 }
});

});



</script>

 
   
          </div>
  
        </div></form>
		  </div>
</div>
</div>

<style>
.IndexFoot {
	BACKGROUND-COLOR: #333; WIDTH: 100%; HEIGHT: 39px
}
.foot{ width:988px; margin:0px auto; font-size:12px; line-height:39px;}
.foot .foot_page{ float:left; width:600px;color:white;}
.foot .foot_page a{ color:white; text-decoration:none;}
#copyright{ float:right; width:380px; text-align:right; font-size:12px; color:#FFF;}
</style>
<div class="IndexFoot" style="height:120px;clear:both">
<div class="foot">
<div class="foot_page" >
<a href="<?php echo C('site_url');?>">微信公众号最强平台！</a><br/>
帮助您快速搭建属于自己的移动3G营销平台,构建自己的对话式客户群体。
</div>
<div id="copyright" style="color:white">
	<?php echo C('site_name');?><br/>
	技术支持：<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=505581766&site=qq&menu=yes"><img height="20" border="0" src="http://wpa.qq.com/pa?p=2:505581766:51" alt="联系我吧" title="联系我吧"/></a>
</div>
    </div>
</div>


</body>
</html>