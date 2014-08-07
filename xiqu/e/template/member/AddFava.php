<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='增加收藏夹';
$url="<a href=../../../../>首页</a>&nbsp;>&nbsp;<a href=../../cp/>会员中心</a>&nbsp;>&nbsp;<a href=../../fava/>增加收藏夹</a>&nbsp;>&nbsp;增加收藏夹";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="main">
	<div class="account-mod">
		<h3>增加收藏夹</h3>
		<div class="mod-bd">
			<form name="form1" method="post" action="../../doaction.php">
			<input name="enews" type="hidden" id="enews" value="AddFava">
			<input name="from" type="hidden" id="from2" value="<?=$from?>">
			<input name="classid" type="hidden" id="classid2" value="<?=$classid?>">
			<input name="id" type="hidden" id="id2" value="<?=$id?>">
		        <div class="field field-large">
		            <div class="label">
		                <label>收藏页面：</label>
		            </div>
		            <div class="ipt">
		                <span><a href='<?=$titleurl?>' target=_blank><?=stripSlashes($r[title])?></a></span>
		            </div>
		        </div>
		        <div class="field field-large">
		            <div class="label">
		                <label>选择收藏分类：</label>
		            </div>
		            <div class="ipt">
		                <span>
		                	<select name="cid" id="select">
		                		<option value="0">默认分类</option>
		                		<?=$select?>
		                	</select>
		                	<a href="../FavaClass/" target="_blank">[新建分类]</a>
		                </span>
		            </div>
		        </div>
		        <div class="field field-large mt20">
		            <div class="label">
		                <label></label>
		            </div>
		            <div class="ipt">
		                <button class="btn btn-blue" type="submit">收藏</button>
		            </div>
		        </div>
		    </form>
		</div>
	</div>
</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>