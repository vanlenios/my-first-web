<?php $useragent = $_SERVER ['HTTP_USER_AGENT'];
if (preg_match('/AhrefsBot/',$useragent)){
wp_redirect('http://google.com');
exit();
}
?>