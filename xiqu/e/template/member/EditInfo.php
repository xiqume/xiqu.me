<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='修改资料';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;修改资料";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>修改资料</h3>
		<div class="mod-bd">
			<form name="userinfoform" method="post" enctype="multipart/form-data" action="../doaction.php">
			<input type="hidden" name="enews" value="EditInfo" />
		        <div class="field field-large">
		            <div class="label">
		                <label>用户名：</label>
		            </div>
		            <div class="ipt">
		                <span><?=$user[username]?></span>
		            </div>
		        </div>
		        <?php
		        @include($formfile);
		        ?>
		        <div class="field field-large smt">
		            <div class="label">
		            </div>
		            <div class="ipt">
		                <button type="submit" class="btn btn-blue btn-larger" name="Submit">提交</button>
		            </div>
		        </div>
			</form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>