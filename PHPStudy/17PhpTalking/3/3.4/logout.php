<?php
header("Content-type: text/html; charset=utf-8");
	$username = $_COOKIE['username'];

	//删除每一个
	setCookie("id", "", time()-3600, "/");
	setCookie("username", "", time()-3600, "/");
	setCookie("allow_1", "", time()-3600, "/");
	setCookie("allow_2", "", time()-3600, "/");
	setCookie("allow_3", "", time()-3600, "/");
	setCookie("isLogin", "", time()-3600, "/");

	echo "再见 {$username},稍后自动退出.....";

?>
	<script>
		setTimeout("location='login.php'", 3000);
	</script>
