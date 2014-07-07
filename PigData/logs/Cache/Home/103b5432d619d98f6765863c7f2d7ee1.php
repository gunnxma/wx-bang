<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C('site_title');?> <?php echo C('site_name');?></title>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/scrolltopcontrol.js"></script>
<!--[if IE 6]>
<script src="<?php echo RES;?>/js/PNG.js"></script>
<script>
DD_belatedPNG.fix('.banner,.pic1,.pic2');
</script>
<![endif]-->
</head>

<body>
<!--header-->
<div class="topHeader">
    <div id="header">
    	<div id="logo"><a href="/"><img src="tpl/static/logo.png" width="225" height="84" /></a></div>
        <div class="nav" id="menuNav">
        	<a href="#" onclick="Javascript:window.open('<?php echo C('site_url');?>','_blank');">首页</a>
            <a href="#Features">功能特色</a>
            <a href="#Profiles">关于我们</a>
            <a href="#Comment">客户评价</a>
            <a href="#Help">帮助指南</a>
			<a href="#" onclick="Javascript:window.open('<?php echo U('User/Index/index');?>','_blank');" >管理</a>
            <?php if($_SESSION[uid]==false): ?><a href="#" onclick="Javascript:window.open('<?php echo U('Index/login');?>' ,'_blank')" >登录</a>
			<a href="#" onclick="Javascript:window.open('<?php echo U('Index/login');?>','_blank')"  >注册</a>
			<?php else: ?>
				<a href="#" hidefocus="true"  ><?php echo (session('uname')); ?></a>
			<a href="#" onclick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>
        </div>
    </div>
</div>
<!--banner-->
<div id="banner">
	<div class="banner"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=505581766&site=qq&menu=yes" rel="nofollow"><img src="<?php echo RES;?>/images/banner.png" width="1003" height="460" /></a></div>
</div>
<!--body-->
<!--功能 beign-->
<a name="Features" id="Features" style="position:absolute;top:530px;"></a>
<div class="t">
	<h2><br />特色功能<br /><span>Features</span></h2>
