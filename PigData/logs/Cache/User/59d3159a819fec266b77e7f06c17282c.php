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
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
 <form class="form" method="post" action=""  target="_top" enctype="multipart/form-data" >
        <div class="content">
<!--活动开始-->
<div class="cLineB">
    <h4>编辑刮刮卡活动开始内容</h4><a href="javascript:history.go(-1);"  class="right btnGrayS vm" style="margin-top:-27px" >返回</a>
</div> 
<div class="msgWrap bgfc"> 
<TABLE class="userinfoArea" style=" margin:0;" border="0" cellSpacing="0" cellPadding="0" width="100%"><TBODY>
<TR>
  <th valign="top"><span class="red">*</span>关键词：</th>
  <TD>
	<input type="input" class="px" id="keyword" value="<?php if($vo['keyword'] == ''): ?>刮刮卡<?php else: echo ($vo["keyword"]); endif; ?>" name="keyword" style="width:400px" ><br />
  	<span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。
  </TD>
  <TD rowspan="7" valign="top">
	  <div style="margin-left:20px">
		<img id="pic1_src" src="<?php if($vo['starpicurl'] == 0): echo RES;?>/images/img/activity-scratch-card-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" width="373px" >	
		<br />
		<input class="px" id="pic1" name="starpicurl" value="<?php if($vo['starpicurl'] == 0): echo C('site_url');?>/tpl/User/default/common/images/img/activity-scratch-card-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>"   onclick="document.getElementById('pic1_src').src=this.value;" style="width:363px;"  />
		<br /><input name="type" value="2" type="hidden"   />
		 <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic1',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic1')">预览</a>&nbsp;活动开始图片
	  </div>
  </TD>
</TR>
<TR>
  <th valign="top"><span class="red">*</span>活动名称：</th>
  <TD>
	<input type="input" class="px" id="title" value="<?php if($vo['title'] == ''): ?>刮刮卡活动开始了<?php else: echo ($vo["title"]); endif; ?>" name="title" style="width:400px" />
  	<br />
  	请不要多于50字!
  </TD>
  <TR>
  	<th valign="top"><span class="red">*</span>兑奖信息：</th>
  	<td>
		<input type="input" class="px" id="txt" value="<?php if($vo['txt'] == ''): ?>兑奖请联系我们，电话18950099999<?php else: echo ($vo["txt"]); endif; ?>" name="txt" style="width:400px" />
  		<br />请不要多于100字! 这个设定但用户输入兑奖时候的显示信息!
	</td>
  </TR>
 <TR>
  	<th valign="top"><span class="red">*</span>中奖提示：</th>
  	<td><textarea class="px"   name="sttxt" style="width:400px"  ><?php echo ($vo["sttxt"]); ?></textarea>
  		 </td>
</TR>
<TR>
	<th><span class="red">*</span>活动时间：</th>
	<td><input type="input" class="px" id="statdate" value="<?php if($vo['statdate'] != ''): echo (date("Y-m-d H:i:s",$vo["statdate"])); else: echo date('Y-m-d H:i:s',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="statdate" />                
		到
		<input type="input" class="px" id="enddate" value="<?php if($vo['enddate'] != ''): echo (date("Y-m-d H:i:s",$vo["enddate"])); else: echo date('Y-m-d H:i:s',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="enddate" onClick="WdatePicker()"  /> 
	</td>
</TR>
<TR>
<th valign="top">活动说明：</th>
<td><textarea  class="px" id="info" name="info"  style="width:400px; height:125px" ><?php if($vo['info'] == ''): ?>亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！<?php else: echo ($vo["info"]); endif; ?></textarea><br />换行请输入
 &lt;br&gt;
 </td>
</TR>
</TBODY>
</TABLE>
  </div> 
  
<!--活动结束-->
<div class="cLineB">
          	<h4>活动结束内容</h4></div> 
<div class="msgWrap bgfc">
 
  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  		<tbody>
  			<tr>
  				<th valign="top"><span class="red">*</span>活动结束公告主题：</th>
  				<td><input type="input" class="px" id="endtite" value="<?php if($vo['endtite'] == ''): ?>刮刮卡活动已经结束了<?php else: echo ($vo["endtite"]); endif; ?>" name="endtite" style="width:400px" />
  					<br />
  					请不要多于50字! </td>
  				<td rowspan="4" valign="top"><div style="margin-left:20px"><img  id="pic2_src" src="<?php if($vo['endpicurl'] == 0): echo C('site_url');?>/tpl/User/default/common/images/img/activity-scratch-card-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>"  width="373px"/> <br />
  					<input class="px" id="pic2" name="endpicurl" value="<?php if($vo['endpicurl'] == 0): echo C('site_url');?>/tpl/User/default/common/images/img/activity-scratch-card-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>"  onchange="document.getElementById('pic2_src').src=this.value;"  style="width:363px;"  />
  					<br />
  					 <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic2',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic2')">预览</a>&nbsp;活动结束图片</div></td>
  				</tr>
  			<tr>
  				<th valign="top">活动结束说明：</th>
  				<td valign="top"><textarea  class="px" id="endinfo" name="endinfo"  style="width:400px; height:125px" ><?php if($vo['endinfo'] == ''): ?>亲，活动已经结束，请继续关注我们的后续活动哦。<?php else: echo ($vo["endinfo"]); endif; ?></textarea><br />换行请输入
 &lt;br&gt;
  				  </td>
  				</tr>
  			</tbody>
  		</table>
  </div> 
  
  
