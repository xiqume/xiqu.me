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
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>" />
<meta name="description" content="<?=$grpagetitle?>" />
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">

<link rel="stylesheet" media="all" type="text/css" href="/skin/xiqu/css/main.css" />
<script type="text/javascript" src="//libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript" src="/skin/xiqu/js/core.js"></script>
<title><?=$grpagetitle?></title>
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
			<a href="#">设为首页</a>
			<a href="#">加入收藏</a>
			<a href="#">帮助中心</a>
			<a href="#">网站地图</a>
		</div>
	</div>
</div>
<div class="header-wrap">
	<div class="header">
		<div class="header-main clearfix">
			<div class="logo pull-left">
				<a href="#"><img src="/skin/xiqu/img/logo.jpg" /></a>
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
					<a href="#">首页</a>
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
					<a href="#">更多&raquo;</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content-wrap">
	<div class="content">
		<div class="path">
			<?=$grurl?> &gt; <strong><?=$ecms_gr[title]?>下载</strong>
		</div>
		<div class="layout clearfix">
			<div class="main">
				<div class="main-content content-download">
					<div class="figure">
						<img src="<?=empty($ecms_gr[titlepic])?$public_r[newsurl].'e/data/images/notimg.gif':$ecms_gr[titlepic]?>" />
					</div>
					<div class="detail">
						<h1><?=$ecms_gr[title]?></h1>
						<div class="meta">
							<p><strong>[压缩包大小]</strong>：<?=$ecms_gr[filesize]?></p>
						</div>
						<div class="act">
							<p>
								<a href="/e/member/fava/add/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">[加入收藏]</a>
								<a href="/e/public/report/?classid=<?=$ecms_gr[classid]?>&amp;id=<?=$ecms_gr[id]?>">[报告错误]</a>
							</p>
						</div>
						<div class="intro">
							<p><strong>[内容介绍]</strong>：</p>
							<?=nl2br($ecms_gr[softsay])?>
						</div>
						<div class="download">
							<p class="tip"><strong>下载注意：</strong>压缩包需要解压密码才可以使用，请务必先下载解压密码，否则白白浪费时间！</p>
							<p class="download-address">
								 <?=ReturnDownSoftHtml($ecms_gr)?>
							</p>
						</div>
						<div class="similar">
							<h4>相关下载</h4>
							<ul>
								<?=GetKeyboard($ecms_gr[keyboard],$ecms_gr[keyid],$ecms_gr[classid],$ecms_gr[id],$class_r[$ecms_gr[classid]][link_num])?>
							</ul>
						</div>
					</div>
				</div>
				<div class="mod comment">
		        	<div class="mod-hd">
		        		<h3 class="mod-title">评论</h3>
		        	</div>
		        	<div class="mod-bd">
		        		<!-- 多说评论框 start -->
	<div class="ds-thread" data-category="<?=$ecms_gr[classid]?>" data-thread-key="<?=$ecms_gr[classid]?>_<?=$ecms_gr[id]?>" data-title="<?=$ecms_gr[title]?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"xiqume"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
		        	</div>
				</div>
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
		        		<h3 class="mod-title"><?=$class_r[$ecms_gr[classid]][classname]?>下载排行</h3>
		        	</div>
		        	<div class="mod-bd">
		        		<ul class="text-list">
		        			<script src='/d/js/class/class<?=$ecms_gr[classid]?>_hotnews.js'></script>
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