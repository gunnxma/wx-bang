<?php
class YichatAction extends Action{
	private $token;
	private $fun;
	private $data=array();
	private $my='小猪猪';
	public function index(){		
		$this->token=$this->_get('token');
		$weixin = new Wechat($this->token);	
		$data = $weixin->request();
		$this->data = $weixin->request();		
		$this->my=C('site_my');
		list($content, $type) = $this->reply($data);
		$weixin->response($content, $type);
	}
	private function reply($data){
		if('CLICK' == $data['Event']){		
			$data['Content']= $data['EventKey'];
		}
		if('subscribe' == $data['Event']){			
			$data=M('Areply')->field('home,keyword,content')->where(array('token'=>$this->token))->find();
			if($data['keyword']=='首页'||$data['keyword']=='home'){
				return $this->shouye();
			}
			if($data['home']==1){				
				$like['keyword']=array('like','%'.$data['keyword'].'%');
				$like['token']=$this->token;
				$back=M('Img')->field('id,text,pic,url,title')->limit(9)->order('id desc')->where($like)->select();
					foreach($back as $keya=>$infot){
						if($infot['url']!=false){
							$url=$infot['url'];
						}else{
							$url=rtrim(C('site_url'),'/').U('Wap/Index/content',array('token'=>$this->token,'id'=>$infot['id']));
						}
						$return[]=array($infot['title'],$infot['text'],$infot['pic'],$url);
					}
					return array($return,'news');
			}else{
				return array($data['content'],'text');
			}
		}	
		$Pin=new GetPin();
		$key=$data['Content'];
		$open=M('Token_open')->where(array('token'=>$this->_get('token')))->find();
		$this->fun=$open['queryname'];
		$datafun=explode(',',$open['queryname']);		
		$tags=$this->get_tags($key);	
		$back= explode(',',$tags);		
		foreach($back as $keydata=>$data){		
			 $string=$Pin->Pinyin($data);
			 if(in_array($string,$datafun)){
					$check=$this->user('connectnum');
					if($check['connectnum']!=1){
						$return=C('connectout');
						continue;
					}
					unset($back[$keydata]);					
					eval('$return= $this->'.$string.'($back);');					
					continue;
				 }
		}
		
		if(!empty($return)){
			if(is_array($return)){
				return $return;
			}else{
				return array($return,'text');				
			}
		}else{
			if($this->data['Location_X']){
				F('str',$this->data['Location_X']);
				return $this->map($data['Location_X'],$data['Location_Y']);
			}			
			switch($key){
				case '首页':
					return $this->home();
				break;
				case '主页':
					return $this->home();
				break;
				case '帮助':
					return $this->help();
				break;
				case 'help':
					return $this->help();
				break;
				case '会员卡':
					return $this->member();
				break;
				case '会员':
					return $this->member();
				break;
				case '3g相册':
					return $this->xiangce();
				break;
				case '相册':
					return $this->xiangce();
				break;				
				default:
					$check=$this->user('diynum');
					if($check['diynum']!=1){
						return array(C('connectout'),'text');
					}else{					
						return $this->keyword($key);
					}
			}
		}
	}
	function xiangce(){
			$photo=M('Photo')->where(array('token'=>$this->token,'status'=>1))->find();
			$data['title']=$photo['title'];
			$data['keyword']=$photo['info'];
			$data['url']=rtrim(C('site_url'),'/').U('Wap/Photo/index',array('token'=>$this->token,'wecha_id'=>$this->data['FromUserName']));
			$data['picurl']=$photo['picurl']?$photo['picurl']:rtrim(C('site_url'),'/').'/tpl/static/images/yj.jpg';		
		return array(array(array($data['title'],$data['keyword'],$data['picurl'],$data['url'])),'news');	
	}
	function shenhe($name){	
		$name=implode('',$name);		
		if(empty($name)){
			return '正确的审核帐号方式是：审核+帐号';
		}else{			
			$user=M('Users')->field('id')->where(array('username'=>$name))->find();
			if($user==false){
				return '主人'.$this->my."提醒您,您还没注册吧\n正确的审核帐号方式是：审核+帐号,不含+号";
			}else{
				$up=M('users')->where(array('id'=>$user['id']))->save(array('status'=>1,'viptime'=>strtotime("+1 day")));
				if($up!=false){
					return '主人'.$this->my.'恭喜您,您的帐号已经审核,您现在可以登陆平台测试功能啦!';
				}else{
					return '服务器繁忙请稍后再试';
				}
			}
		}
	}
	function huiyuanka($name){
		return $this->member();
	}
	function member(){
		$card=M('member_card_create')->where(array('token'=>$this->token,'wecha_id'=>$this->data['FromUserName']))->find();
		F('card',$card);
		if($card==false){
			$data['picurl']=rtrim(C('site_url'),'/').'/tpl/static/images/member.jpg';
			$data['title']='会员卡,省钱，打折,促销，优先知道,有奖励哦';
			$data['keyword']='尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦';
			$data['url']=rtrim(C('site_url'),'/').U('Wap/Card/get_card',array('token'=>$this->token,'wecha_id'=>$this->data['FromUserName']));
		}else{
			$data['picurl']=rtrim(C('site_url'),'/').'/tpl/static/images/vip.jpg';
			$data['title']='尊敬的会员卡用户欢迎您的再次访问,省钱，打折,促销，优先知道';
			$data['keyword']='尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦';
			$data['url']=rtrim(C('site_url'),'/').U('Wap/Card/vip',array('token'=>$this->token,'wecha_id'=>$this->data['FromUserName']));
		
		}
		return array(array(array($data['title'],$data['keyword'],$data['picurl'],$data['url'])),'news');
	
	}
	function taobao($name){		
		$name=array_merge($name);
		$data=M('Taobao')->where(array('token'=>$this->token))->find();
		if($data!=false){
			if(strpos($data['keyword'],$name)){
				$url=$data['homeurl'].'/search.htm?search=y&keyword='.$name.'&lowPrice=&highPrice=';
			}else{
				$url=$data['homeurl'];			
			}
			return array(array(array($data['title'],$data['keyword'],$data['picurl'],$url)),'news');	
			    
		}else{
			return '商家还未及时更新淘宝店铺的信息,回复帮助,查看功能详情';
		}
	}
	function choujiang($name){
		$data=M('lottery')->field('id,keyword,info,title,starpicurl')->where(array('token'=>$this->token,'status'=>1,'type'=>1))->order('id desc')->find();
		if($data==false){
			return array('暂无抽奖活动','text');
		}
		$pic=$data['starpicurl']?$data['starpicurl']:rtrim(C('site_url'),'/').'/tpl/User/default/common/images/img/activity-lottery-start.jpg';
		$url=rtrim(C('site_url'),'/').U('Wap/Lottery/index',array('type'=>1,'token'=>$this->token,'id'=>$data['id'],'wecha_id'=>$this->data['FromUserName']));
		return array(array(array($data['title'],$data['info'],$pic,$url)),'news');
	}
	function keyword($key){
	F('DATA',$key);
		$like['keyword']=array('like','%'.$key.'%');
		$like['token']=$this->token;
		$data=M('keyword')->where($like)->order('id desc')->find();
		if($data!=false){						
			switch($data['module']){
				case 'Img':
					$back=M($data['module'])->field('id,text,pic,url,title')->limit(9)->order('id desc')->where($like)->select();
					foreach($back as $keya=>$infot){
						if($infot['url']!=false){
							$url=$infot['url'];
						}else{
							$url=rtrim(C('site_url'),'/').U('Wap/Index/content',array('token'=>$this->token,'id'=>$infot['id']));
						}
						$return[]=array($infot['title'],$infot['text'],$infot['pic'],$url);
					}
					return array($return,'news');	
			    break;
				case 'Host':
					$host=M('host_list_add')->where(array('hid'=>$data['pid']))->find();
					return array(array(array($host['name'],$host['info'],$host['picurl'],C('site_url').'/index.php?g=Wap&m=Host&a=index&token='.$this->token.'&wecha_id='.$this->data['FromUserName'].'&hid='.$data['pid'])),'news');
					
				break;
				case 'Text':
					$info=M($data['module'])->order('id desc')->find($data['pid']);
					return array(htmlspecialchars_decode($info['text']),'text');
				break;
				case 'Product':
					 $pro=M('Product')->where(array('id'=>$data['pid']))->find();
					 return array(array(array($pro['name'],strip_tags(htmlspecialchars_decode($pro['intro'])),$pro['logourl'],C('site_url').'/index.php?g=Wap&m=Product&a=product&token='.$this->token.'&wecha_id='.$this->data['FromUserName'].'&id='.$data['pid'])),'news');
				break;
				case 'Lottery':
					$info=M('Lottery')->find($data['pid']);
					if($info==false||$info['status']==3){return array('活动可能已经结束或者被删除了','text');}
					switch($info['type']){
						case 1:
							$model='Lottery';
						break;
						case 2:
							$model='Guajiang';
						break;
						case 3:
							$model='Coupon';
					}
					$id=$info['id'];
					$type=$info['type'];
					if($info['status']==1){
						$picurl=$info['starpicurl'] ;
						$title=$info['title'];
						$id=$info['id'];
						$info=$info['info'];
					}else{
						$picurl=$info['endpicurl'];
						$title=$info['endtitle'];						
						$info=$info['endinfo'];
					}
					$url=C('site_url').U('Wap/'.$model.'/index',array('token'=>$this->token,'type'=>$type,'wecha_id'=>$this->data['FromUserName'],'id'=>$id,'type'=>$type));
					return array(array(array($title,$info,$picurl,$url)),'news');
				default:
					$info=M($data['module'])->order('id desc')->find($data['pid']);
					return array(array($info['title'],$info['keyword'],$info['musicurl'],$info['hqmusicurl']),'music');				
			}
		}else{
			if(!strpos($this->fun,'liaotian')){
				$other=M('Other')->where(array('token'=>$this->token))->find();
				if($other==false){
					return array('回复帮助，可了解所有功能','text');				
				}else{
					if(empty($other['keyword'])){
						return 	array($other['info'],'text');				
					}else{
						$img=M('Img')->field('id,text,pic,url,title')->limit(5)->order('id desc')->where(array('token'=>$this->token,'keyword'=>array('like'=>'%'.$other['keyword'].'%')))->select();
						if($img==false){return array('无此图文信息,请提醒商家，重新设定关键词','text');}
						foreach($img as $keya=>$infot){
							if($infot['url']!=false){
								$url=$infot['url'];
							}else{
								$url=rtrim(C('site_url'),'/').U('Wap/Index/content',array('token'=>$this->token,'id'=>$infot['id']));
							}
							$return[]=array($infot['title'],$infot['text'],$infot['pic'],$url);
					}
					return array($return,'news');
					}
				}
				
			}
			return array($this->chat($key),'text');
		}
	}
	function home(){
		return $this->shouye();
	}
	function shouye($name){
		$home=M('Home')->where(array('token'=>$this->token))->find();		
		if($home==false){
			return array('商家未做首页配置，请稍后再试','text');
		}else{
			$imgurl=$home['picurl'];
			if($home['apiurl']==false){
				$url=rtrim(C('site_url'),'/').'/index.php?g=Wap&m=Index&a=index&token='.$this->token;
			}else{
				$url=$home['apiurl'];
			}
			
		}
		return array(array(array($home['title'],$home['info'],$imgurl,$url)),'news');	
	}
	function kuaidi($data){
		$data=array_merge($data);
		$str=file_get_contents('http://www.weinxinma.com/api/index.php?m=Express&a=index&name='.$data[0].'&number='.$data[1]);
		return $str;
	}
	function langdu($data){
		$data=implode('',$data);
		$mp3url='http://www.apiwx.com/aaa.php?w='.urlencode($data);
		return array(array($data,'点听收听',$mp3url,$mp3url),'music');
	}
	function jiankang($data){
		if(empty($data))return '主人，'.$this->my."提醒您\n正确的查询方式是:\n健康+身高,+体重\n例如：健康170,65";
		$height= $data[1]/100;
		$weight=$data[2];
		$Broca=($height*100-80)*0.7;
		$kaluli=66+13.7*$weight+5*$height*100-6.8*25;
		$chao=$weight-$Broca;
		$zhibiao=$chao*0.1;
		$res=round($weight/($height*$height),1);
		if($res<18.5){
		 $info='您的体形属于骨感型，需要增加体重'.$chao.'公斤哦!';
		 $pic=1;
		}elseif($res<24){
			 $info='您的体形属于圆滑型的身材，需要减少体重'.$chao.'公斤哦!';
			  
		}elseif($res>24){
			$info='您的体形属于肥胖型，需要减少体重'.$chao.'公斤哦!';
			
		}elseif($res>28){
		$info='您的体形属于严重肥胖，请加强锻炼，或者使用我们推荐的减肥方案进行减肥';		
		}
		return $info;
	}
	function fujin($keyword){
		$keyword=implode('',$keyword);	
		if($keyword==false){
			return $this->my."很难过,无法识别主淫的指令,正确使用方法是:输入【附近+关键词】当".$this->my.'提醒您输入地理位置的时候就OK啦';
		}
		$data=array();
		$data['time']=time();
		$data['token']=$this->_get('token');
		$data['keyword']=$keyword;
		$data['uid']=$this->data['FromUserName'];
		$re=M('Nearby_user');
		$user=$re->where(array('token'=>$this->_get('token'),'uid'=>$data['uid']))->find();
		if($user==false){
			$re->data($data)->add();
		}else{
			$id['id']=$user['id'];
			$re->where($id)->save($data);
		}
		return "主淫【".$this->my."】已经接收到你的指令\n请发送您的地理位置给我哈";
	}
	function map($x,$y){
		F('X',$x);
		$user=M('Nearby_user')->where(array('token'=>$this->_get('token'),'uid'=>$this->data['FromUserName']))->find();
		$keyword=$user['keyword'];
		$x=$this->data['Location_X'];
		$y=$this->data['Location_Y'];
		$radius=2000;
		$str=file_get_contents(C('site_url').'/map.php?keyword='.urlencode($keyword).'&x='.$x.'&y='.$y);
		
		$array=json_decode($str);
		$map=array();
		foreach($array as $key=>$vo){
			$map[]=array($vo->title,$key,rtrim(C('site_url'),'/').'/tpl/static/images/home.jpg',$vo->url);
		}		
		return array($map,'news');
	}
	function suanming($name){
		$name=implode('',$name);
		if(empty($name)){return '主人'.$this->my.'提醒您正确的使用方法是[算命+姓名]';}
		$data=require_once(CONF_PATH.'suanming.php');
		$num=mt_rand(0,80);
		return $name."\n".trim($data[$num]);
	}
	function yinle($name){
		$name=implode('',$name);
		$url='http://httop1.duapp.com/mp3.php?musicName='.$name;
		$str=file_get_contents($url);
		$obj=json_decode($str);
		return array(array($name,$name,$obj->url,$obj->url),'music');
	}
	function geci($n){
		$name=implode('',$n);
		@$str='http://demo.pigcms.com/pgicms_api/api.php?key=free&appid=0&msg='.urlencode('歌词'.$name);
		$json=json_decode(file_get_contents($str));		
		$str=str_replace('{br}',"\n",$json->content);
		return str_replace('mzxing_com','pigcms',$str);
	}
	function yuming($n){
		$name=implode('',$n);
		@$str='http://demo.pigcms.com/pgicms_api/api.php?key=free&appid=0&msg='.urlencode('域名'.$name);
		$json=json_decode(file_get_contents($str));		
		$str=str_replace('{br}',"\n",$json->content);
		return str_replace('mzxing_com','pigcms',$str);	
	}
	function tianqi($n){
		$name=implode('',$n);
		@$str='http://demo.pigcms.com/pgicms_api/api.php?key=free&appid=0&msg='.urlencode('天气'.$name);
		$json=json_decode(file_get_contents($str));		
		$str=str_replace('{br}',"\n",$json->content);
		return $str;
	}
	function shouji($n){
		$name=implode('',$n);
		@$str='http://demo.pigcms.com/pgicms_api/api.php?key=free&appid=0&msg='.urlencode('归属'.$name);
		$json=json_decode(file_get_contents($str));		
		$str=str_replace('{br}',"\n",$json->content);
		$str=str_replace('菲菲',$this->my,str_replace('提示：',$this->my.'提醒您:',str_replace('{br}',"\n",$str)));
		return $str;
		
	}
	//身份证
	function shenfenzheng($n){
		$n=implode('',$n);
		if(count($n)>1){ $this->error_msg($n) ;return false;};
		$str1=file_get_contents('http://www.youdao.com/smartresult-xml/search.s?jsFlag=true&type=id&q='.$n);		
		$array=explode(':',$str1);
		$array[2]=rtrim($array[4],",'gender'");
		$str=trim($array[3],",'birthday'");
		if($str !== iconv('UTF-8','UTF-8',iconv('UTF-8','UTF-8',$str))) $str =  iconv('GBK','UTF-8',$str);
		$str='【身份证】 '.$n."\n".'【地址】'.$str."\n 【该身份证主人的生日】".str_replace("'",'',$array[2]);
		return $str;
	}
	//公交
	function gongjiao($data){
	
		$data=array_merge($data);
		if(count($data)!=3){ $this->error_msg() ;return false;};
		$json=file_get_contents("http://www.twototwo.cn/bus/Service.aspx?format=json&action=QueryBusByLine&key=5da453b2-b154-4ef1-8f36-806ee58580f6&zone=".$data[0]."&line=".$data[1]);
		$data=json_decode($json);
		//线路名
		$xianlu=$data->Response->Head->XianLu;
		//验证查询是否正确
		$xdata=get_object_vars($xianlu->ShouMoBanShiJian);
		$xdata=$xdata['#cdata-section'];
		$piaojia=get_object_vars($xianlu->PiaoJia);
		$xdata=$xdata.' -- '.$piaojia['#cdata-section'];		
		$main=$data->Response->Main->Item->FangXiang;
		//线路-路经
		$xianlu=$main[0]->ZhanDian;
		$str="【本公交途经】\n";
		for($i=0;$i<count($xianlu);$i++){
			$str.="\n".trim($xianlu[$i]->ZhanDianMingCheng);
		}
		return $str;
	}	
	
