<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='修改密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改密码";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>修改密码</h3>
		<div class="mod-bd">
			<form name="userinfoform" method="post" enctype="multipart/form-data" action="../doaction.php">
			<input type="hidden" name="enews" value="EditSafeInfo">
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
		                <label>原密码：</label>
		            </div>
		            <div class="ipt">
		                <input type="password" class="ipt-text ipt-text-large" name="oldpassword" id="oldpassword" />
		            </div>
		            <div class="tips">(修改密码或邮箱时需要密码验证)</div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>新密码：</label>
		            </div>
		            <div class="ipt">
		                <input type="password" class="ipt-text ipt-text-large" name="password" id="password" />
		            </div>
		            <div class="tips">(不想修改请留空)</div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>确认新密码：</label>
		            </div>
		            <div class="ipt">
		                <input type="password" class="ipt-text ipt-text-large" name="repassword" id="repassword" />
		            </div>
		            <div class="tips">(不想修改请留空)</div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>邮箱：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="email" id="email" value="<?=$user[email]?>" />
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large smt">
		            <div class="label">
		            </div>
		            <div class="ipt">
		                <button type="submit" class="btn btn-blue btn-larger">提交</button>
		            </div>
		        </div>
			</form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>