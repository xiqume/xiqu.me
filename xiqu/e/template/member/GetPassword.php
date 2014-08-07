<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='找回密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;找回密码";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>找回密码</h3>
		<div class="account-form reset-mod">
			<form name="GetPassForm" method="post" action="../doaction.php">
			<input name="enews" type="hidden" id="enews" value="SendPassword">
		        <div class="field field-large">
		            <div class="label">
		                <label><em>*</em>用户名：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="username" />
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label><em>*</em>邮箱：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="email" />
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large vcode">
		            <div class="label">
		                <label><em>*</em>验证码：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="key" />
		                <img src="../../ShowKey/?v=getpassword" originSrc="../../ShowKey/?v=getpassword" id="vcodeImg" onclick="$('#vcodeChange').click();">
		                <a href="javascript:;" id="vcodeChange" onclick="$('#vcodeImg').attr('src', $('#vcodeImg').attr('originSrc') + '&_t=' + Math.random());">看不清楚换一个</a>
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large smt">
		            <div class="label">
		            </div>
		            <div class="ipt">
		                <button type="submit" class="btn btn-blue btn-larger">提交</button></span>
		            </div>
		            <div class="tips"></div>
		        </div>
			</form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>