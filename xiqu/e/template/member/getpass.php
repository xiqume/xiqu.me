<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='重设密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;重设密码";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>重设密码</h3>
		<div class="mod-bd">
			<form name="GetPassForm" method="POST" action="../doaction.php">
			<input name="enews" type="hidden" id="enews" value="DoGetPassword">
			<input name="id" type="hidden" id="id" value="<?=$r[id]?>">
			<input name="tt" type="hidden" id="tt" value="<?=$r[tt]?>">
			<input name="cc" type="hidden" id="cc" value="<?=$r[cc]?>">
		        <div class="field field-large">
		            <div class="label">
		                <label>用户名：</label>
		            </div>
		            <div class="ipt">
		                <span><?=$username?></span>
		            </div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>新密码：</label>
		            </div>
		            <div class="ipt">
		                <input type="password" class="ipt-text ipt-text-large" name="newpassword" />
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>确认新密码：</label>
		            </div>
		            <div class="ipt">
		                <input type="password" class="ipt-text ipt-text-large" name="renewpassword" />
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
<br>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>