</div>
<div class="cl">
  <div id="servicesBox">
    <div id="serBox1" class="serBox">
      <div class="serBoxOn"></div>
      <div class="pic1 mypng"><img src="<?php echo RES;?>/images/ser_box1.png" /></div>
      <div class="pic2 mypng"><img src="<?php echo RES;?>/images/ser_box1b.png" /></div>
      <div class="txt1"><span class="tit">小黄鸡提升会员黏性</span>小黄鸡SimSimi是一个可爱的智能聊天机器人，他能和用户进行有趣的对话！使用方法非常简单，你只要开启此功能，向对话框输入文字你就可以开始对话了。</div>
      <div class="txt2"><span class="tit">小黄鸡提升会员黏性</span>小黄鸡SimSimi是一个可爱的智能聊天机器人，他能和用户进行有趣的对话！使用方法非常简单，你只要开启此功能，向对话框输入文字你就可以开始对话了。</div>
    </div>
    <div class="fgH20"></div>
    <div id="serBox2" class="serBox">
      <div class="serBoxOn" style="display: none; "></div>
      <div class="pic1 mypng" style="right: 105px; "><img src="<?php echo RES;?>/images/ser_box2.png"></div>
      <div class="pic2 mypng" style="left: -110px; "><img src="<?php echo RES;?>/images/ser_box2b.png"></div>
      <div class="txt1" style="left: 40px; "><span class="tit">多款3G网站风格</span>专用于显示个人或企业相关信息、服务、活动等内容的展示性手机网站。可以通过用户关注时自动回复引导用户进入，使用户更加详尽的了解您的各类信息。</div>
      <div class="txt2" style="right: -240px; "><span class="tit">多款3G网站风格</span>专用于显示个人或企业相关信息、服务、活动等内容的展示性手机网站。可以通过用户关注时自动回复引导用户进入，使用户更加详尽的了解您的各类信息。</div>
    </div>
    <div class="fgH20"></div>
    <div id="serBox3" class="serBox">
      <div class="serBoxOn"></div>
      <div class="pic1 mypng"><img src="<?php echo RES;?>/images/ser_box3.png"></div>
      <div class="pic2 mypng"><img src="<?php echo RES;?>/images/ser_box3b.png"></div>
      <div class="txt1"><span class="tit">自助式配置</span>会员在线充值,升级vip,数十项功能模块,自由选择使用,适合自己的才是最好的,欢迎注册进行测试。</div>
      <div class="txt2"><span class="tit">自助式配置</span>会员在线充值,升级vip,数十项功能模块,自由选择使用,适合自己的才是最好的,欢迎注册进行测试。</div>
    </div>
    <div id="serBox1" class="serBox">
      <div class="serBoxOn"></div>
      <div class="pic1 mypng"><img src="<?php echo RES;?>/images/ser_box4.png" /></div>
      <div class="pic2 mypng"><img src="<?php echo RES;?>/images/ser_box4b.png" /></div>
      <div class="txt1"><span class="tit">多项营销活动</span>会员自动,启动营销活动,幸运大转盘,刮刮卡,会员卡,会员资料,万能产品订单营销模块(适用于微信订餐,在线产品订单管理)</div>
      <div class="txt2"><span class="tit">多项营销活动</span>会员自动,启动营销活动,幸运大转盘,刮刮卡,会员卡,会员资料,万能产品订单营销模块(适用于微信订餐,在线产品订单管理)</div>
    </div>
    <div class="fgH20"></div>
    <div id="serBox2" class="serBox">
      <div class="serBoxOn" style="display: none; "></div>
      <div class="pic1 mypng" style="right: 105px; "><img src="<?php echo RES;?>/images/ser_box5.png"></div>
      <div class="pic2 mypng" style="left: -110px; "><img src="<?php echo RES;?>/images/ser_box5b.png"></div>
      <div class="txt1" style="left: 40px; "><span class="tit">高效数据处理</span>系统强大,高效,数据处理敏捷无延迟,高效数据缓存技术,微信开发模式下无需要下载任何接口，可直接验证,简单易用,功能强大。</div>
      <div class="txt2" style="right: -240px; "><span class="tit">数据分析功能</span>系统强大,高效,数据处理敏捷无延迟,高效数据缓存技术,微信开发模式下无需要下载任何接口，可直接验证,简单易用,功能强大。</div>
    </div>
    <div class="fgH20"></div>
    <div id="serBox5" class="serBox">
      <div class="serBoxOn"></div>
      <div class="pic1 mypng"><img src="<?php echo RES;?>/images/ser_box6.png" /></div>
      <div class="pic2 mypng"><img src="<?php echo RES;?>/images/ser_box6b.png" /></div>
      <div class="txt1"><span class="tit">数据导出功能</span>可自定义导出时间，以及某级别关键字排名的数据！方便进一步的深入数据分析，以及报表展示！</div>
      <div class="txt2"><span class="tit">数据导出功能</span>可自定义导出时间，以及某级别关键字排名的数据！方便进一步的深入数据分析，以及报表展示！</div>
    </div>:
    <div id="serBox1" class="serBox">
      <div class="serBoxOn"></div>
      <div class="pic1 mypng"><img src="<?php echo RES;?>/images/ser_box7.png" /></div>
      <div class="pic2 mypng"><img src="<?php echo RES;?>/images/ser_box7b.png" /></div>
      <div class="txt1"><span class="tit">索引存储功能</span>直接将所有数据存入索引，存储任意久历史数据。更灵活，数据调用更强大方便！并在后台完成各类数据的预处理。</div>
      <div class="txt2"><span class="tit">索引存储功能</span>直接将所有数据存入索引，存储任意久历史数据。更灵活，数据调用更强大方便！并在后台完成各类数据的预处理。</div>
    </div>
    <div class="fgH20"></div>
    <div id="serBox2" class="serBox">
      <div class="serBoxOn" style="display: none; "></div>
      <div class="pic1 mypng" style="right: 105px; "><img src="<?php echo RES;?>/images/ser_box8.png"></div>
      <div class="pic2 mypng" style="left: -110px; "><img src="<?php echo RES;?>/images/ser_box8b.png"></div>
      <div class="txt1" style="left: 40px; "><span class="tit">强大的图文管理</span>平台中的图文管理,可建立图文信息分类,发布图文信息(也可设置外链接),自动关键词触发,触发机制可为多条信息同时间发送,操作简单(有详细提示信息)</div>
      <div class="txt2" style="right: -240px; "><span class="tit">强大的图文管理</span>平台中的图文管理,可建立图文信息分类,发布图文信息(也可设置外链接),自动关键词触发,触发机制可为多条信息同时间发送,操作简单(有详细提示信息)</div>
    </div>
    <div class="fgH20"></div>
    <div id="serBox4" class="serBox">
      <div class="serBoxOn"></div>
      <div class="pic1 mypng"><img src="<?php echo RES;?>/images/ser_box9.png" /></div>
      <div class="pic2 mypng"><img src="<?php echo RES;?>/images/ser_box9b.png" /></div>
      <div class="txt1" style="left: 40px; "><span class="tit">更多功能等你发现</span></div>
      <div class="txt2" style="right: -240px; "><span class="tit">更多功能等你发现</span></div>
    </div>
  </div>
