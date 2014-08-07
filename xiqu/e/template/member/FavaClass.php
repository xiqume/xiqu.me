<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='管理收藏夹分类';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../fava/>管理收藏夹分类</a>&nbsp;>&nbsp;管理分类";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<script>
function DelFavaClass(cid)
{
var ok;
ok=confirm("确认要删除?");
if(ok)
{
self.location.href='../../doaction.php?enews=DelFavaClass&cid='+cid;
}
}
</script>
<div class="main">
	<div class="account-mod">
		<h3>管理收藏夹分类</h3>
		<div class="mod-bd">
			<form name="form1" method="post" action="../../doaction.php">
		        <div class="field field-large">
		            <div class="label">
		                <label>添加分类：</label>
		            </div>
		            <div class="ipt">
		                <input name="enews" type="hidden" id="enews" value="AddFavaClass">
		                <input type="text" class="ipt-text ipt-text-large" name="cname" id="cname" />
		                <button class="btn btn-blue btn-larger" type="submit">增加</button>
		            </div>
		        </div>
		    </form>
		   	<table class="table fav-type">
		   		<colgroup>
		   			<col width="10%" />
		   			<col width="70" />
		   			<col width="20" />
		   		</colgroup>
				<tr>
					<th>ID</th>
					<th>分类名称</th>
					<th>操作</th>
				</tr>
				<?php
				while($r=$empire->fetch($sql))
				{
				?>
				<form name="form" method="post" action="../../doaction.php">
				<tr>
					<td><?=$r[cid]?></td>
					<td>
						<input name="enews" type="hidden" id="enews" value="EditFavaClass">
						<input name="cid" type="hidden" value="<?=$r[cid]?>">
						<input type="text" class="ipt-text ipt-text-small" name="cname" value="<?=$r[cname]?>" />
					</td>
					<td>
						<button class="btn btn-blue btn-smaller" type="submit">修改</button>
						<button class="btn btn-gray btn-smaller" type="button" onclick="javascript:DelFavaClass(<?=$r[cid]?>);">删除</button>
					</td>
				</tr>
				</form>
				<?php
				}
				?>
		   	</table>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>