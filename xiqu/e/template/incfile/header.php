<?php
if(!defined('InEmpireCMS'))
{
	exit();
}

//--------------- 界面参数 ---------------

//会员界面附件地址前缀
$memberskinurl=$public_r['newsurl'].'skin/member/images/';

//LOGO图片地址
$logoimgurl=$memberskinurl.'logo.jpg';

//加减号图片地址
$addimgurl=$memberskinurl.'add.gif';
$noaddimgurl=$memberskinurl.'noadd.gif';

//上下横线背景色
$bgcolor_line='#4FB4DE';

//其它色调可修改CSS部分

//--------------- 界面参数 ---------------


//网页标题
$thispagetitle=$public_diyr['pagetitle']?$public_diyr['pagetitle']:'会员中心';
//会员信息
$tmgetuserid=(int)getcvar('mluserid');	//用户ID
$tmgetusername=RepPostVar(getcvar('mlusername'));	//用户名
$tmgetgroupid=(int)getcvar('mlgroupid');	//用户组ID
$tmgetgroupname='游客';
//会员组名称
if($tmgetgroupid)
{
	$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	if(!$tmgetgroupname)
	{
		include_once(ECMS_PATH.'e/data/dbcache/MemberLevel.php');
		$tmgetgroupname=$level_r[$tmgetgroupid]['groupname'];
	}
}

//模型
$tgetmid=(int)$_GET['mid'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="zh-CN" />

		<meta name="robots" content="all" />
		<meta name="Copyright" content="©2014 戏曲迷 XIQU.ME" /> 
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">

		<link rel="stylesheet" media="all" type="text/css" href="<?=$public_r['newsurl']?>skin/xiqu/css/main.css" />
		<script type="text/javascript" src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
		<script type="text/javascript" src="<?=$public_r['newsurl']?>skin/js/core.js"></script>

		<title><?=$thispagetitle?></title>
	</head>
	<body>
		<div class="top-bar-wrap">
			<div class="top-bar">
				<?php if($tmgetuserid){ ?>
				<div class="user-info pull-left">
					<div class="user-detail">
						<strong>欢迎您，<?=$tmgetusername?></strong><span>(<?=$tmgetgroupname?>)</span>
						<a href="<?=$public_r['newsurl']?>e/member/doaction.php?enews=exit" onclick="return confirm('确认要退出?');">退出</a>
					</div>
				</div>
				<?php } ?>
				<div class="entrance pull-right">
					<a href="javascript:;" onclick="var url=location.href;var title=document.title;try{window.external.addFavorite(url, title);}catch(e){try{window.sidebar.addPanel(title, url, ''); }catch(e){alert('加入收藏失败，请使用Ctrl+D进行添加');}}">加入收藏</a>
					<a href="<?=$public_r['newsurl']?>help">帮助中心</a>
					<a href="<?=$public_r['newsurl']?>e/tool/gbook/?bid=1">留言簿</a>
					<a href="<?=$public_r['newsurl']?>catalog/">网站地图</a>
				</div>
			</div>
		</div>
		<div class="header-wrap">
			<div class="header">
				<div class="header-main clearfix">
					<div class="logo pull-left">
						<a href="<?=$public_r['newsurl']?>"><img src="<?=$public_r['newsurl']?>skin/xiqu/img/logo.jpg" /></a>
					</div>
					<!-- <div class="ads"></div> -->
					<div class="search pull-right">
				<form action='<?=$public_r['newsurl']?>e/search/index.php' method="post" name="searchform" id="searchform">
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
							<a href="<?=$public_r['newsurl']?>">首页</a>
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
							<a href="<?=$public_r['newsurl']?>catalog/">更多&raquo;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-wrap">
			<div class="content">
				<div class="path"><?=$url?></div>
				<div class="account layout clearfix">
					<div class="sidebar">
						<?php
						if($tmgetuserid)	//已登录
						{
						?>
						<div class="account-mod">
							<h3>帐号中心</h3>
							<ul>
								<li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/">修改资料</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/EditInfo/EditSafeInfo.php">修改密码/邮箱</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/fava/">我的收藏夹</a></li>
							</ul>
						</div>
						<div class="account-mod">
							<h3>消息中心</h3>
							<ul>
								<li><a href="<?=$public_r['newsurl']?>e/member/msg/AddMsg/?enews=AddMsg">发消息给站长</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/msg/">消息列表</a></li>
							</ul>
						</div>
						<div class="account-mod">
							<h3>财务中心</h3>
							<ul>
								<li><a href="<?=$public_r['newsurl']?>e/member/buygroup/">在线充值</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/buybak/">充值记录</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/downbak/">下载消费记录</a></li>
							</ul>
						</div>
						<?php
						}
						else	//游客
						{
						?>
						<div class="account-mod">
							<h3>帐号</h3>
							<ul>
								<li><a href="<?=$public_r['newsurl']?>e/member/login/">登录</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/register/index.php?groupid=1">注册</a></li>
								<li><a href="<?=$public_r['newsurl']?>e/member/GetPassword/">找回密码</a></li>
							</ul>
						</div>
						<?php
						}
						?>
					</div>