</div>
<!--功能end-->
<div class="clear"></div>
<!--简介 begin-->
<div id="Profiles"></div>
<div class="t">
	<h2><br />关于我们<br /><span>About Us</span></h2>
</div>
<div id="profile">
	<img style="float:left;margin:0 0 15px 15px;" alt="YiCms" src="<?php echo RES;?>/images/ewm2.jpg">叶子微信科技志在帮助那些不懂技术的个人或企业建立属于自己的接口程序，让完全不懂技术的个人或企业通过简单的配置，即可拥有强大的功能。企业使用叶子微信科技可以用低廉的成本实现智能客服机器人功能，淘宝店家可以轻松实现店铺商品和粉丝的关联与互动，我们也即将为微信地方号运维人员提供强大的地方运维的管理功能模块（如商家管理,店铺管理,会员管理,活动管理,优惠券管理,以及基于LBS的各种服务的开发!）

叶子微信科技不提供文章内容库，避免同质化的内容泛滥，同时叶子微信科技对用户有门槛要求，必须拥有自己的域名空间。叶子微信科技为个人或企业提供了强大的自定义回复及图文信息分类功能，通过此功能能更好做出属于自己或企业特色的内容，并自动建立一个个人或企业手机3G网站，更好的服务于您的客户。

叶子微信科技还提供了一些便民查询和娱乐游戏功能供个人或企业使用，如：查天气，查快递，翻译，百科，人品计算，手机归属地查询，笑话，成语接龙，公交查询，谜语，百度问答，解梦，古诗欣赏等等，根据需求的不同选择某些功能，能更好的提高粉丝活跃度，忠诚度。

YiCms除了自定义库,也支持自定义关键词触发指定接口url处理业务(完美的兼容第三方微信接口和自己的业务接口)即可实现和你们自己的数据库的信息通信!
</div>
<!--简介 end-->
<div class="clear"></div>
<!--comment begin-->
<div id="Comment"></div>
<div class="t">
	<h2><br />看看用户对我们的评价<br /><span>Evaluation</span></h2>
</div>
<div class="CommentBox">
	<div class="CommentContent"><?php echo C('site_name');?>不仅仅是带来流量，同是也是一种提升企业品牌上的竞争力。通过使用<?php echo C('site_name');?>提升了用户体验,活跃用户，从而现实营销最大化。</div>
    <div class="CommentUser">美团负责人</div>
    <div class="CommentContent"><?php echo C('site_name');?>代表了目前国内微信平台的最高水平，<?php echo C('site_name');?>以更新频率高、紧追最新微信策略为特点，从用户需求角度考虑产品，功能强大且实用。如基于海量关键词的微信用户分析、项目管理，对于中国的微信营销来说，权威实用的微信管理首选<?php echo C('site_name');?>。</div>
    <div class="CommentUser">sina乐居SEO</div>
    <div class="CommentContent"><?php echo C('site_name');?>在产品方面简化用户操作，大大提高了易用性，在性能方面是目前国内为数不多的可以批量快速、准确的策信营销工具。更易于各用户对微信数据汇总、分析的上手。<?php echo C('site_name');?>,你值得拥有！</div>
    <div class="CommentUser">sina乐居SEO</div>
   
    
