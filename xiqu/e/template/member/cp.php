<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员中心';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>";
require(ECMS_PATH.'e/template/incfile/header.php');
?>

<div class="main">
	<div class="account-mod">
		<h3>用户资料</h3>
		<div class="mod-bd">
	        <div class="field field-large">
	            <div class="label">
	                <label>用户ID：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$user[userid]?></span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>用户名：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$user[username]?></span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>注册时间：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$registertime?></span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>会员等级：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$level_r[$r[groupid]][groupname]?></span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>剩余有效期：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$userdate?> 天</span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>剩余点数：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$r[userfen]?> 点</span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>帐号余额：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$r[money]?> 元</span>
	            </div>
	        </div>
	        <div class="field field-large">
	            <div class="label">
	                <label>新消息：</label>
	            </div>
	            <div class="ipt">
	                <span><?=$havemsg?></span>
	            </div>
	        </div>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>