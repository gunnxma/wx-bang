<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title><?php echo C('site_name');?>-微信运营平台个人·商家版</title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>
<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body oncontextmenu="return false" onselectstart ="return false">
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎使用多用户微信营销服务平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>
			<a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="多用户微信营销服务平台"><img src="<?php echo RES;?>/images/logo-pigcms.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">           
			 <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
          <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">客户案例</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>			
            </ul>
        </div>
        </div>
    </div>
</div>
<link href="<?php echo RES;?>/css/fashionfoucs_lrtk.css" rel="stylesheet" />
<script src="<?php echo RES;?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/js/jquery.plugin.min.js" type="text/javascript"></script>
</head>
<body>
   <!-- 代码 开始 -->
    <div id="banner">
        <ul id="banner_img">
            <li class="item1">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>微信营销活动工具</h2>
                        <p>
                            大转盘、刮刮卡、优惠券应有尽有。<br />
                            微信上极具粘性的互动活动应用接口。<br />
                            品牌传播、促销拉新，一站开通方便无忧。<br />
                            <?php echo C('site_name');?>助力个人及商家开拓微信大市场。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120905092323647.png" width="506" height="404" alt="微信营销活动工具" />
                    </div>
                </div>
            </li>
            <li class="item2">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>成熟的微信运营平台</h2>
                        <p>
                            完善的服务端技术架构。<br />
                            不断深入的应用接口开发服务。<br />
                            <?php echo C('site_name');?>为您的微信平台运营锦上添花。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015430148.png" width="506" height="404" alt="成熟的微信运营平台" />
                    </div>
                </div>
            </li>
            <li class="item3">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>多样化自动回复菜单</h2>
                        <p>
                            基于微信用户使用习惯量身打造。<br />
                            有趣、新鲜、快速响应倍增用户体验。<br />
                            <?php echo C('site_name');?>为您减少人工客服所需的高昂成本。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015446637.png" width="506" height="404" alt="多样化自动回复菜单" />
                    </div>
                </div>
            </li>
            <li class="item4">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>稳定的托管服务</h2>
                        <p>
                            成熟的监控与报警机制。<br />
                            7X24小时技术实时在线维护。<br />
                            <?php echo C('site_name');?>为您打造一个安心的托管家园。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015615324.png" width="506" height="404" alt="高效的接口平台" />
                    </div>
                </div>
            </li>
            <li class="item5">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>会打字就能建微网站</h2>
                        <p>
                            多款精美模版一键在线配置生成。<br />
                            极佳浏览体验+无限内容随意扩展。<br />
                            <?php echo C('site_name');?>为您提供更加快捷的微信建站服务。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015631560.png" width="506" height="404" alt="会打字就能建微网站" />
                    </div>
                </div>
            </li>
            <li class="item6">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>喝杯茶的功夫就能学会</h2>
                        <p>
                            配置微信公众帐号开发模式。<br />
                            接入各种功能玩转公众帐号。<br />
                            <?php echo C('site_name');?>为您解决技术上的一切烦恼。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015651273.png" width="506" height="404" alt="喝杯茶的功夫就能学会" />
                    </div>
                </div>
            </li>
            <li class="item7">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>诚招全国合作伙伴</h2>
                        <p>
                            无需代理费用、不限制代理区域。<br />
                            宽松的合作政策，有客户即可开展属于您的微生意。<br />
                            <?php echo C('site_name');?>诚邀各界有志之士共创美好微生活。
                        </p>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">联系我们&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015711808.png" width="506" height="404" alt="诚招全国合作伙伴" />
                    </div>
                </div>
            </li>
            <li class="item8">
                <div class="wrapper">
                    <div class="ad_txt">
                        <h2>持续升级新功能</h2>
                        <p>
                            微信发展空间无限，应用怎能停止不前?<br />
                            及时跟进趋势，快速开发新鲜接口。<br />
                            <?php echo C('site_name');?>为您不断升级微信接口功能。
                        </p>
                        <a href="/index.php?g=Home&m=Index&a=login" target="_blank">马上开通&gt;</a>
                    </div>
                    <div class="ad_img">
                        <img src="<?php echo RES;?>/images/20120830015726137.png" width="506" height="404" alt="<?php echo C('site_name');?>新功能升级" />
                    </div>
                </div>
            </li>
        </ul>
        <div id="banner_ctr">
            <div id="drag_ctr"></div>
            <ul>
                <li class="first-item"><?php echo C('site_name');?>接口</li>
                <li>微信营销活动工具</li>
                <li>应用系统开发</li>
                <li>网络整合营销</li>
                <li>网络运维托管</li>
                <li>手机APP开发</li>
                <li>学术会议系统</li>
                <li>医院网站系统</li>
                <li>实验室</li>
                <li class="last-item">公众平台接口</li>
            </ul>
            <div id="drag_arrow"></div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo RES;?>/js/fashionfoucs.js"></script>
    <!-- 代码 结束 -->
    </body>
<!-- 等待添加 -->
<div class="IndexFoot" style="height:100px;">
<div class="foot">
<div class="foot_page">
● <a href="<?php echo C('site_url');?>"><?php echo C('site_name');?>-微信运营平台</a><br/>
● 帮助您快速搭建属于自己的营销平台,构建自己的客户关系维护系统。
</div>
<div id="copyright">
	Power by <?php echo C('site_name');?> (c) 2014  版权所有<br/>
</div>
    </div>
</div>
<div style="display:none">
</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fea091ff295f83ceb540620bee2fa4abb' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>