<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo C('site_url');?>" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style_2_common.css?BPm" />
</head>
<body id="nv_member" class="pg_CURMODULE" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>

<div id="hd">
<div class="wp">
<div class="hdc cl"><h2><a href="./" title="叶子微信科技接口 叶子微信科技 叶子微信科技机器人"><img src="<?php echo STATICS;?>/logo.png" alt="叶子微信科技接口 叶子微信科技 叶子微信科技机器人" border="0" /></a></h2>

<div class="pns t_link">
            <a href="" >&nbsp</a>
			
</div>

                    <div id="nv">
<ul>
	<li id="mn_N828e" ><a href="<?php echo U('Home/Index/index');?>" hidefocus="true"  >首页</a></li>
	<li id="mn_N392a" ><a href="<?php echo U('Home/Index/about');?>" hidefocus="true"  >关于我们</a></li>
	<li id="mn_Nb47d" ><a href="<?php echo U('Home/Index/fc');?>" hidefocus="true"  >功能介绍</a></li>
	<li id="mn_N564f" ><a href="<?php echo U('Home/Index/price');?>" hidefocus="true"  >资费</a></li>
	<li id="mn_N67c1" ><a href="<?php echo U('User/Index/index');?>" hidefocus="true"  >管理</a></li>
	<li id="mn_N3e36" ><a href="<?php echo U('Home/Index/help');?>" hidefocus="true"  >帮助</a></li>
	<?php if($_SESSION[uid]==false): ?><li id="mn_N3e36" > <a href="<?php echo U('Index/login');?>" hidefocus="true"  >登录</a></li>
	<li id="mn_N3e36" ><a href="<?php echo U('Index/reg');?>" hidefocus="true"  >注册</a></li>
	<?php else: ?>
		<li id="mn_N3e36" ><a href="" hidefocus="true"  ><?php echo (session('uname')); ?></a></li>
	<li id="mn_N3e36" ><a href="<?php echo U('Admin/Admin/logout');?>" hidefocus="true"  >退出</a></li><?php endif; ?>
</ul>
</div>
</div>
<div id="mu" class="cl">
</div>
</div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp"><link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/indexbanner.css" rel="stylesheet" type="text/css" />
<script src="<?php echo RES;?>/js/jwplayer.js" type="text/javascript"></script>
<!--中间内容-->
<script src="<?php echo STATICS;?>/jquery.min.js" type="text/javascript"></script>
        <div id="body-container">
<!--  banner开始 -->
            <div class="sl_wrap">
                <div class="sl_wrap_in">
              
                    <div class="sl sl_iphone_2" style="display:">
                        <div class="wrap">
                            <div class="sl_con">
                                <ul>	
                                    <li>专用于显示个人或企业相关信息、服务、活动等内容的展示性手机网站。可以通过用户关注时自动回复引导用户进入，使用户更加详尽的了解您的各类信息。</li>
                                    <li class="smallfont">
                                        多款精美模板任您挑选 / 自定义模版更彰显个性<br />
可输入关键词回复分类信息 / 可随时显示隐藏分类信息<br />
可开启往期回顾，推荐阅读，分享，喜欢等功能<br />
随时查询每篇文章浏览次数，了解用户偏好<br />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                    <div class="sl sl_iphone_3" style="display: none"></div>
<div class="sl sl_iphone_4" style="display: none">
<div class="wrap">
                            <div class="sl_con">
                                <ul>	
                                    <li>小黄鸡SimSimi是一个可爱的智能聊天机器人，他能和用户进行有趣的对话！使用方法非常简单，你只要开启此功能，向对话框输入文字你就可以开始对话了。</li>
<li>不要对他的快速反应表示惊讶！他是超级机器人！他的词汇量会随着你输入的文字而增加，越来越聪明。</li>
<li>快来和史上最可爱的机器人小黄鸡对话吧！</li>
                                </ul>
                            </div>
                        </div>
