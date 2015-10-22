<?php

	//所有客户端访问时自动将所有这个网站的cookie都代过来(全局数组)$_COOKIE


//	print_r($_COOKIE);

	//删除cookie也是使用setCookie()这个函数, 只要设置时间为以前或现在的时间,让这个变量在客户端过期就可以了， 这个变量客户端就用不了了.
	setcookie("username", "", time()-3600);
	//setcookie("sex", "", time()-3600);
	setcookie("lx[phone]", "", time()-3600);
	setcookie("lx[email]", "", time()-3600);
	setcookie("arr[0]", "", time()-3600);
	setcookie("arr[1]", "", time()-3600);
	