	//火车
	function huoche($data,$time=''){
	$data=array_merge($data);		
		$data[2]=date('Y',time()).$time;
		if(count($data)!=3){$this->error_msg($data[0].'至'.$data[1]) ;return false;};
		$time=empty($time)?date('Y-m-d',time()):date('Y-',time()).$time;
		$json=file_get_contents("http://www.twototwo.cn/train/Service.aspx?format=json&action=QueryTrainScheduleByTwoStation&key=5da453b2-b154-4ef1-8f36-806ee58580f6&startStation=".$data[0]."&arriveStation=".$data[1]."&startDate=".$data[2]."&ignoreStartDate=0&like=1&more=0");
		if($json){
			$data=json_decode($json);
			$main=$data->Response->Main->Item;
			if(count($main) > 10){
				$conunt=10;
			}else{
				$conunt=count($main);
			}
			for($i=0;$i<$conunt;$i++){
				$str.="\n 【编号】".$main[$i]->CheCiMingCheng."\n 【类型】".$main[$i]->CheXingMingCheng."\n【发车时间】:　".$time.' '.$main[$i]->FaShi."\n【耗时】".$main[$i]->LiShi.' 小时';
				$str.="\n----------------------";
			}
		}else{
			$str='没有找到 '.$name.' 至 '.$toname.' 的列车';
		}
		return $str;
	}

