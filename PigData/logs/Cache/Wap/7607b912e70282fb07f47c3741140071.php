<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<title><?php echo ($Coupon["title"]); ?></title>
<link href="<?php echo RES;?>/css/guajiang/activity-style.css" rel="stylesheet" type="text/css">
<style type="text/css">
#txt {
	color: #000000;
}
.footFix{width:100%;text-align:center;position:fixed;left:0;bottom:0;z-index:99;}
#footReturn a, #footReturn2 a {
display: block;
line-height: 41px;
color: #fff;
text-shadow: 1px 1px #282828;
font-size: 14px;
font-weight: bold;
}
#footReturn, #footReturn2 {
z-index: 89;
display: inline-block;
text-align: center;
text-decoration: none;
vertical-align: middle;
cursor: pointer;
width: 100%;
outline: 0 none;
overflow: visible;
Unknown property name.-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 0;
height: 41px;
opacity: .95;
border-top: 1px solid #181818;
box-shadow: inset 0 1px 2px #b6b6b6;
background-color: #515151;
Invalid property value.background-image: -ms-linear-gradient(top,#838383,#202020);
background-image: -webkit-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -moz-linear-gradient(top,#838383,#202020);
Invalid property value.background-image: -o-linear-gradient(top,#838383,#202020);
background-image: -webkit-gradient(linear,0% 0,0% 100%,from(#838383),to(#202020));
Invalid property value.filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
Unknown property name.-ms-filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#838383',endColorstr='#202020');
}
</style>
</head>
<body class="activity-coupon-winning">
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/guajiang/alert.js" type="text/javascript"></script>

<?php if($Coupon['end'] == 1): ?><div style="text-align:center;padding:40px 0 0 0;color:#eee">:( 活动不存在或者优惠券被领光了</div>
<?php else: ?> <!--有优惠券的情况下-->

	<?php if($Coupon['end'] == 2): ?><!--过期-->
		<div class="main">
			<div class="banner">
					<img src="<?php echo ($lottery["endpicurl"]); ?>" />
			</div>
			<div class="content" style="margin-top:-5px">
				<div class="boxcontent boxwhite">
					<div class="box">
						<div class="title-brown">活动结束说明：</div>
						<div class="Detail">
							<p><?php echo ($Coupon["endinfo"]); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php else: ?><!---->
		<!--if condition="$Coupon['end'] eq 3"--> <!--如果领过了-->
		<?php if($Coupon['end'] == 3): ?>
			<div class="main">
				<div class="cover">
					<img src="<?php if(!$lottery['zjpic']){ ?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php }else{ echo ($lottery["zjpic"]); } ?>" />
				</div>
				<div class="boxcontent boxwhite">
						<div class="box">
							<div class="title-brown"> <span>我的优惠券</span> </div>
							<div class="Detail">
							 <p><span class="red"><?php echo ($Coupon["wxname"]); ?> <?php echo ($Coupon["phone"]); ?></span> - <?php echo ($Coupon["msg"]); ?></p>
							 <p>优惠券名称: <span class="red"><?php echo ($Coupon["myprize"]); ?></span></p>
							 <p>优惠券<?php echo ($lottery["renamesn"]); ?>: <span class="red"><?php echo ($Coupon["sn"]); ?></span></p>
							 <p class="red"><?php echo ($Coupon["aginfo"]); ?></p>
							 <?php if(!$Coupon['sendtime']){ ?>
							 <!--商家提交 start-->
							 <p><input name=""  class="px" id="parssword" type="password"  value="" placeholder="商家输入兑奖密码"></p>
							 <p><input class="pxbtn" name="提 交"  id="save-btnn" type="button" value="商家提交"></p>
							 <!--商家提交 end-->
							 <?php }else{ ?>
							 <p>已于<?php echo (date("Y-m-d",$Coupon["sendtime"])); ?>兑奖</p>
							 <?php } ?>
							</div>
						</div>
				</div>
			</div>
		<?php else:?>
		<!--else/--> <!--没有领过-->
			<div class="main">
				<div class="cover" id="Conponid">
					<img id="winaprize" src="<?php echo ($lottery["starpicurl"]); ?>" />
					<div id="scratchpad"></div>
				</div>
			</div>
		<?php endif;?>
		<!--/if--><!--没有领过-->
		<!--都显示-->
			<div class="content">	   
				<div id="zjl" style="display:none" class="boxcontent boxwhite">
				<!--领到了优惠券start-->
					<div class="box">
						<div class="title-red"><span>恭喜你</span></div>
						<div class="Detail">
							<p>您获得了：<span class="red"><?php echo ($Coupon["winprize"]); ?> </span></p>
							<p>优惠券<?php echo ($lottery["renamesn"]); ?>: <span class="red"><?php echo ($Coupon["sncode"]); ?> </span></p>
							<p class="red"><?php echo ($Coupon["aginfo"]); ?></p>
							<p>
							<input name="" class="px" id="tel" value="" type="text" placeholder="请输入您的<?php echo ($lottery["renametel"]); ?>">
							<input name=""  class="px" id="wechaname" value="" type="text" placeholder="请输入您的微信号">
							<input name=""  id="wechaid" value="<?php echo ($Coupon["wecha_id"]); ?>" type="hidden">
							<input name=""  id="lid" value="<?php echo ($Coupon["lid"]); ?>" type="hidden">
							<input name=""  id="winprize" value="<?php echo ($Coupon["winprize"]); ?>" type="hidden">
							<input name=""  id="sncode" value="<?php echo ($Coupon["sncode"]); ?>" type="hidden">
							</p>
							<p>
							<input class="pxbtn" name="提 交" id="save-btn" type="button" value="用户提交" />
							</p>
						</div>
					</div>
					<!--领到了优惠券end-->
				</div>

					<div class="boxcontent boxwhite">
						<div class="box">
							<div class="title-brown"><span>优惠券项目：</span></div>
							<div class="Detail">
							<p> 每人最多允许抽奖次数:<?php echo ($Coupon["canrqnums"]); ?> - 已抽取<span id="usenums"><?php echo ($Coupon["usenums"]); ?></span>次</p>
							 	<p>优惠券1: <?php echo ($Coupon["fist"]); ?> <?php if($lottery['displayjpnums']){ ?>数量:<?php echo ($Coupon["fistnums"]); } ?></p>
	
							<?php if($Coupon['second']!=''){ ?>
							<p>优惠券2: <?php echo ($Coupon["second"]); ?> <?php if($lottery['displayjpnums']){ ?>数量:<?php echo ($Coupon["secondnums"]); } ?></p>
							<?php } ?>

							 <?php if($Coupon['third']!=''){ ?>
								<p>优惠券3: <?php echo ($Coupon["third"]); ?> <?php if($lottery['displayjpnums']){ ?>数量:<?php echo ($Coupon["thirdnums"]); } ?></p>
							<?php } ?>
							</div>
						</div>
					</div>
					<div class="boxcontent boxwhite">
						<div class="box">
							<div class="title-brown">活动说明：</div>
							<div class="Detail">
							<p><?php echo ($Coupon["title"]); ?></p>
							<p><?php echo ($Coupon["info"]); ?></p>
								<p>活动时间: <?php echo (date("Y-m-d",$Coupon["statdate"])); ?>至<?php echo (date("Y-m-d",$Coupon["enddate"])); ?></p>
								<p><?php echo ($Coupon["txt"]); ?></p>					 			
							</div>
						</div>
					</div>
					
					<if condition="$Coupon.sttxt">
					<div class="boxcontent boxwhite">
						<div class="box">
							<div class="title-brown">优惠券介绍：</div>
							<div class="Detail">
								<p><?php echo ($Coupon["sttxt"]); ?></p>					 			
							</div>
						</div>
					</div><?php endif; ?>
					<?php if($Coupon.sttxt): ?><div class="boxcontent boxwhite">
						<div class="box">
							<div class="title-brown">兑换券说明：</div>
							<div class="Detail">
								<p><?php echo ($Coupon["aginfo"]); ?></p>					 			
							</div>
						</div>
					</div><?php endif; ?>
				</div>
				<div style="clear:both;"></div>
<!--都显示--><?php endif; ?><!--没过期-->

</if> <!--结束-->
<div style="height:60px;"></div>
<div class="footFix" id="footReturn"><a href="javascript:void(0)" onClick="location.href='<?php echo U('Wap/Index/index',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>';"><span>返回3G网站</span></a></div>	


<style type="text/css">
.window {
	width:290px;
	position:absolute;
	display:none;
	bottom:30px;
	left:50%;
	 z-index:9999;
	margin:-50px auto 0 -145px;
	padding:2px;
	border-radius:0.6em;
	-webkit-border-radius:0.6em;
	-moz-border-radius:0.6em;
	background-color: #ffffff;
	-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	-o-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
	font:14px/1.5 Microsoft YaHei,Helvitica,Verdana,Arial,san-serif;
}
.window .title {
	
	background-color: #A3A2A1;
	line-height: 26px;
    padding: 5px 5px 5px 10px;
	color:#ffffff;
	font-size:16px;
	border-radius:0.5em 0.5em 0 0;
	-webkit-border-radius:0.5em 0.5em 0 0;
	-moz-border-radius:0.5em 0.5em 0 0;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #585858 ), to( #565656 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient(#585858, #565656); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient(#585858, #565656); /* FF3.6 */
	background-image:     -ms-linear-gradient(#585858, #565656); /* IE10 */
	background-image:      -o-linear-gradient(#585858, #565656); /* Opera 11.10+ */
	background-image:         linear-gradient(#585858, #565656);
	
}
.window .content {
	/*min-height:100px;*/
	overflow:auto;
	padding:10px;
	background: linear-gradient(#FBFBFB, #EEEEEE) repeat scroll 0 0 #FFF9DF;
    color: #222222;
    text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0 0 0.6em 0.6em;
	-webkit-border-radius: 0 0 0.6em 0.6em;
	-moz-border-radius: 0 0 0.6em 0.6em;
}
.window #txt {
	min-height:30px;font-size:16px; line-height:22px;
}
.window .txtbtn {
	
	background: #f1f1f1;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #DCDCDC ), to( #f1f1f1 )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #DCDCDC ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #DCDCDC ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #DCDCDC ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #DCDCDC ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #DCDCDC );
	border: 1px solid #CCCCCC;
	border-bottom: 1px solid #B4B4B4;
	color: #555555;
	font-weight: bold;
	text-shadow: 0 1px 0 #FFFFFF;
	border-radius: 0.6em 0.6em 0.6em 0.6em;
	display: block;
	width: 100%;
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
	text-overflow: ellipsis;
	white-space: nowrap;
	cursor: pointer;
	text-align: windowcenter;
	font-weight: bold;
	font-size: 18px;
	padding:6px;
	margin:10px 0 0 0;
}
.window .txtbtn:visited {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:hover {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff ), to( #cccccc )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff , #cccccc ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff , #cccccc ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff , #cccccc ); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff , #cccccc ); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff , #cccccc );
}
.window .txtbtn:active {
	background-image: -webkit-gradient(linear, left top, left bottom, from( #cccccc ), to( #ffffff )); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #cccccc , #ffffff ); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #cccccc , #ffffff ); /* FF3.6 */
	background-image:     -ms-linear-gradient( #cccccc , #ffffff ); /* IE10 */
	background-image:      -o-linear-gradient( #cccccc , #ffffff ); /* Opera 11.10+ */
	background-image:         linear-gradient( #cccccc , #ffffff );
	border: 1px solid #C9C9C9;
	border-top: 1px solid #B4B4B4;
	box-shadow: 0 1px 4px rgba(0, 0, 0, 0.3) inset;
}

.window .title .close {
	float:right;
	background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACTSURBVEhL7dNtCoAgDAZgb60nsGN1tPLVCVNHmg76kQ8E1mwv+GG27cestQ4PvTZ69SFocBGpWa8+zHt/Up+IN+MhgLlUmnIE1CpBQB2COZibfpnXhHFaIZkYph0SOeeK/QJ8o7KOek84fkCWSBtfL+Ny2MPpCkPFMH6PWEhWhKncIyEk69VfiUuVhqJefds+YcwNbEwxGqGIFWYAAAAASUVORK5CYII=");
	width:26px;
	height:26px;
	display:block;	
}
</style>
<div class="window" id="windowcenter">
	<div id="title" class="title">消息提醒<span class="close" id="alertclose"></span></div>
	<div class="content">
	 <div id="txt"></div>
	 <input type="button" value="确定" id="windowclosebutton" name="确定" class="txtbtn">	
	</div>
</div>
 
 

<script type="text/javascript">
<?php if($Coupon['end'] != 3){ ?>//中过奖之后不显示此js
/*window.sncode = "<?php echo ($Coupon["sn"]); ?>";*/
window.prize = "<?php echo ($Coupon["winprize"]); ?>";
window.usenums = "<?php echo ($Coupon["usenums"]); ?>"
var zjl = <?php echo ($Coupon["zjl"]); ?>;
//var num = 0;
var goon = true;
document.onreadystatechange = Onloadok;
function Onloadok()
{
	if(document.readyState == "complete")
	if(zjl==0&&goon){ //不中奖[谢谢参与]
		goon = false;
		document.getElementById('txt').innerHTML="<?php echo ($Coupon["winprize"]); ?>";
		document.getElementById('usenums').innerHTML=usenums;
		$("#windowcenter").slideToggle(500);
	}
	if(zjl&&goon){
		document.getElementById('winaprize').src="<?php echo ($lottery["zjpic"]); ?>";
		goon = false;
		$("#zjl").slideToggle(500);
	}
}
<?php
} ?>
                    
$("#save-btn").bind("click",
	function() {
		var btn 	= $(this);
		var tel 	= $("#tel").val();
		var wxname	= $("#wechaname").val();
		var wechaid = $("#wechaid").val();
		var winprize  = $("#winprize").val();
		var sncode  = $("#sncode").val();
		var lid 	= $("#lid").val();
		//var RegPhone = /^([0-9]{11})?$/;
		//var falg;
		//falg = tel.value.search(RegPhone);
		if (!tel) {
			alert("请输入正确<?php echo ($lottery["renametel"]); ?>");
			return
		}
		if(!wxname){			
			alert("微信号不能为空");
			return;
		}

		var submitData = {
			sncode  : sncode,
			tel 	: tel,
			wxname	: wxname,
			wechaid : wechaid,
			winprize:winprize,
			lid 	: lid,
			action 	: "add"
		};
		$.post('index.php?g=Wap&m=Coupon&a=add', submitData,
			function(data) {
				if (data.success == true) {
					alert(data.msg);
					window.location.href=location.href;
					//$("#zjl").hide("slow");
					return
				} else { 
					//alert('失败'+data);
					return
				}
			},"json")
});

$("#save-btnn").bind("click",
function () {
	var submitData = {
		id: <?php echo ($lottery["id"]); ?>,
		rid: <?php echo ($Coupon["rid"]); ?>,
		parssword: $("#parssword").val()
	};
	$.post('index.php?g=Wap&m=Coupon&a=exchange', submitData,
	function (data) {
		if (data.success == true) {
			alert(data.msg);
			if (data.changed == true) {
				window.location.href = location.href;
			}
			return
		} else {alert(data.msg);}
	},
	"json")
});
</script>
</body></html>