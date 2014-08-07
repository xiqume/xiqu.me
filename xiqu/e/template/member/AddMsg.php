<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='发送消息';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../msg/>消息列表</a>&nbsp;>&nbsp;发送消息";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<?php 
if(!$username){
$username="站长";
}
?>
<div class="main">
	<div class="account-mod">
		<h3>发消息给站长</h3>
		<div class="mod-bd">
			<form action="../../doaction.php" method="post" name="sendmsg" id="sendmsg">
			<input name="enews" type="hidden" id="enews" value="AddMsg">
		        <div class="field field-large">
		            <div class="label">
		                <label>标题：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="title" value="<?=ehtmlspecialchars(stripSlashes($title))?>" />
		            </div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>接收者：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="to_username" value="<?=$username?>" />
		            </div>
		            <div class="tips">不用更改，更改后站长收不到消息</div>
		        </div>
		        <div class="field field-large field-textarea">
		            <div class="label">
		                <label>内容：</label>
		            </div>
		            <div class="ipt">
		                <textarea class="ipt-text" style="height:100px; width: 400px" name="msgtext"><?=ehtmlspecialchars(stripSlashes($msgtext))?></textarea>
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large smt">
		            <div class="label">
		            </div>
		            <div class="ipt">
		                <button type="submit" class="btn btn-blue btn-larger">发送</button>
		            </div>
		        </div>
			</form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>