<!--奖项设置-->
<div class="cLineB">
          	<h4>奖项设置</h4></div> 
<div class="msgWrap bgfc">

<TABLE class="userinfoArea" style=" margin: 0;" border="0" cellSpacing="0" cellPadding="0" width="100%">
<TBODY>
<TR>
<th valign="top"><span class="red">*</span>一等奖奖品设置：</th>
<td><input type="input" class="px" id="fist"   name="fist" value="<?php echo ($vo["fist"]); ?>"  style="width:250px"/>
请不要多于50字! </td>
  <TD rowspan="9" valign="top">&nbsp;</TD>
</TR>
<TR>
<th valign="top"><span class="red">*</span>一等奖奖品数量：</th>
<td><input type="input" class="px" id="fistnums" name="fistnums"      value="<?php echo ($vo["fistnums"]); ?>" style="width:60px" />
  <span class="red">如果是100%中奖,请把一等奖的奖品数量[ 1000就代表前1000人都中奖 ]填写多点</span></td>
                                      </TR>
<TR>
<th valign="top">二等奖奖品设置：</th>
<td><input type="input" class="px" id="second" name="second"     value="<?php echo ($vo["second"]); ?>"  style="width:250px"/>
请不要多于50字! </td>
                                          </TR>
<TR>
<th valign="top">二等奖奖品数量：</th>
<td><input type="input" class="px" id="secondnums" name="secondnums"   value="<?php echo ($vo["secondnums"]); ?>" style="width:60px" />
</td>
                                          </TR>
<TR>
<th valign="top">三等奖奖品设置：</th>
<td><input type="input" class="px" id="third" name="third"   value="<?php echo ($vo["third"]); ?>" style="width:250px" />
请不要多于50字! </td>
                                        
                                          </TR>
<TR>
<th valign="top">三等奖奖品数量：</th>
<td><input type="input" class="px" id="thirdnums" name="thirdnums"     value="<?php echo ($vo["thirdnums"]); ?>" style="width:60px" />
</td>
                                       
                                          </TR>
  
  </tbody>
 <tbody>
<TR>
<th valign="top"><span class="red">*</span>预计活动的人数：</th>
<td><input type="input" class="px" id="allpeople" name="allpeople"   value="<?php echo ($vo["allpeople"]); ?>" style="width:150px"/>  预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/(预估活动人数*每人抽奖次数) 如果要确保任何时候都100%中奖建议设置为1人参加!<span class='red'>如果要确保任何时候都100%中奖建议设置为1人参加!并且奖项只设置一等奖.</span></td>
  </TR>
                                <TR>
<th valign="top"><span class="red">*</span>每人最多允许抽奖次数：</th>
<td><input type="input" class="px" id="canrqnums" name="canrqnums"   value="<?php echo ($vo["canrqnums"]); ?>" style="width:150px"/>
必须1-5之间的数字</td>
 </TR>

<TR>
	<th valign="top">抽奖页面是否显示奖品数量：</th>
	<td><input class="radio" type="radio" name="displayjpnums" value="1"  <?php if($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示  <input class="radio" type="radio" name="displayjpnums" value="0"  <?php if($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显</td> 
</TR> 
<TR>
<th>&nbsp;</th>
<td><button type="submit" class="btnGreen" >保存</button>　<a href=""  class="btnGray vm">取消</a>　<span class="red">请确认功能管理已开启大转盘功能</span></td>
</TBODY>
</TABLE>
  </div> 
 </div>
</form>
        <div class="clr"></div>
      </div>
    </div>
  </div> 
  <script type="text/javascript">
	//onFocus事件就是当光标落在文本框中时发生的事件。
	//onBlur事件是光标失去焦点时发生的事件。
	function onfocus(obj){
		obj.html = '';
	}
	function onblur(obj,str){
		obj.html = str;
	}
  </script>
<!--底部-->
</div>
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