<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='消息列表';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;消息列表&nbsp;&nbsp;(<a href='AddMsg/?enews=AddMsg'>发送消息</a>)";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>消息列表</h3>
		<div class="mod-bd">
		   	<form name="listmsg" method="post" action="../doaction.php" onsubmit="return confirm('确认要删除?');">
		   	<input name="enews" type="hidden" value="DelMsg_all">
		   	<table class="table fav-list mt20">
		   		<colgroup>
		   			<col width="10%" />
		   			<col width="40%" />
		   			<col width="15%" />
		   			<col width="20%" />
		   			<col width="10%" />
		   		</colgroup>
				<tr>
					<th>选择</th>
					<th>标题</th>
					<th>发送人</th>
					<th>发送时间</th>
					<th>操作</th>
				</tr>
			<?php
				while($r=$empire->fetch($sql))
				{
				$img="haveread";
				if(!$r[haveread])
				{$img="nohaveread";}
				//后台管理员
				if($r['isadmin'])
				{
					$from_username="<a title='后台管理员'><b>".$r[from_username]."</b></a>";
				}
				else
				{
					$from_username="<a href='../ShowInfo/?userid=".$r[from_userid]."' target='_blank'>".$r[from_username]."</a>";
				}
				//系统信息
				if($r['issys'])
				{
					$from_username="<b>系统消息</b>";
					$r[title]="<b>".$r[title]."</b>";
				}
			?>
				<tr>
					<td>
						<input name="mid[]" type="checkbox"  value="<?=$r[mid]?>">
					</td>
					<td>
						<img src="../../data/images/<?=$img?>.gif" border="0" /> <a href="ViewMsg/?mid=<?=$r[mid]?>"><?=stripSlashes($r[title])?></a>
					</td>
					<td>
						<?=$r[from_username]?>
					</td>
					<td><?=$r[msgtime]?></td>
					<td>
						<a href="../doaction.php?enews=DelMsg&mid=<?=$r[mid]?>" onclick="return confirm('确认要删除?');">删除</a>
					</td>
				</tr>
				<?php
				}
				?>
				<tr>
					<td colspan="5">
						<button class="btn btn-gray btn-smaller pull-left" type="submit">删除选中</button>
						<span class="pull-right">说明：<img src="../../data/images/nohaveread.gif" width="14" height="11" />代表未阅读消息， <img src="../../data/images/haveread.gif" width="15" height="12" />代表已阅读消息。</span>
					</td>
				</tr>
		   	</table>
		   	</form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>