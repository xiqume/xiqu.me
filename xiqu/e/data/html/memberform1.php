<?php
if(!defined('InEmpireCMS'))
{exit();}
?><div class="field field-large">
    <div class="label">
        <label>手机：</label>
    </div>
    <div class="ipt">
        <input class="ipt-text ipt-text-large" name="phone" type="text" id="phone" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[phone]))?>" />

    </div>
    <div class="tips"></div>
</div>
<div class="field field-large">
    <div class="label">
        <label>QQ：</label>
    </div>
    <div class="ipt">
        <input class="ipt-text ipt-text-large" name="oicq" type="text" id="oicq" value="<?=$ecmsfirstpost==1?"":htmlspecialchars(stripSlashes($addr[oicq]))?>" />

    </div>
    <div class="tips"></div>
</div>