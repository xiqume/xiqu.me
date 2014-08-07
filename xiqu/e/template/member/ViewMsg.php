<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='查看消息';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../msg/>消息列表</a>&nbsp;>&nbsp;查看消息";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>查看消息</h3>
		<div class="mod-bd">
			<form>
		        <div class="field field-large">
		            <div class="label">
		                <label>标题：</label>
		            </div>
		            <div class="ipt">
		                <span><?=stripSlashes($r[title])?></span>
		            </div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>发送人：</label>
		            </div>
		            <div class="ipt">
		                <span><?=$r[from_username]?></span>
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>发送时间：</label>
		            </div>
		            <div class="ipt">
		                <span><?=$r[msgtime]?></span>
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large msg-content">
		            <div class="label">
		                <label>内容：</label>
		            </div>
		            <div class="ipt">
		                <span>
		                	<?=nl2br(stripSlashes($r[msgtext]))?>
		                </span>
		            </div>
		            <div class="tips"></div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		            </div>
		            <div class="ipt">
		                <a href="../" class="mr10">[返回]</a>
		                <a href="../AddMsg/?enews=AddMsg&re=1&mid=<?=$mid?>" class="mr10">[回复]</a>
		                <a href="../../doaction.php?enews=DelMsg&mid=<?=$mid?>" onclick="return confirm('确认要删除?');" class="mr10">[删除]</a>
		            </div>
		        </div>
			</form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>