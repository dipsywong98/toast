<?xml version="1.0" encoding="gbk"?>
<root><![CDATA[
<div id="main_messaqge_LmRYN">
<div id="layer_login_LmRYN">
<h3 class="flb">
<em id="returnmessage_LmRYN">
您需要先登录才能继续本操作</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('', 0, 1);" title="关闭">关闭</a></span>
</h3>
<form method="post" autocomplete="off" name="login" id="loginform_LmRYN" class="cl" onsubmit="pwmd5('password3_LmRYN');pwdclear = 1;ajaxpost('loginform_LmRYN', 'returnmessage_LmRYN', 'returnmessage_LmRYN', 'onerror');return false;" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;loginhash=LmRYN">
<div class="c cl">
<input type="hidden" name="formhash" value="e52f8daa" />
<input type="hidden" name="referer" value="http://luanboshiysclub.com/static/js/home.js?7zj" />
<div class="rfm">
<table>
<tr>
<th>
<span class="login_slct">
<select name="loginfield" style="float: left;" width="45" id="loginfield_LmRYN">
<option value="username">用户名</option>
<option value="uid">UID</option>
<option value="email">Email</option>
</select>
</span>
</th>
<td><input type="text" name="username" id="username_LmRYN" autocomplete="off" size="30" class="px p_fre" tabindex="1" value="" /></td>
<td class="tipcol"><a href="member.php?mod=registerr">请用中文注册</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="password3_LmRYN">密码:</label></th>
<td><input type="password" id="password3_LmRYN" name="password" onfocus="clearpwd()" size="30" class="px p_fre" tabindex="1" /></td>
<td class="tipcol"><a href="javascript:;" onclick="display('layer_login_LmRYN');display('layer_lostpw_LmRYN');" title="找回密码">找回密码</a></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th>安全提问:</th>
<td><select id="loginquestionid_LmRYN" width="213" name="questionid" onchange="if($('loginquestionid_LmRYN').value > 0) {$('loginanswer_row_LmRYN').style.display='';} else {$('loginanswer_row_LmRYN').style.display='none';}">
<option value="0">安全提问(未设置请忽略)</option>
<option value="1">母亲的名字</option>
<option value="2">爷爷的名字</option>
<option value="3">父亲出生的城市</option>
<option value="4">您其中一位老师的名字</option>
<option value="5">您个人计算机的型号</option>
<option value="6">您最喜欢的餐馆名称</option>
<option value="7">驾驶执照最后四位数字</option>
</select></td>
</tr>
</table>
</div>
<div class="rfm" id="loginanswer_row_LmRYN"  style="display:none">
<table>
<tr>
<th>答案:</th>
<td><input type="text" name="answer" id="loginanswer_LmRYN" autocomplete="off" size="30" class="px p_fre" tabindex="1" /></td>
</tr>
</table>
</div>

<input name="sechash" type="hidden" value="SA4oirIO0" />

<div class="rfm"><table><tr><th>验证码: </th><td><input name="seccodeverify" id="seccodeverify_SA4oirIO0" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec('code', 'SA4oirIO0')" tabindex="1" />
<a href="javascript:;" onclick="updateseccode('SA4oirIO0');doane(event);" class="xi2">换一个</a>
<span id="checkseccodeverify_SA4oirIO0"><img src="static/image/common/none.gif" width="16" height="16" class="vm" /></span>
<br /><span id="seccode_SA4oirIO0"></span>
<script type="text/javascript" reload="1">updateseccode('SA4oirIO0');</script>
</td></tr></table></div>



<div class="rfm  bw0">
<table>
<tr>
<th></th>
<td><label for="cookietime_LmRYN"><input type="checkbox" class="pc" name="cookietime" id="cookietime_LmRYN" tabindex="1" value="2592000"  />自动登录</label></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table width="100%">
<tr>
<th>&nbsp;</th>
<td>
<button class="pn pnc" type="submit" name="loginsubmit" value="true" tabindex="1"><strong>登录</strong></button>
</td>
<td>
</td>
</tr>
</table>
</div>

</div>
</form>
</div>
<div id="layer_lostpw_LmRYN" style="display: none;">
<h3 class="flb">
<em id="returnmessage3_LmRYN">找回密码</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="关闭">关闭</a></span>
</h3>
<form method="post" autocomplete="off" id="lostpwform_LmRYN" class="cl" onsubmit="ajaxpost('lostpwform_LmRYN', 'returnmessage3_LmRYN', 'returnmessage3_LmRYN', 'onerror');return false;" action="member.php?mod=lostpasswd&amp;lostpwsubmit=yes&amp;infloat=yes">
<div class="c cl">
<input type="hidden" name="formhash" value="e52f8daa" />
<input type="hidden" name="handlekey" value="lostpwform" />
<div class="rfm">
<table>
<tr>
<th><span class="rq">*</span><label for="lostpw_email">Email:</label></th>
<td><input type="text" name="email" id="lostpw_email" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>
<div class="rfm">
<table>
<tr>
<th><label for="lostpw_username">用户名:</label></th>
<td><input type="text" name="username" id="lostpw_username" size="30" value=""  tabindex="1" class="px p_fre" /></td>
</tr>
</table>
</div>

<div class="rfm mbw bw0">
<table>
<tr>
<th></th>
<td><button class="pn pnc" type="submit" name="lostpwsubmit" value="true" tabindex="100"><span>提交</span></button></td>
</tr>
</table>
</div>
</div>
</form>
</div>
</div>

<div id="layer_message_LmRYN" style="display: none;">
<h3 class="flb" id="layer_header_LmRYN">
<em>用户登录</em>
<span><a href="javascript:;" class="flbc" onclick="hideWindow('login')" title="关闭">关闭</a></span>
</h3>
<div class="c"><div class="alert_right">
<div id="messageleft_LmRYN"></div>
<p class="alert_btnleft" id="messageright_LmRYN"></p>
</div>
</div>

<script type="text/javascript" reload="1">
var pwdclear = 0;
function initinput_login() {
document.body.focus();
if($('loginform_LmRYN')) {
$('loginform_LmRYN').username.focus();
}
simulateSelect('loginfield_LmRYN');
}
initinput_login();
showPrompt('custominfo_login_LmRYN', 'mouseover', '欢迎回来', 3000);

function clearpwd() {
if(pwdclear) {
$('password3_LmRYN').value = '';
}
pwdclear = 0;
}
</script>]]></root>