	//翻译
	function fanyi($name){
		$name=array_merge($name);
		$url="http://openapi.baidu.com/public/2.0/bmt/translate?client_id=kylV2rmog90fKNbMTuVsL934&q=".$name[0]."&from=auto&to=auto";
		$json=Http::fsockopenDownload($url);
		if($json==false){
			$json=file_get_contents($url);
		}
		$json=json_decode($json);		
		$str=$json->trans_result;
		if($str[0]->dst==false)return $this->error_msg($name[0]);
		$mp3url='http://www.apiwx.com/aaa.php?w='.$str[0]->dst;
		return array(array($str[0]->src,$str[0]->dst,$mp3url,$mp3url),'music');
	}
	//采票
	function caipiao($name){
		$name=array_merge($name);
		$url="http://api2.sinaapp.com/search/lottery/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=".$name[0];
		$json=Http::fsockopenDownload($url);
		if($json==false){
			$json=file_get_contents($url);
		}
		  $json = json_decode($json, true);
		$str = $json['text']['content'];			
		return $str;
	}
	//解梦
	function mengjian($name){
		$name=array_merge($name);
		if(empty($name))return '周公睡着了,无法解此梦,这年头神仙也偷懒';
		$data=M('Dream')->field('content')->where("`title` LIKE '%".$name[0]."%'")->find();
		if(empty($data))return '周公睡着了,无法解此梦,这年头神仙也偷懒';
		return $data['content'];
	}
	function test($name,$data){
		file_put_contents($name,$data);
	}
	//股票
	function gupiao($name){
		$name=array_merge($name);
		$url="http://api2.sinaapp.com/search/stock/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=".$name[0];
		$json=Http::fsockopenDownload($url);
		if($json==false){
			$json=file_get_contents($url);
		}
		$json = json_decode($json, true);
		$str = $json['text']['content'];	
		return $str;
	}
	function getmp3($data){
		$obj=new getYu();
		$ContentString = $obj->getGoogleTTS($data);
		$randfilestring ='mp3/'.time().'_'.sprintf('%02d', rand(0,999)).".mp3";		
		 file_put_contents($randfilestring,$ContentString); 
		return rtrim(C('site_url'),'/').$randfilestring;
	}
	//聊天
	function xiaohua(){
		$this->chat('笑话');
	}
	function liaotian($name){
		$name=array_merge($name);
		$this->chat($name[0]);
	}
	function chat($name){
		$check=$this->user('connectnum');
		if($check['connectnum']!=1){
			return C('connectout');
		}		
		if($name=="你叫什么"||$name=="你是谁"){
			return '咳咳，我是聪明与智慧并存的美女，主淫你可以叫我'.$this->my.',人家刚交男朋友,你不可追我啦';
		}elseif($name=="你父母是谁"||$name=="你爸爸是谁"||$name=="你妈妈是谁"){
			return '主淫,'.$this->my.'是PigCms创造的,所以他们是我的父母,不过主人我属于你的';
		}elseif($name=='糗事'){
			$name='笑话';
		}elseif($name=='网站'||$name=='官网'||$name=='网址'||$name=='3g网址'){
			return "【PigCms官网网址】\nwww.PigCms.com\n【PigCms服务综旨】\n化繁为简,让菜鸟(pig)也能使用强大的系统!";
		}
		$str='http://demo.pigcms.com/pgicms_api/api.php?key=free&appid=0&msg='.urlencode($name);
		$json=json_decode(file_get_contents($str));
		$str=str_replace('菲菲',$this->my,str_replace('提示：',$this->my.'提醒您:',str_replace('{br}',"\n",$json->content)));
		return str_replace('mzxing_com','pigcms',$str);
	}
	public function fistMe($data){
		if('event' == $data['MsgType'] && 'subscribe' == $data['Event']){			
			return $this->help();
		}	
	}
	
