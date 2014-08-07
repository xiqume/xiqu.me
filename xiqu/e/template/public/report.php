<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='提交错误报告';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href='".$titleurl."'>".$r[title]."</a>&nbsp;>&nbsp;提交错误报告";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>提交错误报告</h3>
		<div class="mod-bd">
			<form name="form1" method="post" action="../../enews/index.php">
			<input type="hidden" name="cid" value="<?=$cid?>">
			<input name="enews" type="hidden" id="enews" value="AddError">
			<input name="id" type="hidden" id="id" value="<?=$id?>">
			<input name="classid" type="hidden" id="classid" value="<?=$classid?>">
		        <div class="field field-large">
		            <div class="label">
		                <label>信息标题：</label>
		            </div>
		            <div class="ipt">
		                <span><a href='<?=$titleurl?>' target=_blank><?=$r[title]?></a></span>
		            </div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>您的邮箱：</label>
		            </div>
		            <div class="ipt">
		                <input type="text" class="ipt-text ipt-text-large" name="email" />
		            </div>
		            <div class="tips">方便回复您</div>
		        </div>
		        <div class="field field-large field-textarea">
		            <div class="label">
		                <label><em class="text-warning">*</em>报告内容：</label>
		            </div>
		            <div class="ipt">
		                <textarea class="ipt-text" style="height:100px; width: 400px" name="errortext"></textarea>
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