</div>
<!--comment end-->
<div class="clear"></div>
<!--帮助 begin-->
<div id="Help"></div>
<div class="t">
	<h2><br />帮助指南<br /><span>Help Guide</span></h2>
</div>
<div id="Help_box">
	<div class="help_title">如何为微信公众号配置接口？</div>
    <p>请务必认真阅读以下2步内容，才能更有效的完成配置工作，有疑问的请联系QQ：<?php echo C('qq');?>提问。<?php if($_GET['token'] != ''): ?>你的接口URL是<font color="red"><?php echo C('site_url');?>/api/<?php echo $_GET['token']; ?></font><?php endif; ?></p>
	第一步、在<?php echo C('site_name');?>绑定你的微信公众号。
	<p>1、注册并登录<a class="green" href="<?php echo U('Index/login');?>"><?php echo C('site_name');?>接口平台</a></p>
	<p>2、添加公众号 → 功能管理 → 勾选要开启的功能</p>									
	<p><img src="<?php echo STATICS;?>/help/help01.jpg" width="790px"></p>
	<p><img src="<?php echo STATICS;?>/help/help0.jpg" width="790px"></p>
	第二步、到微信公众平台设置接口。
	<p>1、登录 <a href="http://mp.weixin.qq.com/">微信公众平台</a>（<a href="http://mp.weixin.qq.com/">http://mp.weixin.qq.com/</a>），进行身份认证，填写信息，提交身份证。</p>
	<p>认证后，点击高级功能 → 进入开发模式</p><br>
	<p><img src="<?php echo STATICS;?>/help/help002.jpg" width="790px"></p><br>
	<p>2、点击"成为开发者"按钮</p>
	<p><img src="<?php echo STATICS;?>/help/help003.jpg" width="790px"></p><br>
	<p>3、填写接口配置信息</p>
	<?php if($_GET['token'] == ''): ?><p>比如你<?php echo C('site_name');?>平台上的地址是<?php echo C('site_url');?>/API/DEMO</p>
	<p>那么URL就是<?php echo C('site_url');?>/API/DEMO</p>
	<?php else: ?>
	<p>你的URL是<font color="red"><?php echo C('site_url');?>/api/<?php echo $_GET['token']; ?></font></p><?php endif; ?>
	<p>Token同样填写平台上分配的Token</p>
	<p><img src="<?php echo STATICS;?>/help/help004.jpg" width="790px"></p><br>
	<p>4、确认开启</p>
	<p>5、在手机上用微信给你的公众号输入"功能说明"，测试你的接口是否配置正常！</p><br>	
</div>
<!--帮助 end-->
<div class="clear"></div>
<!--contact begin-->
<div id="Contact"></div>
<div id="Contact_Copy">
	<div class="ContactBox">
    	<h2>联系我们<span><br />Contact Us</span></h2>
        <div class="ContactContent">新浪网客户服务电话<br/>
			新浪网产品用户服务，产品咨询，购买，技术支持<br/>
			客户服务热线:4006900000(免长途费)<br/>
			各产品详情请联系客服。<br/>

			新浪网广告销售<br/>

			广告销售部<br/>
			新浪广告官方服务微博：@新浪广告 http://weibo.com/sinaemarketing<br/>
			企业微博服务官方微博：@企业微服务 http://weibo.com/weifuwu<br/>
			电商企业客户服务官方微博：@电商微客服 http://weibo.com/ecservice<br/>
			广告产品介绍请查看：http://emarketing.sina.com.cn <br/>
			广告产品，请致电新浪广告产品服务QQ：505581766<br/>
			企业微博功能使用、商务应用咨询，请致电新浪企业微博服务QQ：505581766<br/></div>
    </div>
   <div id="CopyRight">Copyright &copy; 2013 <?php echo C('site_url');?>. All Rights Reserved.<br /><?php echo C('site_name');?>版权所有</div>
</div><p style="display:none;"></p>
<!--cotact end-->
<script type="text/javascript" src="<?php echo RES;?>/js/index.js"></script>

</body>
</html>