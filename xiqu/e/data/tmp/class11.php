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
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="stylesheet" media="all" type="text/css" href="/skin/xiqu/css/main.css" />
<script type="text/javascript" src="//libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="/skin/xiqu/js/core.js"></script>
<title>秦腔</title>
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
			<a href="/index.html">首页</a>&nbsp;>&nbsp;<a href="/qinqiang/">秦腔</a>
		</div>
		<div class="layout clearfix">
			<div class="main">
				<? @sys_ForSonclassData('selfinfo',10,100,0,0,13,0,0);?>
			</div>
			<div class="sidebar">
				<div class="mod mod-commend">
					<div class="mod-hd">
		        		<h3 class="mod-title">推荐下载</h3>
		        	</div>
					<div class="mod-bd">
		        		<ul class="img-list clearfix">
		        			<? @sys_GetEcmsInfo('selfinfo',4,100,0,2,15,1);?>
		        		</ul>
					</div>
				</div>
				<div class="mod mod-article">
		        	<div class="mod-hd">
		        		<h3 class="mod-title">戏曲介绍</h3>
		        		<span class="more"><a href="#">更多&raquo;</a></span>
		        	</div>
		        	<div class="mod-bd">
		        		<ul class="text-list">
		        			<? @sys_GetEcmsInfo('article',10,100,0,18,14,0);?>
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