<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
require("../../class/db_sql.php");
require("../../class/q_functions.php");
require "../".LoadLang("pub/fun.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//分类id
$bid=(int)$_GET['bid'];
$gbr=$empire->fetch1("select bid,bname,groupid from {$dbtbpre}enewsgbookclass where bid='$bid'");
if(empty($gbr['bid']))
{
	printerror("EmptyGbook","",1);
}
//权限
if($gbr['groupid'])
{
	include("../../member/class/user.php");
	$user=islogin();
	include("../../data/dbcache/MemberLevel.php");
	if($level_r[$gbr[groupid]][level]>$level_r[$user[groupid]][level])
	{
		echo"<script>alert('您的会员级别不足(".$level_r[$gbr[groupid]][groupname].")，没有权限提交信息!');history.go(-1);</script>";
		exit();
	}
}
esetcookie("gbookbid",$bid,0);
$bname=$gbr['bname'];
$search="&bid=$bid";
$page=(int)$_GET['page'];
$page=RepPIntvar($page);
$start=0;
$line=$public_r['gb_num'];//每页显示条数
$page_line=12;//每页显示链接数
$offset=$start+$page*$line;//总偏移量
$totalnum=(int)$_GET['totalnum'];
if($totalnum>0)
{
	$num=$totalnum;
}
else
{
	$totalquery="select count(*) as total from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
	$num=$empire->gettotal($totalquery);//取得总条数
}
$search.="&totalnum=$num";
$query="select lyid,name,email,`mycall`,lytime,lytext,retext from {$dbtbpre}enewsgbook where bid='$bid' and checked=0";
$query=$query." order by lyid desc limit $offset,$line";
$sql=$empire->query($query);
$listpage=page1($num,$line,$page_line,$start,$page,$search);
$url="<a href='".ReturnSiteIndexUrl()."'>".$fun_r['index']."</a>&nbsp;>&nbsp;".$fun_r['saygbook'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="zh-CN" />

<meta name="robots" content="all" />
<meta name="Copyright" content="©2014 戏曲迷 XIQU.ME" /> 
<meta name="keywords" content="<?=$bname?>" />
<meta name="description" content="<?=$bname?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="stylesheet" media="all" type="text/css" href="/skin/xiqu/css/main.css" />
<script type="text/javascript" src="//libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="/skin/xiqu/js/core.js"></script>
<title><?=$bname?></title>
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
			<div class="layout clearfix">
				<div class="guestbook">
					<h3><?=$bname?></h3>
					<div class="msg-main">
						<div class="msg-list">
							
<?
while($r=$empire->fetch($sql))
{
	$r['retext']=nl2br($r[retext]);
	$r['lytext']=nl2br($r[lytext]);
?>

							<div class="msg-item">
								<div class="msg-info">
									<span class="author">发布人：<strong><?=$r[name]?></strong></span>
									<span class="time"><?=$r[lytime]?></span>
								</div>
								<div class="msg-content">
									<?=$r[lytext]?>
								</div>
								
<?
if($r[retext])
{
?>

								<div class="msg-reply">
									<em>站长回复：</em>
									<span><?=$r[retext]?></span>
								</div>
								
<?
}
?>
							</div>
							
<?
}
?>

						</div>
			            <div class="page">
			                <ul>        
			                	<?=$listpage?> 
			                </ul>
			            </div>
					</div>
					<div class="msg-form">
						<h4>请您留言：</h4>
						<form action="../../enews/index.php" method="post" name="form1" id="form1">
						<input name="enews" type="hidden" id="enews" value="AddGbook" />
					        <div class="field field-large">
					            <div class="label">
					                <label><em class="text-warning">*</em>姓名：</label>
					            </div>
					            <div class="ipt">
					                <input type="text" class="ipt-text ipt-text-large" name="name" />
					            </div>
					            <div class="tips"></div>
					        </div>
					        <div class="field field-large">
					            <div class="label">
					                <label><em class="text-warning">*</em>联系邮箱：</label>
					            </div>
					            <div class="ipt">
					                <input type="text" class="ipt-text ipt-text-large" name="email" />
					            </div>
					            <div class="tips"></div>
					        </div>
					        <div class="field field-large">
					            <div class="label">
					                <label>联系电话：</label>
					            </div>
					            <div class="ipt">
					                <input type="text" class="ipt-text ipt-text-large" name="mycall" />
					            </div>
					            <div class="tips"></div>
					        </div>
					        <div class="field field-textarea field-large">
					            <div class="label"><em class="text-warning">*</em>留言内容：</div>
					            <div class="ipt">
					                <textarea class="ipt-text" style="height:100px;" name="lytext"></textarea>
					            </div>
					            <div class="tips"></div>
					        </div>
					        <div class="field field-large">
					            <div class="label"></div>
					            <div class="ipt">
					                <button class="btn btn-blue btn-larger">提交</button>
					            </div>
					            <div class="tips">(需审核后显示)</div>
					        </div>
						</form>
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
<?php
db_close();
$empire=null;
?>