	public function help(){
		$data=M('Areply')->where(array('token'=>$this->token))->find();
		return array(preg_replace("/(\015\012)|(\015)|(\012)/", "\n",$data['content']), 'text');
	}
	function error_msg($data){
		return '没有找到'.$data.'相关的数据';
	}
	public function user($action){
		//查询微信号
		$user=M('Wxuser')->field('uid')->where(array('token'=>$this->token))->find();
		$usersdata=M('Users');
		//公共条件
		$dataarray=array('id'=>$user['uid']);
		//用户信息
		$users=$usersdata->field('gid,diynum,connectnum,activitynum,viptime')->where(array('id'=>$user['uid']))->find();
		//用户组
		$group=M('User_group')->where(array('id'=>$users['gid']))->find();
		if($users['diynum']<$group['diynum']){
			 $data['diynum']=1;
			 if($action=='diynum'){
				$usersdata->where($dataarray)->setInc('diynum');
			 }
		}
		if($users['connectnum']<$group['connectnum']){
			 $data['connectnum']=1;
			 if($action=='connectnum'){
				$usersdata->where($dataarray)->setInc('connectnum');
			 }
		}
		if($users['viptime']>time()){		
			 $data['viptime']=1;
		}
		return $data;
	}
	function baike($name){
		$name=implode('',$name);
		if($name=='pigcms'){return '世界上最牛B的微信营销系统，两天前被腾讯收购，当然这只是一个笑话';}
		$name_gbk = iconv('utf-8', 'gbk', $name); //将字符转换成GBK编码，若文件为GBK编码可去掉本行
		$encode = urlencode($name_gbk); //对字符进行URL编码
		$url = 'http://baike.baidu.com/list-php/dispose/searchword.php?word=' .$encode. '&pic=1';
		$get_contents = $this->httpGetRequest_baike($url); //获取跳转页内容
		$get_contents_gbk = iconv('gbk', 'utf-8', $get_contents); //将获取的网页转换成UTF-8编码，若文件为GBK编码可去掉本行
		preg_match("/URL=(\S+)'>/s", $get_contents_gbk, $out); //获取跳转后URL
		$real_link = 'http://baike.baidu.com' .$out[1];

		$get_contents2 =  $this->httpGetRequest_baike($real_link); //获取跳转页内容
		preg_match('#"Description"\scontent="(.+?)"\s\/\>#is', $get_contents2, $matchresult);
		if (isset($matchresult[1]) && $matchresult[1] != ""){
			return htmlspecialchars_decode($matchresult[1]);
		}else{
			return "抱歉，没有找到与“".$name."”相关的百科结果。";
		}
	}


	function httpGetRequest_baike($url)
	{
		$headers = array(
			"User-Agent: Mozilla/5.0 (Windows NT 5.1; rv:14.0) Gecko/20100101 Firefox/14.0.1",
			"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
			"Accept-Language: en-us,en;q=0.5",
			"Referer: http://www.baidu.com/"
		);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$output = curl_exec($ch);
		curl_close($ch);

		if ($output === FALSE){
			return "cURL Error: ". curl_error($ch);
		}
		return $output;
	}
	public function get_tags($title,$num=10){
		vendor('Pscws.Pscws4', '', '.class.php');
		$pscws = new PSCWS4();
		$pscws->set_dict(CONF_PATH . 'etc/dict.utf8.xdb');
		$pscws->set_rule(CONF_PATH . 'etc/rules.utf8.ini');
		$pscws->set_ignore(true);
		$pscws->send_text($title);
		$words = $pscws->get_tops($num);
		$pscws->close();
		$tags=array();
		foreach ($words as $val) {
			$tags[] = $val['word'];
		}
		return implode(',',$tags);
	}
}