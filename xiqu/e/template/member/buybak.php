<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='充值记录';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;充值记录";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>充值记录</h3>
		<div class="mod-bd">
	        <table class="table">
				<tr>
					<th>类型</th>
					<th>充值卡号</th>
					<th>充值金额</th>
					<th>购买点数</th>
					<th>购买时间</th>
				</tr>
		<?php
		while($r=$empire->fetch($sql))
		{
			//类型
			if($r['type']==0)
			{
				$type='点卡充值';
			}
			elseif($r['type']==1)
			{
				$type='在线充值';
			}
			elseif($r['type']==2)
			{
				$type='充值点数';
			}
			elseif($r['type']==3)
			{
				$type='充值金额';
			}
			else
			{
				$type='';
			}
		?>
				<tr>
					<td><?=$type?></td>
					<td><?=$r[card_no]?></td>
					<td><?=$r[money]?></td>
					<td><?=$r[cardfen]?></td>
					<td><?=$r[buytime]?></td>
				</tr>
        <?php
		}
		?>

	        </table>
<?=$returnpage?>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>