</div>
<div class="sl sl_iphone_5" style="display: none">
<div class="wrap">
<div class="sl_con">
<ul>	
<li>结合微信3G网站功能，您只要五分钟就可以快速搭建一个微信淘宝客网站，推荐商品给您的粉丝，轻松赚取佣金。</li>
<li>粉丝输入关键词可触发您的淘宝客链接，成交后也可赚取佣金。</li>
<li>引领手机支付潮流，走在微时代前沿。</li>
</ul>
</div>
</div>
</div>
<div class="sl sl_iphone_7" style="display: none">
<a class="wrap" href="http://www.mobiletalkclub.com" target="_blank"></a>
</div>
                </div>
                <a href="javascript:void(0);"  class="banner_prev" style="left: 20px;"></a>
                <a href="javascript:void(0);"  class="banner_next" style="right:20px;"></a>
            </div>
<!--  banner结束 -->
        </div>

<!--扫码开始-->
<div class="propaganda">
<div class="ewm"><img src="tpl/Home/default/common/images/ewm2.jpg" width="134"></div>
<div class="font_ewm">
微信扫码左侧二维码并加关注<br>
给YiCms官方微信公众号<br>
输入"<span class="green">最新功能</span>"<br>
体验YiCms平台的最新功能
</div>
<div class="clearfix weibo">
                            <a class="xl_weibo" target="_blank" href="http://weibo.com/wxapi" title="请关注YiCms新浪微博"></a>
                            <a class="tx_weibo" target="_blank" href="http://t.qq.com/wxapi8" title="请关注YiCms腾讯微博"></a>
                        </div>
<div class="font_gn">
<span class="green"><?php echo C('site_name');?>营销管理平台</span>为个人和企业提供基于微信公众平台的一系列功能，包括智能回复、微信3G网站、互动营销活动，会员管理，在线订单，数据统计等系统功能,带给你全新的微信互动营销体验。 <a class="green" href="<?php echo U('Index/fc');?>">了解更多 <img border="0" class="vm" src="<?php echo RES;?>/images/more.gif"></a>
</div>
<div class="clr"></div>
</div>
<!--扫码结束-->

<!--主要功能介绍开始-->
<div class="present">
<UL>
<LI class="present001">
<div class="presenttext">
<h2>支持多微信帐号管理，功能实时开启</h2>
<p>注册一个叶子微信帐号可以管理多个微信公众号，根据不同的需求，给微信公众号分别开启不同的功能，购买不同的VIP流量套餐，非常的自由灵活。所有操作无需人工干预，只要在线开启即可实时生效。</p>
</div>
</LI>
<LI class="present002">
<div class="presenttext">
<h2>超强小黄鸡陪聊+30多款便民查询功能</h2>
<p>有小黄鸡陪聊加强版510万数据，过滤了广告和一些敏感词汇。
还有天气查询 ，手机查询，邮编查询，快递查询（支持160家快递公司），身份证查询，人品计算，翻译，字典，百科（全网数据），音乐80.1万 ，笑话5万条，小黄鸡陪聊510万条，诗词23万首，诗句 225万，成语5万，谜语5万，解梦3万，糗事55万，公交线路4万，火车线路4500，机器人学习功能等等......</p>
</div>
</LI>
<LI class="present003">
<div class="presenttext">
<h2>无限制自定义图文回复，可批量导入</h2>
<p>用户可以添加自定义回复的文字内容，图文内容或者语音内容，还可以批量导入文字或者图文的内容，快速高效；根据用户输入的关键词回复文对应的信息，引导用户了解更多的信息。</p>
</div>
</LI>
<LI class="present004">
<div class="presenttext">
<h2>微信自定义菜单</h2>
<p><?php echo C('site_name');?>提供微信公众号自定义菜单管理功能，用户无需再通过输入关键词触发回复，直接点击菜单就可以看相关的内容，此功能如果结合微信3G网站可以使您的公众号用户体验更好，带个粉丝不一样的感受。</p>
</div>
</LI>
<LI class="present005">
<div class="presenttext">
<h2>超炫微信3G网站，精美模板任意选</h2>
<p><?php echo C('site_name');?>全国首创微信3G网站，用户只要通过简单的设置，就能快速生成属于您自己的微信3G网站，并且有各种精美模板，供您选择，还有自定义模版，可以设计出自己的风格，让您的粉丝有种惊艳的感觉。<span class="green">给YiCms官方微信号输入"首页"体验微信3G网站。</span></p>
</div>
</LI>
<LI class="present006">
<div class="presenttext">
<h2>多款微信互动营销活动系统</h2>
<p>微信互动营销活动，是结合微信设计的互动活动，引发用户对商家微信的兴趣及关注度，并可让用户自发对商家微信活动进行口碑宣传，从而实现提高商家微信关注人数，带动企业产品销量的作用。<span class="green">给YiCms官方微信号输入"优惠券"或者"大转盘"或者"刮刮卡"体验微信互动营销活动。</span></p>
</div>
</LI>
<LI class="present007">
<div class="presenttext">
<h2>实时数据统计，监控运营效果</h2>
<p><?php echo C('site_name');?>后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</span></p>
</div>
</LI>
<LI class="present008">
<div class="presenttext">
<h2><a href="<?php echo U('Index/fc');?>">更多功能介绍，请点击查看！</a></h2>
<p><?php echo C('site_name');?>会不断推出新功能，降低您的运营成本，提高微信营销效果。</span></p>
</div>
</LI>
</UL>
</div>
<!--主要功能介绍结束-->

