<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
	exit();
}
eCheckCloseMods('member');//关闭模块
$myuserid=(int)getcvar('mluserid');
$mhavelogin=0;
if($myuserid)
{
	include("../../class/db_sql.php");
	include("../../member/class/user.php");
	include("../../data/dbcache/MemberLevel.php");
	$link=db_connect();
	$empire=new mysqlquery();
	$mhavelogin=1;
	//数据
	$myusername=RepPostVar(getcvar('mlusername'));
	$myrnd=RepPostVar(getcvar('mlrnd'));
	$r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
	if(empty($r[userid])||$r[checked]==0)
	{
		EmptyEcmsCookie();
		$mhavelogin=0;
	}
	//会员等级
	if(empty($r[groupid]))
	{$groupid=eReturnMemberDefGroupid();}
	else
	{$groupid=$r[groupid];}
	$groupname=$level_r[$groupid]['groupname'];
	//点数
	$userfen=$r[userfen];
	//余额
	$money=$r[money];
	//天数
	$userdate=0;
	if($r[userdate])
	{
		$userdate=$r[userdate]-time();
		if($userdate<=0)
		{$userdate=0;}
		else
		{$userdate=round($userdate/(24*3600));}
	}
	//是否有短消息
	$havemsg="";
	if($r[havemsg])
	{
		$havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>您有新消息</font></a>";
	}
	//$myusername=$r[username];
	db_close();
	$empire=null;
}
if($mhavelogin==1)
{
?>
document.write("<div class=\"user-detail\">	<strong>欢迎您，<?=$myusername?></strong>	<a href=\"/e/member/cp/\">会员中心</a>	<a href=\"/e/member/fava/\" target=_blank>收藏夹</a>	<a href=\"/e/member/doaction.php?enews=exit&ecmsfrom=9\" onclick=\"return confirm(\'确认要退出?\');\">退出</a></div>");
<?
}
else
{
?>
document.write("<div class=\"login-form\">	<form action=\"/e/member/doaction.php\" method=\"post\">		<input type=hidden name=enews value=login>		<input type=hidden name=ecmsfrom value=9>		<div class=\"field  field-small\">	        <div class=\"label\">用户名：</div>	        <div class=\"ipt\">	            <input name=\"username\" type=\"text\" class=\"ipt-text ipt-text-small\" />	        </div>	    </div>		<div class=\"field  field-small\">	        <div class=\"label\">密码：</div>	        <div class=\"ipt\">	            <input name=\"password\" type=\"password\" class=\"ipt-text ipt-text-small\" />	        </div>	    </div>		<div class=\"field  field-small\">	        <div class=\"ipt\">	            <button class=\"btn btn-blue btn-smaller\" type=\"submit\">登录</button>	            <a href=\"/e/member/register/index.php?groupid=1\" class=\"btn btn-gray btn-smaller\">注册</a>	        </div>	    </div>	</form></div>");
<?
}
?>