<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='收藏夹';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;收藏夹";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>收藏夹</h3>
		<div class="mod-bd">
			<form>
		        <div class="field field-large">
		            <div class="ipt clearfix" style="display: block;">
		                <span class="pull-left">
		                	选择分类：
		                	<select name="cid" id="select" onchange=window.location='../fava/?cid='+this.options[this.selectedIndex].value>
		                		<option value="0">显示全部</option>
		                		<?=$select?>
		                	</select>
		                </span>
		                <span class="pull-right">
		                	<a href="FavaClass/" class="ml20">[管理分类]</a>
		                </span>
		            </div>
		        </div>
		    </form>
		   	<form name="favaform" method="post" action="../doaction.php" onsubmit="return confirm('确认要操作?');">
		   	<input type="hidden" value="DelFava_All" name="enews">
		   	<table class="table fav-list mt20">
		   		<colgroup>
		   			<col width="10%" />
		   			<col width="15%" />
		   			<col width="40%" />
		   			<col width="8%" />
		   			<col width="17%" />
		   		</colgroup>
				<tr>
					<th>选择</th>
					<th>收藏分类</th>
					<th>收藏内容</th>
					<th>点击</th>
					<th>收藏时间</th>
				</tr>
			<?php
			while($fr=$empire->fetch($sql))
			{
				if(empty($class_r[$fr[classid]][tbname]))
				{continue;}
				$r=$empire->fetch1("select title,isurl,titleurl,onclick,classid,id from {$dbtbpre}ecms_".$class_r[$fr[classid]][tbname]." where id='$fr[id]' limit 1");
				$rc=$empire->fetch1("select cname from {$dbtbpre}enewsfavaclass where cid='$fr[cid]'");
				//标题链接
				$titlelink=sys_ReturnBqTitleLink($r);
				if(!$r['id'])
				{
					$r['title']="此信息已删除";
					$titlelink="#EmpireCMS";
				}
				if(!$rc['cname'])
				{
					$rc['cname']="默认分类";
				}
			?>
				<tr>
					<td>
						<input name="favaid[]" type="checkbox" id="favaid[]2" value="<?=$fr[favaid]?>" /> 
					</td>
					<td><?=$rc[cname]?></td>
					<td>
						<a href="<?=$titlelink?>" target=_blank><?=stripSlashes($r[title])?></a>
					</td>
					<td><?=$r[onclick]?></td>
					<td><?=$fr[favatime]?></td>
				</tr>
			<?php
			}
			?>
				<tr>
					<td colspan="5">
						<?=$returnpage?>
						<select name="cid">
							<option value="0">请选择要转移的目标分类</option>
							<?=$select?>
						</select>
						<button type="submit" class="btn btn-blue btn-smaller" onclick="document.favaform.enews.value='MoveFava_All'">转移选中</button>
						<button type="submit" class="btn btn-gray btn-smaller" onclick="document.favaform.enews.value='DelFava_All'">删除选中</button>
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