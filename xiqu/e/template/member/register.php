<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='用户注册';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;用户注册";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
					<div class="main">
						<div class="account-mod">
							<h3>用户注册</h3>
							<div class="account-form reg-form">
								<form name="userinfoform" method="post" enctype="multipart/form-data" action="../doaction.php">
								<input name="enews" type="hidden" value="register" />
								<input name="groupid" type="hidden" id="groupid" value="<?=$groupid?>">
								<input name="tobind" type="hidden" id="tobind" value="<?=$tobind?>">
							        <div class="field field-large">
							            <div class="label">
							                <label><em>*</em>用户名：</label>
							            </div>
							            <div class="ipt">
							                <input type="text" class="ipt-text ipt-text-large" name="username" id="username" />
							            </div>
							            <div class="tips"></div>
							        </div>
							        <div class="field field-large">
							            <div class="label">
							                <label><em>*</em>密码：</label>
							            </div>
							            <div class="ipt">
							                <input type="password" class="ipt-text ipt-text-large" name="password" id="password" />
							            </div>
							            <div class="tips"></div>
							        </div>
							        <div class="field field-large">
							            <div class="label">
							                <label><em>*</em>确认密码：</label>
							            </div>
							            <div class="ipt">
							                <input type="password" class="ipt-text ipt-text-large" name="repassword" id="repassword" />
							            </div>
							            <div class="tips"></div>
							        </div>
							        <div class="field field-large">
							            <div class="label">
							                <label><em>*</em>邮箱：</label>
							            </div>
							            <div class="ipt">
							                <input type="text" class="ipt-text ipt-text-large" name="email" id="email" />
							            </div>
							            <div class="tips"></div>
							        </div>
							        <?php
							        @include($formfile);
							        ?>
							        <?
							        if($public_r['regkey_ok'])
							        {
							        ?>
							        <div class="field field-large vcode">
							            <div class="label">
							                <label>验证码：</label>
							            </div>
							            <div class="ipt">
							                <input type="text" class="ipt-text ipt-text-large" name="key" id="key" />
							                <img src="../../ShowKey/?v=reg" originSrc="../../ShowKey/?v=reg" id="vcodeImg" onclick="$('#vcodeChange').click();">
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
							                <button type="submit" class="btn btn-blue btn-larger" name="Submit">立即注册</button> <span>已有账号，<a href="<?=$public_r['newsurl']?>e/member/login/">立即登陆</a></span>
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