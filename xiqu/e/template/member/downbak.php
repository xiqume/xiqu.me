<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='消费记录';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;消费记录";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>下载消费记录</h3>
		<div class="mod-bd">
	        <table class="table">
	        	<colgroup>
	        		<col width="60%" />
	        		<col width="10%" />
	        		<col width="30%" />
	        	</colgroup>
				<tr>
					<th>下载内容</th>
					<th>扣除点数</th>
					<th>下载时间</th>
				</tr>
	<?php
	while($r=$empire->fetch($sql))
	{
		if(empty($class_r[$r[classid]][tbname]))
		{continue;}
		$nr=$empire->fetch1("select title,isurl,titleurl,classid from {$dbtbpre}ecms_".$class_r[$r[classid]][tbname]." where id='$r[id]' limit 1");
		//标题链接
		$titlelink=sys_ReturnBqTitleLink($nr);
		if(!$nr['classid'])
		{
			$nr['title']="此信息已删除";
			$titlelink="#EmpireCMS";
		}
		if($r['online']==0)
		{
			$type='下载';
		}
		elseif($r['online']==1)
		{
			$type='观看';
		}
		elseif($r['online']==2)
		{
			$type='查看';
		}
		elseif($r['online']==3)
		{
			$type='发布';
		}
	?>
				<tr>
					<td>
						<a href='<?=$titlelink?>' target='_blank'><?=$r[title]?></a>
					</td>
					<td><?=$r[cardfen]?></td>
					<td><?=date("Y-m-d H:i:s",$r[truetime])?></td>
				</tr>
          <?
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