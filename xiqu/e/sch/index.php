<?php
require("../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../class/db_sql.php");
require("../data/dbcache/class.php");
require LoadLang("pub/fun.php");
require("../class/schallfun.php");
$link=db_connect();
$empire=new mysqlquery();
eCheckCloseMods('sch');//关闭模块
$searchtime=time();
$totalnum=(int)$_GET['totalnum'];
$firstsearch=0;
if($totalnum<1)
{
	$firstsearch=1;
	//搜索间隔
	$lastsearchtime=(int)getcvar('lastschalltime');
	if($lastsearchtime)
	{
		if($searchtime-$lastsearchtime<$public_r[schalltime])
		{
			printerror('SchallOutTime','',1);
		}
	}
	//设置最后搜索时间
	esetcookie('lastschalltime',$searchtime,$searchtime+3600*24);
}
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$page_line=$public_r['schallpagenum'];//每页显示链接数
$line=$public_r['schallnum'];//每页显示记录数
$offset=$start+$page*$line;//总偏移量
//编码
$iconv='';
$char='';
$targetchar='';
if($ecms_config['sets']['pagechar']!='gb2312')
{
	include_once(ECMS_PATH.'e/class/doiconv.php');
	$iconv=new Chinese('');
	$char=$ecms_config['sets']['pagechar']=='big5'?'BIG5':'UTF8';
	$targetchar='GB2312';
}
$schallr=ReturnSearchAllSql($_GET);
require("../data/dbcache/SearchAllTb.php");
$keyboard=$schallr['keyboard'];
$query="select id,classid from {$dbtbpre}enewssearchall where ".$schallr['where'];
if($totalnum<1)
{
	$totalquery="select count(*) as total from {$dbtbpre}enewssearchall where ".$schallr['where'];
	$num=$empire->gettotal($totalquery);
	if(empty($num))
	{
		printerror('SchallNotRecord','',1);
	}
}
else
{
	$num=$totalnum;
}
$search=$schallr['search']."&totalnum=".$num;
$query.=" order by infotime desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['SearchAllNav'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="zh-CN" />

<meta name="robots" content="all" />
<meta name="Copyright" content="©2014 戏曲迷 XIQU.ME" /> 
<meta name="keywords" content="全站搜索" />
<meta name="description" content="全站搜索" />
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="stylesheet" media="all" type="text/css" href="/skin/xiqu/css/main.css" />
<script type="text/javascript" src="//libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="/skin/xiqu/js/core.js"></script>
<title><?=$keyboard?> 搜索结果</title>
</head>
<body>
<div class="top-bar-wrap">
	<div class="top-bar">
		<div class="user-info pull-left">
			<script>
				document.write('<script src="/e/member/login/loginjs.php?t='+Math.random()+'"><'+'/script>');
			</script>
		</div>
		<div class="entrance pull-right">
			<a href="javascript:;" onclick="var url=location.href;var title=document.title;try{window.external.addFavorite(url, title);}catch(e){try{window.sidebar.addPanel(title, url, ''); }catch(e){alert('加入收藏失败，请使用Ctrl+D进行添加');}}">加入收藏</a>
			<a href="/help">帮助中心</a>
			<a href="/e/tool/gbook/?bid=1">留言簿</a>
			<a href="/catalog/">网站地图</a>
		</div>
	</div>
</div>
<div class="header-wrap">
	<div class="header">
		<div class="header-main clearfix">
			<div class="logo pull-left">
				<a href="/"><img src="/skin/xiqu/img/logo.jpg" /></a>
			</div>
			<!-- <div class="ads"></div> -->
			<div class="search pull-right">
				<form action='/e/search/index.php' method="post" name="searchform" id="searchform">
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
					<a href="/">首页</a>
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
					<a href="/catalog/">更多&raquo;</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-wrap">
	<div class="content">
		<div class="path">
			<?=$url?>
		</div>
		<div class="layout clearfix">
			<div class="search-mod">
				<div class="search-form">
					<form action='index.php' method="GET" name="search_news" id="search_news">
					<input type="hidden" name="field" value="1" />
				        <div class="field field-large">
				            <div class="label">
				                <label>关键字：</label>
				            </div>
				            <div class="ipt">
				                <input type="text" class="ipt-text ipt-text-large" name="keyboard"  value="<?=$keyboard?>" />
				                <button class="btn btn-blue btn-larger">搜索</button>
				            </div>
				            <div class="tips">多个关键词请用“空格”隔开</div>
				        </div>
					</form>
				</div>
				<div class="search-result">
					<p class="result-total">系统搜索到约有<strong><?=$num?></strong>项符合<strong><?=$keyboard?></strong>的查询结果</p>
					<div class="result-list">