<!--我们的用户开始-->
<div class="weixinapps"> 
<div class="weixinapps-inner clearfix">
<div class="app-box">
<h2>我们的用户在不断增加中。</h2>
<ul class="clearfix">
<?php $list=F('case'); ?>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="app-item"> 
<a href="<?php echo ($vo["url"]); ?>">
<img src="<?php echo ($vo["img"]); ?>" alt="<?php echo ($vo["name"]); ?>">
<span class="name "><?php echo ($vo["name"]); ?></span>
</a>
</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

</div>
</div>
</div>
<!--我们的用户结束-->


        

        <script src="style/js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript" >
var jQ = jQuery.noConflict();
            function jump(url){
                var j = document.getElementById('jump');
                if(j==null){j = document.createElement('iframe');j.id = 'jump';j.style.display='none';j.src=url;document.body.appendChild(j);}
                else{j.src=url;}
                return false;
            }


            jQ(function(){
                var Slider = function(){
                    var t = this;
                    t.moving = false;
                    t.index  = 0;
                    t.act    = 0;
                    t.allWrap = jQ('.sl_wrap_in');
                    t.wrap   = jQ(jQ('.sl_wrap_in')[t.act]);
                    t.el     = t.wrap.children('.sl');
                    t.len    = t.el.length;
                    t.timer = null;
                    t.tim   = 5000;
    
                    //bind Event
                    jQ('.banner_prev').bind('click',function(){ if(t.moving==false)t.prev()});
                    jQ('.banner_next').bind('click',function(){ if(t.moving==false)t.next()});
                    jQ('.sl_wrap,.device').bind('mouseenter',function(){ t.stop();});
                    jQ('.sl_wrap,.device').bind('mouseleave',function(){
                        if(jQ('#ph_num').val() =='') t.timer = setTimeout(function(){t.init()},t.tim);
                    
                    });
                    jQ('.device').bind('click',function(){jQ('html').animate({scrollTop:0}, '400');if(t.moving==false) t.setAct(this);
                        var deviceName = this.id.substr(2);
                        jQ('.resouce li a').each(function(e){this.href = this.href.replace(deviceName=="ipad"?"iphone":"ipad",deviceName)});
                    });
                    t.start = setTimeout(function(){t.init()},t.tim);
                };Slider.prototype = {
                    init:function(){
                        var t = this;
                        if(t.len<=1){
                            jQ('.banner_prev,.banner_next').hide();
                        }else{
                            t.next();
                            t.timer = null?false:clearTimeout(t.timer);
                            t.timer = setTimeout(function(){t.init();},t.tim);
                        }
                    },
                    next:function(){
                        var t = this;
                        var i = (t.index+1) >= t.len?0:(t.index+1);
                        t.go(i,'left');
                    },
                    prev:function(){
                        var t = this;
                        var i = t.index==0 ? (t.len-1):(t.index-1);
                        t.go(i,'right');
                    },
                    go:function(i,direction){
                        var t = this;
                        var li = t.el.eq(i);
                        t.moving = true;
                        li.css({'left':direction=='left'?'100%':'-100%','display':'block'});
                        t.wrap.animate({left:direction=='left'?'-100%':'100%'},400,function(){t.reset(i);t.index=i;t.moving = false;})
                    },
                    reset:function(i){
                        var t = this;
                        t.el.eq(i).css({'left':0});
                        t.el.eq(t.index).hide();
                        t.wrap.css({'left':0});
                    },
                    stop:function(){
                        this.timer==null?false:clearTimeout(this.timer);
                        this.timer = null;
                        this.start==null?false:clearTimeout(this.start);
                        this.start=null;
                    },
                    setAct:function(el){
                        var t = this;
                        t.stop();
                        jQ('.device').removeClass('s_d');jQ('.device').next('.nav_item_s').remove();
                        jQ(el).addClass('s_d');jQ(el).after('<div class="nav_item_s">&nbsp;</div>');
                        var i = jQ('.device').index(el);
                        t.act = i;
        
                        t.allWrap.hide();
                        t.allWrap.css({'left':0});
                        t.wrap   = jQ(jQ('.sl_wrap_in')[t.act]);
                        t.el     = t.wrap.children('.sl');
                        t.el.hide();t.el.eq(0).show();
        
                        t.wrap.show();
                        t.len    = t.el.length;
                        t.moving = false;
                        t.index  = 0;
                        t.timer==null?false:clearTimeout(t.timer);
                        t.timer = null;
                        t.start==null?false:clearTimeout(t.start);
                        t.start = setTimeout(function(){t.init()},t.tim);
                        
                        t.act == 0?jQ('#down_box_dzb').removeClass('down_box_btn_ipad').addClass('down_box_btn_iphone'):jQ('#down_box_dzb').removeClass('down_box_btn_iphone').addClass('down_box_btn_ipad')
                    }
                };var slider = new Slider();

 
                
            });
        </script>



  	</div>
