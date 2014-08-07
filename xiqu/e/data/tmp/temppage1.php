<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="zh-CN" />

<meta name="robots" content="all" />
<meta name="Copyright" content="©2014 戏曲迷 XIQU.ME" /> 
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="stylesheet" media="all" type="text/css" href="[!--news.url--]skin/xiqu/css/main.css" />
<script type="text/javascript" src="//libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="[!--news.url--]skin/xiqu/js/core.js"></script>
<title>[!--pagetitle--]</title>
</head>
<body>
<div class="top-bar-wrap">
	<div class="top-bar">
		<div class="user-info pull-left">
			<script>
				document.write('<script src="[!--news.url--]e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
			</script>
		</div>
		<div class="entrance pull-right">
			<a href="javascript:;" onclick="var url=location.href;var title=document.title;try{window.external.addFavorite(url, title);}catch(e){try{window.sidebar.addPanel(title, url, ''); }catch(e){alert('加入收藏失败，请使用Ctrl+D进行添加');}}">加入收藏</a>
			<a href="[!--news.url--]help">帮助中心</a>
			<a href="[!--news.url--]e/tool/gbook/?bid=1">留言簿</a>
			<a href="[!--news.url--]catalog/">网站地图</a>
		</div>
	</div>
</div>
<div class="header-wrap">
	<div class="header">
		<div class="header-main clearfix">
			<div class="logo pull-left">
				<a href="[!--news.url--]"><img src="[!--news.url--]skin/xiqu/img/logo.jpg" /></a>
			</div>
			<!-- <div class="ads"></div> -->
			<div class="search pull-right">
				<form action='[!--news.url--]e/search/index.php' method="post" name="searchform" id="searchform">
				<input type="hidden" name="show" value="title" />
					<div class="ipt-search">
						<input name="keyboard" type="text" class="ipt-text ipt-text-large" placeholder="输入关键词搜索" /><button class="btn btn-blue btn-larger" type="submit">搜索</button>
					</div>
				</form>
			</div>
		</div>
		<div class="nav-bar-wrap">
			<div class="nav-bar">
				<div class="nav">
					<a href="[!--news.url--]">首页</a>
					<a href="#">京剧</a>
					<a href="#">豫剧</a>
					<a href="#">越剧</a>
					<a href="#">昆曲</a>
					<a href="#">黄梅戏</a>
					<a href="#">秦腔</a>
					<a href="#">粤剧</a>
					<a href="#">川剧</a>
					<a href="#">晋剧</a>
					<a href="#">河南坠子</a>
					<a href="#">湖南花鼓戏</a>
					<a href="[!--news.url--]catalog/">更多&raquo;</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-wrap">
	<div class="content">
		<div class="mod catalog">
			<div class="mod-bd">
				<div class="tabs" id="types">
					<ul class="clearfix">
						<li><a href="javascript:;">按省份查找</a><span class="arr"></span></li>
						<li class="cur"><a href="javascript:;">按拼音查找</a><span class="arr"></span></li>
					</ul>
				</div>
				<div class="catalog-province hide">
					<dl>
						<dt>北京市</dt>
						<dd>
							<ul>
								<li><a href="#" class="hot">京剧</a></li>
								<li><a href="#">北方昆曲</a></li>
								<li><a href="#">西路评剧</a></li>
								<li><a href="#">北京曲剧</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>河北省</dt>
						<dd>
							<ul>
								<li><a href="#">河北梆子</a></li>
								<li><a href="#">评剧</a></li>
								<li><a href="#">丝弦</a></li>
								<li><a href="#">保定老调</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
								<li><a href="#">武安落子</a></li>
								<li><a href="#">西调</a></li>
								<li><a href="#">隆尧秧歌</a></li>
								<li><a href="#">唐剧</a></li>
								<li><a href="#">深泽坠子</a></li>
								<li><a href="#">安国老调</a></li>
								<li><a href="#">上四调</a></li>
								<li><a href="#">保定皮影</a></li>
								<li><a href="#">贤寓调</a></li>
								<li><a href="#">碰板调</a></li>
								<li><a href="#">十不闲莲花落</a></li>
								<li><a href="#">固义傩戏</a></li>
								<li><a href="#">海兴南锣</a></li>
								<li><a href="#">定州秧歌戏</a></li>
								<li><a href="#">蔚州梆子</a></li>
								<li><a href="#">高腔</a></li>
								<li><a href="#">唐山皮影</a></li>
								<li><a href="#">冀南皮影戏</a></li>
								<li><a href="#">张家口赛戏</a></li>
								<li><a href="#">临漳西狄邱落子</a></li>
								<li><a href="#">南辛庄木偶戏</a></li>
								<li><a href="#">新颖调</a></li>
								<li><a href="#">横歧调</a></li>
								<li><a href="#">东路二人台</a></li>
								<li><a href="#">诗赋弦</a></li>
								<li><a href="#">邢台弦子腔</a></li>
								<li><a href="#">邢台坠子戏</a></li>
								<li><a href="#">邢台淮调</a></li>
								<li><a href="#">邢台西调</a></li>
								<li><a href="#">肃宁武术戏</a></li>
								<li><a href="#">怀安软秧歌</a></li>
								<li><a href="#">肥乡罗戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>山东省</dt>
						<dd>
							<ul>
								<li><a href="#">山东梆子</a></li>
								<li><a href="#">枣梆</a></li>
								<li><a href="#">莱芜梆子</a></li>
								<li><a href="#">东路梆子</a></li>
								<li><a href="#">柳子戏</a></li>
								<li><a href="#">大弦子戏</a></li>
								<li><a href="#">罗子戏</a></li>
								<li><a href="#">吕剧</a></li>
								<li><a href="#">茂腔</a></li>
								<li><a href="#">柳腔</a></li>
								<li><a href="#">五音戏</a></li>
								<li><a href="#">柳琴戏</a></li>
								<li><a href="#">四平调</a></li>
								<li><a href="#">灯腔</a></li>
								<li><a href="#">东路肘鼓子</a></li>
								<li><a href="#">坠剧</a></li>
								<li><a href="#">渔鼓戏</a></li>
								<li><a href="#">八仙戏</a></li>
								<li><a href="#">蓝关戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>青海省</dt>
						<dd>
							<ul>
								<li><a href="#">青海藏戏</a></li>
								<li><a href="#">青海平弦戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>安徽省</dt>
						<dd>
							<ul>
								<li><a href="#">黄梅戏</a></li>
								<li><a href="#">青阳腔</a></li>
								<li><a href="#">沙河调</a></li>
								<li><a href="#">岳西高腔</a></li>
								<li><a href="#">目连戏</a></li>
								<li><a href="#">安徽傩戏</a></li>
								<li><a href="#">庐剧</a></li>
								<li><a href="#">安徽端公戏</a></li>
								<li><a href="#">泗洲戏</a></li>
								<li><a href="#">宿州坠子</a></li>
								<li><a href="#">含弓戏</a></li>
								<li><a href="#">芜湖梨簧戏</a></li>
								<li><a href="#">文南词</a></li>
								<li><a href="#">凤阳花鼓戏</a></li>
								<li><a href="#">皖南花鼓戏</a></li>
								<li><a href="#">淮北花鼓戏</a></li>
								<li><a href="#">推剧</a></li>
								<li><a href="#">嗨字戏</a></li>
								<li><a href="#">洪山戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>江苏省</dt>
						<dd>
							<ul>
								<li><a href="#">昆曲</a></li>
								<li><a href="#">淮剧</a></li>
								<li><a href="#">扬剧</a></li>
								<li><a href="#">通剧</a></li>
								<li><a href="#">锡剧</a></li>
								<li><a href="#">苏剧</a></li>
								<li><a href="#">淮海戏</a></li>
								<li><a href="#">丹剧</a></li>
								<li><a href="#">丁丁腔</a></li>
								<li><a href="#">海门山歌剧</a></li>
								<li><a href="#">淮红剧</a></li>
								<li><a href="#">苏州评弹</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>上海市</dt>
						<dd>
							<ul>
								<li><a href="#">沪剧</a></li>
								<li><a href="#">滑稽戏</a></li>
								<li><a href="#">奉贤山歌剧</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>浙江省</dt>
						<dd>
							<ul>
								<li><a href="#">越剧</a></li>
								<li><a href="#">婺剧</a></li>
								<li><a href="#">绍剧</a></li>
								<li><a href="#">新昌调腔</a></li>
								<li><a href="#">宁海平调</a></li>
								<li><a href="#">松阳高腔</a></li>
								<li><a href="#">永康醒感戏</a></li>
								<li><a href="#">温州昆曲</a></li>
								<li><a href="#">金华昆腔戏</a></li>
								<li><a href="#">台州乱弹</a></li>
								<li><a href="#">诸暨乱弹</a></li>
								<li><a href="#">瓯剧</a></li>
								<li><a href="#">和剧</a></li>
								<li><a href="#">杭剧</a></li>
								<li><a href="#">甬剧</a></li>
								<li><a href="#">湖剧</a></li>
								<li><a href="#">姚剧</a></li>
								<li><a href="#">睦剧</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>江西省</dt>
						<dd>
							<ul>
								<li><a href="#">赣剧</a></li>
								<li><a href="#">弋阳腔</a></li>
								<li><a href="#">盱河戏</a></li>
								<li><a href="#">东河戏</a></li>
								<li><a href="#">宁河戏</a></li>
								<li><a href="#">瑞河戏</a></li>
								<li><a href="#">宜黄戏</a></li>
								<li><a href="#">南昌采茶戏</a></li>
								<li><a href="#">赣南采茶戏</a></li>
								<li><a href="#">萍乡采茶戏</a></li>
								<li><a href="#">万载花灯戏</a></li>
								<li><a href="#">抚州采茶戏</a></li>
								<li><a href="#">吉安采茶戏</a></li>
								<li><a href="#">宁都采茶戏</a></li>
								<li><a href="#">赣东采茶戏</a></li>
								<li><a href="#">九江采茶戏</a></li>
								<li><a href="#">景德镇采茶戏</a></li>
								<li><a href="#">高安采茶戏</a></li>
								<li><a href="#">武宁采茶戏	</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>福建省</dt>
						<dd>
							<ul>
								<li><a href="#">梨园戏</a></li>
								<li><a href="#">高甲戏</a></li>
								<li><a href="#">平讲戏</a></li>
								<li><a href="#">闽剧</a></li>
								<li><a href="#">庶民戏</a></li>
								<li><a href="#">词明戏</a></li>
								<li><a href="#">莆仙戏</a></li>
								<li><a href="#">词明戏</a></li>
								<li><a href="#">大腔戏</a></li>
								<li><a href="#">闽西汉剧</a></li>
								<li><a href="#">北路戏</a></li>
								<li><a href="#">梅林戏</a></li>
								<li><a href="#">右词南剑调</a></li>
								<li><a href="#">小腔戏</a></li>
								<li><a href="#">三角戏</a></li>
								<li><a href="#">闽西采茶戏</a></li>
								<li><a href="#">南词戏</a></li>
								<li><a href="#">闽西山歌戏</a></li>
								<li><a href="#">芗剧</a></li>
								<li><a href="#">打城戏</a></li>
								<li><a href="#">竹马戏</a></li>
								<li><a href="#">游春戏</a></li>
								<li><a href="#">肩膀戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>台湾省</dt>
						<dd>
							<ul>
								<li><a href="#">歌仔戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>广东省</dt>
						<dd>
							<ul>
								<li><a href="#">粤剧</a></li>
								<li><a href="#">潮剧</a></li>
								<li><a href="#">白字戏</a></li>
								<li><a href="#">粤北采茶戏</a></li>
								<li><a href="#">乐昌花鼓戏</a></li>
								<li><a href="#">雷剧</a></li>
								<li><a href="#">粤西白戏</a></li>
								<li><a href="#">正字戏</a></li>
								<li><a href="#">广东汉剧</a></li>
								<li><a href="#">西秦戏</a></li>
								<li><a href="#">花朝戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>海南省</dt>
						<dd>
							<ul>
								<li><a href="#">琼剧</a></li>
								<li><a href="#">临剧</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>湖南省</dt>
						<dd>
							<ul>
								<li><a href="#">湘剧</a></li>
								<li><a href="#">祁剧</a></li>
								<li><a href="#">常德汉剧</a></li>
								<li><a href="#">巴陵戏</a></li>
								<li><a href="#">湘昆</a></li>
								<li><a href="#">长沙花鼓戏</a></li>
								<li><a href="#">岳阳花鼓戏</a></li>
								<li><a href="#">常德花鼓戏</a></li>
								<li><a href="#">湘西花灯戏</a></li>
								<li><a href="#">湘西阳戏</a></li>
								<li><a href="#">衡阳花鼓戏</a></li>
								<li><a href="#">邵阳花鼓戏</a></li>
								<li><a href="#">零陵花鼓戏</a></li>
								<li><a href="#">师道戏</a></li>
								<li><a href="#">湘西苗戏</a></li>
								<li><a href="#">新晃侗族傩戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>河南省</dt>
						<dd>
							<ul>
								<li><a href="#">豫剧</a></li>
								<li><a href="#">河南越调</a></li>
								<li><a href="#">南阳梆子</a></li>
								<li><a href="#">大平调</a></li>
								<li><a href="#">怀梆</a></li>
								<li><a href="#">大弦戏</a></li>
								<li><a href="#">罗戏</a></li>
								<li><a href="#">罗卷戏</a></li>
								<li><a href="#">河南曲剧</a></li>
								<li><a href="#">河南道情</a></li>
								<li><a href="#">豫南花鼓戏</a></li>
								<li><a href="#">乐腔</a></li>
								<li><a href="#">五调腔</a></li>
								<li><a href="#">宛梆</a></li>
								<li><a href="#">二夹弦</a></li>
								<li><a href="#">河南坠子</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>湖北省</dt>
						<dd>
							<ul>
								<li><a href="#">汉剧</a></li>
								<li><a href="#">荆河戏</a></li>
								<li><a href="#">南剧</a></li>
								<li><a href="#">湖北越调</a></li>
								<li><a href="#">山二黄</a></li>
								<li><a href="#">湖北高腔</a></li>
								<li><a href="#">楚剧</a></li>
								<li><a href="#">东路花鼓戏</a></li>
								<li><a href="#">黄梅采茶戏</a></li>
								<li><a href="#">阳新采茶戏</a></li>
								<li><a href="#">远安花鼓戏</a></li>
								<li><a href="#">荆州花鼓戏</a></li>
								<li><a href="#">梁山调</a></li>
								<li><a href="#">郧阳花鼓戏</a></li>
								<li><a href="#">随县花鼓戏</a></li>
								<li><a href="#">文曲戏</a></li>
								<li><a href="#">鄂西柳子戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>四川省</dt>
						<dd>
							<ul>
								<li><a href="#">川剧</a></li>
								<li><a href="#">四川灯戏</a></li>
								<li><a href="#">四川曲艺剧</a></li>
								<li><a href="#">秀山花灯戏	</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>吉林省</dt>
						<dd>
							<ul>
								<li><a href="#">黄龙戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>云南省</dt>
						<dd>
							<ul>
								<li><a href="#">滇剧</a></li>
								<li><a href="#">云南花灯戏</a></li>
								<li><a href="#">昆明曲剧</a></li>
								<li><a href="#">关索戏</a></li>
								<li><a href="#">傣剧</a></li>
								<li><a href="#">白剧</a></li>
								<li><a href="#">云南壮剧</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>贵州省</dt>
						<dd>
							<ul>
								<li><a href="#">傩戏</a></li>
								<li><a href="#">黔剧</a></li>
								<li><a href="#">贵州梆子</a></li>
								<li><a href="#">贵州花灯剧</a></li>
								<li><a href="#">贵州侗戏</a></li>
								<li><a href="#">布依戏</a></li>
								<li><a href="#">苗戏</a></li>
								<li><a href="#">安顺地戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>甘肃省</dt>
						<dd>
							<ul>
								<li><a href="#">陇剧</a></li>
								<li><a href="#">高山剧</a></li>
								<li><a href="#">影子腔</a></li>
								<li><a href="#">甘南藏戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>陕西省</dt>
						<dd>
							<ul>
								<li><a href="#">秦腔</a></li>
								<li><a href="#">汉调二黄</a></li>
								<li><a href="#">合阳跳戏</a></li>
								<li><a href="#">线腔</a></li>
								<li><a href="#">眉户戏</a></li>
								<li><a href="#">陕西碗碗腔</a></li>
								<li><a href="#">陕西老腔</a></li>
								<li><a href="#">陕南端公戏</a></li>
								<li><a href="#">陕西道情</a></li>
								<li><a href="#">弦板腔</a></li>
								<li><a href="#">陕南花鼓戏</a></li>
								<li><a href="#">安康弦子戏</a></li>
								<li><a href="#">汉调桄桄</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>辽宁省</dt>
						<dd>
							<ul>
								<li><a href="#">海城喇叭戏</a></li>
								<li><a href="#">辽南影调戏</a></li>
								<li><a href="#">阜新蒙古剧</a></li>
								<li><a href="#">彩扮莲花落</a></li>
								<li><a href="#">二人转</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>山西省</dt>
						<dd>
							<ul>
								<li><a href="#">晋剧</a></li>
								<li><a href="#">蒲剧</a></li>
								<li><a href="#">北路梆子</a></li>
								<li><a href="#">锣鼓杂戏</a></li>
								<li><a href="#">耍孩儿</a></li>
								<li><a href="#">灵邱罗罗</a></li>
								<li><a href="#">上党皮黄</a></li>
								<li><a href="#">上党落子</a></li>
								<li><a href="#">永济道情戏</a></li>
								<li><a href="#">洪洞道情</a></li>
								<li><a href="#">临县道情戏</a></li>
								<li><a href="#">晋北道情</a></li>
								<li><a href="#">襄武秧歌</a></li>
								<li><a href="#">壶关秧歌</a></li>
								<li><a href="#">沁源秧歌</a></li>
								<li><a href="#">祁太秧歌</a></li>
								<li><a href="#">繁峙秧歌</a></li>
								<li><a href="#">朔县秧歌</a></li>
								<li><a href="#">孝义碗碗腔</a></li>
								<li><a href="#">曲沃碗碗腔</a></li>
								<li><a href="#">弦子腔</a></li>
								<li><a href="#">凤台小戏</a></li>
								<li><a href="#">河曲二人台</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>黑龙江省</dt>
						<dd>
							<ul>
								<li><a href="#">龙江剧</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>西藏自治区</dt>
						<dd>
							<ul>
								<li><a href="#">藏戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>内蒙古自治区</dt>
						<dd>
							<ul>
								<li><a href="#">内蒙大秧歌</a></li>
								<li><a href="#">漫瀚剧</a></li>
								<li><a href="#">二人台</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>广西壮族自治区</dt>
						<dd>
							<ul>
								<li><a href="#">邕剧</a></li>
								<li><a href="#">桂剧</a></li>
								<li><a href="#">丝弦戏</a></li>
								<li><a href="#">师公戏</a></li>
								<li><a href="#">彩调</a></li>
								<li><a href="#">牛娘剧</a></li>
								<li><a href="#">桂南采茶戏</a></li>
								<li><a href="#">壮剧</a></li>
								<li><a href="#">苗戏</a></li>
								<li><a href="#">侗戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>新疆维吾尔自治区</dt>
						<dd>
							<ul>
								<li><a href="#">新疆曲子戏</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="catalog-pinyin">
					<dl>
						<dt>A-D</dt>
						<dd>
							<ul>
								<li><a href="#" class="hot">京剧</a></li>
								<li><a href="#">北方昆曲</a></li>
								<li><a href="#">西路评剧</a></li>
								<li><a href="#">北京曲剧</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>E-G</dt>
						<dd>
							<ul>
								<li><a href="#">河北梆子</a></li>
								<li><a href="#">评剧</a></li>
								<li><a href="#">丝弦</a></li>
								<li><a href="#">保定老调</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
								<li><a href="#">武安落子</a></li>
								<li><a href="#">西调</a></li>
								<li><a href="#">隆尧秧歌</a></li>
								<li><a href="#">唐剧</a></li>
								<li><a href="#">深泽坠子</a></li>
								<li><a href="#">安国老调</a></li>
								<li><a href="#">上四调</a></li>
								<li><a href="#">怀安软秧歌</a></li>
								<li><a href="#">肥乡罗戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>H-K</dt>
						<dd>
							<ul>
								<li><a href="#" class="hot">京剧</a></li>
								<li><a href="#">北方昆曲</a></li>
								<li><a href="#">西路评剧</a></li>
								<li><a href="#">北京曲剧</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>L-N</dt>
						<dd>
							<ul>
								<li><a href="#">河北梆子</a></li>
								<li><a href="#">评剧</a></li>
								<li><a href="#">丝弦</a></li>
								<li><a href="#">保定老调</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
								<li><a href="#">武安落子</a></li>
								<li><a href="#">西调</a></li>
								<li><a href="#">隆尧秧歌</a></li>
								<li><a href="#">唐剧</a></li>
								<li><a href="#">深泽坠子</a></li>
								<li><a href="#">安国老调</a></li>
								<li><a href="#">上四调</a></li>
								<li><a href="#">怀安软秧歌</a></li>
								<li><a href="#">肥乡罗戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>O-Q</dt>
						<dd>
							<ul>
								<li><a href="#" class="hot">京剧</a></li>
								<li><a href="#">北方昆曲</a></li>
								<li><a href="#">西路评剧</a></li>
								<li><a href="#">北京曲剧</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>R-T</dt>
						<dd>
							<ul>
								<li><a href="#">河北梆子</a></li>
								<li><a href="#">评剧</a></li>
								<li><a href="#">丝弦</a></li>
								<li><a href="#">保定老调</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
								<li><a href="#">武安落子</a></li>
								<li><a href="#">西调</a></li>
								<li><a href="#">隆尧秧歌</a></li>
								<li><a href="#">唐剧</a></li>
								<li><a href="#">深泽坠子</a></li>
								<li><a href="#">安国老调</a></li>
								<li><a href="#">上四调</a></li>
								<li><a href="#">怀安软秧歌</a></li>
								<li><a href="#">肥乡罗戏</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>U-W</dt>
						<dd>
							<ul>
								<li><a href="#" class="hot">京剧</a></li>
								<li><a href="#">北方昆曲</a></li>
								<li><a href="#">西路评剧</a></li>
								<li><a href="#">北京曲剧</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
							</ul>
						</dd>
					</dl>
					<dl>
						<dt>X-Z</dt>
						<dd>
							<ul>
								<li><a href="#">河北梆子</a></li>
								<li><a href="#">评剧</a></li>
								<li><a href="#">丝弦</a></li>
								<li><a href="#">保定老调</a></li>
								<li><a href="#">哈哈腔</a></li>
								<li><a href="#">河北乱弹</a></li>
								<li><a href="#">武安平调</a></li>
								<li><a href="#">武安落子</a></li>
								<li><a href="#">西调</a></li>
								<li><a href="#">隆尧秧歌</a></li>
								<li><a href="#">唐剧</a></li>
								<li><a href="#">深泽坠子</a></li>
								<li><a href="#">安国老调</a></li>
								<li><a href="#">上四调</a></li>
								<li><a href="#">怀安软秧歌</a></li>
								<li><a href="#">肥乡罗戏</a></li>
							</ul>
						</dd>
					</dl>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(function(){
					var type = location.hash.substring(1) * 1;
					type = (type === 1 || type === 2) ? type - 1 : 0;
					var types = $('#types li');
					var catalogs = $('.catalog-province, .catalog-pinyin');
					types.each(function(i,v){
						$(this).on('click', function(){
							location.hash = i + 1;
							types.removeClass('cur');
							types.eq(i).addClass('cur');
							catalogs.hide();
							catalogs.eq(i).show();
						})
					})
					types.eq(type).click();
				})
			</script>
		</div>
	</div>
</div>

<div class="footer-wrap">
	<div class="footer">
		<div class="copyright">&copy; 2014 XIQU.ME <a href="#">戏曲迷</a> <a href="#">鄂ICP备12016324号</a></div>
	</div>
</div>
</body>
</html>