<?php
$no=$offset;
$subnum=120;
$formatdate="Y-m-d H:i:s";
while($r=$empire->fetch($sql))
{
	$tbname=$class_r[$r[classid]]['tbname'];
	if(empty($tbname))
	{
		continue;
	}
	$titlefield=$schalltb_r[$tbname]['titlefield'];
	$smalltextfield=$schalltb_r[$tbname]['smalltextfield'];
	$infor=$empire->fetch1("select id,classid,titlepic,newstime,isurl,titleurl,".$titlefield.",".$smalltextfield." from {$dbtbpre}ecms_".$tbname." where id='$r[id]' limit 1");
	if(empty($infor['id']))
	{
		continue;
	}
	$no++;
	$titleurl=sys_ReturnBqTitleLink($infor);
	$titlepic=$infor['titlepic']?$infor['titlepic']:$public_r['newsurl']."e/data/images/notimg.gif";
	$smalltext=SubSchallSmalltext($infor[$smalltextfield],$subnum);
	$title=DoReplaceFontRed($infor[$titlefield],$keyboard);
	$smalltext=DoReplaceFontRed($smalltext,$keyboard);
	$newstime=date($formatdate,$infor['newstime']);
?>

						<div class="result-item">
							<p class="title">
								<span><?=$no?>.</span>
								<a href="<?=$titleurl?>" target="_blank"><?=$title?></a>
							</p>
							<p class="meta">
								<a href="<?=$titleurl?>" target="_blank" class="url"><?=$titleurl?></a>
								<em>-</em>
								<span class="date"><?=$newstime?></span>
								<em>-</em>
								<a href="#" class="type">京剧视频下载</a>
							</p>
						</div>

<?php
}
db_close();
$empire=null;
?>

						<div class="result-item">
							<p class="title">
								<span>1.</span>
								<a href="#">阿斯顿发送地方阿斯顿飞阿地方阿斯顿飞ASDFAS斯发的阿斯顿飞</a>
							</p>
							<p class="meta">
								<a href="#">http://xiqu.me/jingju/shipin/2014-08-05/1.html</a>
								<em>-</em>
								<span class="date">2014-08-05</span>
								<em>-</em>
								<a href="#" class="type">[!--classid--]</a>
							</p>
						</div>
						<div class="result-item">
							<p class="title">
								<span>1.</span>
								<a href="#">阿斯顿发地方AF阿斯萨地方顿飞ASDFAS斯发的阿斯顿飞</a>
							</p>
							<p class="meta">
								<a href="#">http://xiqu.me/jingju/shipin/2014-08-05/1.html</a>
								<em>-</em>
								<span class="date">2014-08-05</span>
								<em>-</em>
								<a href="#" class="type">京剧视频下载</a>
							</p>
						</div>
						<div class="result-item">
							<p class="title">
								<span>1.</span>
								<a href="#">阿斯顿发送地方阿斯顿飞ASDFAS斯发的斯发的阿斯顿飞</a>
							</p>
							<p class="meta">
								<a href="#">http://xiqu.me/jingju/shipin/2014-08-05/1.html</a>
								<em>-</em>
								<span class="date">2014-08-05</span>
								<em>-</em>
								<a href="#" class="type">京剧视频下载</a>
							</p>
						</div>
						<div class="result-item">
							<p class="title">
								<span>1.</span>
								<a href="#">阿斯顿发送地方阿斯顿飞阿斯发的阿斯顿飞</a>
							</p>
							<p class="meta">
								<a href="#">http://xiqu.me/jingju/shipin/2014-08-05/1.html</a>
								<em>-</em>
								<span class="date">2014-08-05</span>
								<em>-</em>
								<a href="#" class="type">京剧视频下载</a>
							</p>
						</div>
					</div>
					<div class="page">
						<ul>
							<?=$listpage?>
						</ul>
					</div>
				</div>
			</div>
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