<style>
.footNew { background:rgb(27, 27, 27)}
/***** 尾巴 *****/
.foot { /*background-position:0 -118px; background-repeat:repeat-x;*/ height:248px;}
.footOut { background-position:0 -118px;}
.fother { width:970px; margin:0 auto; color:#fff;}
.fother li { position:relative;}
/**/
.fother { width:970px; height:215px; line-height:22px; overflow:hidden; text-align:left;}
.fother li { padding:20px 20px 0; float:left;}
.fother li.fir { width:316px; _width:324px;}
.fother li.sec { width:359px;}
.fother li.last { width:180px; margin:0 !important; padding-right:0 !important;}
.fother h3 ,.fother dt ,.fother a { color:#e7ecf1 !important; text-align:left;}
.fother h3 { font-size:14px; font-weight:bold; border-bottom:#bbcfe6 1px solid; display:inline; padding:0 25px 8px 0; *padding:0 25px 7px 0; text-indent:3px;}
.fother dl { margin:8px 0 25px;margin:8px 0 24px;}
.fother a { padding:0 2px; margin:0 5px 0 0; text-decoration:none !important; display:inline-block; text-indent:0;}
.fother a:hover { background-color:#ead812; color:#3585e3 !important;}
.fother .iconArea a:hover { background-color:none;}

/***** 尾巴新 *****/
.footNew { /*background-position:0 -118px; background-repeat:repeat-x;*/ height:248px;}
.footOutNew { background-position:0 -118px;}
.fotherNew { width:970px; margin:0 auto; color:#fff;}
.fotherNew li { position:relative;}
/**/
.fotherNew { width:970px; height:191px; line-height:22px; overflow:hidden; text-align:left;}
.fotherNew li { padding:30px 20px 0 60px; float:left;}
.fotherNew li.fir { width:316px; _width:324px;}
.fotherNew li.sec { width:185px;}
.fotherNew li.last { width:180px; margin:0 !important; padding-right:0 !important;}
.fotherNew h3 ,.fotherNew dt ,.fotherNew a { color:#e7ecf1 !important; text-align:left;}
.fotherNew h3 { font-size:14px; font-weight:bold; border-bottom:#bbcfe6 1px solid; display:inline; padding:0 25px 8px 0; *padding:0 25px 7px 0; text-indent:3px;}
.fotherNew dl { margin:20px 0 25px;}
.fotherNew dt { position:relative;}
.fotherNew dt em { color:#fff; margin-right:8px;}
.fotherNew a { padding:1px 2px; margin:0 5px 0 0; text-decoration:none !important; display:inline-block; text-indent:0; font-family:"宋体";}
.fotherNew a:hover { background-color:#ead812; color:#3585e3 !important;}
.fotherNew .iconArea a:hover { background-color:none;}
.fotherNew .widSmall {}
.fotherNew .widBig {}
.fotherNew .box1 { float:left; width:90px;}
.fotherNew .box2 { float:left; width:115px;}
.fotherNew .box3 { float:left; width:80px;}

.fLink { background:#d1d1d1; height:37px; text-align:center; color:#333; font-size:14px;}
.fLink a { color:#000 !important; text-decoration:none; font-size:14px; height:32px; line-height:32px; margin:0 10px; font-family:"宋体";}
.fLink a:hover { color:#820C0C !important; text-decoration:underline;}
.flinkMain { width:960px; margin:0 auto; height:35px; line-height:38px; border-bottom:#bdc7d0 2px solid;}
.fLink .marWid a,.fLink .marWidMain a { margin:0 9px; text-indent:0;}
</style>


<div id="ft" class="wp cl">
<div class="footNew">
	<div class="footOutNew">
    	<!-- 其他 begin -->
        <div class="fotherNew">
            <ul>
                <li class="fir">
                    <h3>关联媒体</h3>
                    <dl>
                        <dt class="box1">
							<a href="http://paper.people.com.cn/rmrb/" target="_blank" rel="nofollow">人民日报</a>
                        	<a href="http://health.huanqiu.com/" target="_blank" rel="nofollow">生命时报</a>
							<a href="http://www.globalpeople.com.cn/" target="_blank" rel="nofollow">环球人物</a>
                            
						</dt>
						<dt class="box2">
							<a href="http://www.people.com.cn" target="_blank" rel="nofollow" class="widBig">人民网</a>
                            <a href="http://www.globaltimes.cn/" target="_blank" rel="nofollow" class="widBig">Global Times</a>
							<a href="http://www.globaltraveler.com.cn/" target="_blank" rel="nofollow" class="widBig">环球旅游周刊</a><br>
                            
						</dt>
						<dt class="box3">
							<a href="http://data.huanqiu.com/" target="_blank" rel="nofollow" class="widSmall">环球时报</a>
                            <a href="http://humor.huanqiu.com/" target="_blank" rel="nofollow" class="widSmall">讽刺与幽默</a>
                        </dt>
                    </dl>
                </li>
          <li class="sec">
                    <h3>友情连接</h3>
                    <dl>         
						<dt>
							<?php $info=F('links'); ?>
							<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$loo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($loo["url"]); ?>" ><?php echo ($loo["name"]); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>
						</dt>
                    </dl>
                </li>
          <li class="last">
                    <h3>推荐服务</h3>
                    <dl>
                        <dt class="iconArea"><a href="http://www.huanqiu.com/weibo.html">官方微博，欢迎关注</a></dt>
                        <dt><a href="http://data.huanqiu.com/" target="_blank" title="环球时报-版权数据库">环球时报-版权数据库</a><span class="iconNew"></span></dt>
                        <dt><a href="http://mobile.huanqiu.com/wap/" target="_blank" title="手机环球网">手机环球网</a><em>|</em><span class="iconRss"></span><a href="http://rss.huanqiu.com">RSS订阅</a></dt>
                        
                    </dl>
                </li>
          </ul>
        </div>
        <!-- 其他 end -->
                
        <!-- 链接 begin -->
        <div class="fLink">
            <div class="flinkMain marWid">
                <a href="index.php?g=Home&m=Index&a=about" target="_blank">关于我们</a>|
                <a href="index.php?g=Home&m=Index&a=fc" target="_blank">功能介绍</a>|
                <a href="index.php?g=Home&m=Index&a=help" target="_blank">使用帮助</a>|
                <a href="" target="_blank">官方微博</a>|
                <a href="" target="_blank">诚聘英才</a>|
                <a href="" target="_blank">广告服务</a>|
                <a href="" target="_blank">联系方式</a>|
                <a href="" target="_blank">隐私政策</a>|
                <a href=""" target="_blank">服务条款</a>|
                 <a href="" target="_blank">意见反馈</a>
                 <a href="<?php echo C('site_url');?>" target="_blank"><?php echo C('site_name');?></a>
				
            </div>
        </div>
        <!-- 链接 end -->        
    </div>
    
    <!-- 版权区 begin -->
    <div class="copyArea">
    	<div class="copyMain">
        			
      </div>
    </div>
    <!-- 版权区 end -->
	<div style="display:none"><?php echo C('counts');?></div>
</div>
</html>