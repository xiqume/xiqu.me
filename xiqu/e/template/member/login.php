<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='用户登录';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;用户登录";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
					<div class="main">
						<div class="account-mod">
							<h3>用户登录</h3>
							<div class="account-form reg-form">
								<form name="userinfoform" method="post" enctype="multipart/form-data" action="../doaction.php">
							        <input type="hidden" name="ecmsfrom" value="<?=ehtmlspecialchars($_GET['from'])?>">
							        <input type="hidden" name="enews" value="login">
							        <input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
							        <div class="field field-large">
							            <div class="label">
							                <label>用户名：</label>
							            </div>
							            <div class="ipt">
							                <input type="text" class="ipt-text ipt-text-large" name="username" id="username" />
							            </div>
							            <div class="tips"><?php if($public_r['regacttype']==1){ ?><a href="../register/regsend.php" target="_blank">帐号未激活？</a><?php }?></div>
							        </div>
							        <div class="field field-large">
							            <div class="label">
							                <label>密码：</label>
							            </div>
							            <div class="ipt">
							                <input type="password" class="ipt-text ipt-text-large" name="password" id="password" />
							            </div>
							            <div class="tips"><a href="../GetPassword/" target="_blank">忘记密码？</a></div>
							        </div>
							        <div class="field field-large">
							            <div class="label">
							                <label>保存时间：</label>
							            </div>
							            <div class="ipt">
							               <span>
								               <label><input name="lifetime" type="radio" value="0" checked> 不保存</label>&nbsp;&nbsp;
								               <label><input type="radio" name="lifetime" value="3600"> 一小时</label>&nbsp;&nbsp;
								               <label><input type="radio" name="lifetime" value="86400"> 一天</label>&nbsp;&nbsp;
								               <label><input type="radio" name="lifetime" value="2592000"> 一个月</label>&nbsp;&nbsp;
								               <label><input type="radio" name="lifetime" value="315360000"> 永久</label>&nbsp;&nbsp;
							               </span>
							            </div>
							            <div class="tips"></div>
							        </div>
							        <?php
							        @include($formfile);
							        ?>
							        <?
							        if($public_r['loginkey_ok'])
							        {
							        ?>
							        <div class="field field-large vcode">
							            <div class="label">
							                <label>验证码：</label>
							            </div>
							            <div class="ipt">
							                <input type="text" class="ipt-text ipt-text-large" name="key" id="key" />
							                <img src="../../ShowKey/?v=login" originSrc="../../ShowKey/?v=login" id="vcodeImg" onclick="$('#vcodeChange').click();">
							                <a href="javascript:;" id="vcodeChange" onclick="$('#vcodeImg').attr('src', $('#vcodeImg').attr('originSrc') + '&_t=' + Math.random());">看不清楚换一个</a>
							            </div>
							            <div class="tips"></div>
							        </div>
							        <?
							        }	
							        ?>
							        <div class="field field-large smt">
							            <div class="label">
							            </div>
							            <div class="ipt">
							                <button type="submit" class="btn btn-blue btn-larger" name="Submit">登录</button> <span>还没有账号，<a href="<?=$public_r['newsurl']?>e/member/register/index.php?groupid=1">立即注册</a></span>
							            </div>
							            <div class="tips"></div>
							        </div>
								</form>
							</div>
						</div>
					</div>
<?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?>