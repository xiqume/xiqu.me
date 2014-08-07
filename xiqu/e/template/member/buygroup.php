<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='在线充值';
$url="<a href='../../../'>首页</a>&nbsp;>&nbsp;<a href='../cp/'>会员中心</a>&nbsp;>&nbsp;在线充值";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>在线充值</h3>
		<div class="mod-bd">
			<form name="payform" method="post" action="../../payapi/BuyGroupPay.php">
		        <div class="field field-large">
		            <div class="label">
		                <label>充值类型：</label>
		            </div>
		            <div class="ipt">
		                <div class="pay-type">
    <?
  while($r=$empire->fetch($sql))
  {
	  if($r[buygroupid]&&$level_r[$r[buygroupid]][level]>$level_r[$user[groupid]][level])
	  {
		  continue;
	  }
  ?>
		                	<div class="pay-type-item">
		                		<input type="radio" name="money" id="type<?=$r[id]?>" name="id" value="<?=$r[id]?>" />
		                		<label for="type<?=$r[id]?>">
		                			<?=$r[gmoney]?>元（<?=$r[gname]?>）<br /><em><?=nl2br($r[gsay])?></em>
		                		</label>
		                	</div>
    <?
  }
  ?>
		                </div>
		            </div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>充值平台：</label>
		            </div>
		            <div class="ipt">
		                <span>
			                <select name="payid">
			                <?=$pays?>
			                </select>
		                </span>
		            </div>
		        </div>
		        <div class="field field-large mt20">
		            <div class="label">
		                <label></label>
		            </div>
		            <div class="ipt">
		                <button class="btn btn-blue" type="submit">立即充值</button>
		            </div>
		        </div>
		        <div class="field">
		            <div class="label">
		                <label></label>
		            </div>
		            <div class="ipt">
		                <span>
		                	<strong>充值前必看：</strong>
		                	<a href="#" class="text-warning mr5">支付宝充值下载点数图文步骤</a>
		                	<a href="#" class="text-warning">网银卡/信用卡充值下载点数图文步骤</a>
		                </span>
		            </div>
		        </div>
		    </form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>