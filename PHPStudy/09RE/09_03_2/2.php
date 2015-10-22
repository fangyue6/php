<?php
/*	$reg = '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/';
	$reg = '/\w+([+-.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)* /i';

 *  分割、匹配、查找、替换
 *
 *  1. 字符串处理函数 (处理快， 但有一些做不到)
 *
 *  2.2. 正则表达式函数  (功能强大，但效率要低)
 *
 *
 *  注意：如果可以直接使用字符串处理函数处理的字符串，就不要使用正则处理
 *
 *
 *  
 * 匹配查找:
 *
 * 	strstr  strpos substr
 *
 *
 * 正则匹配查找
 *
 * 	preg_match()   preg_match_all()   preg_grep();
 *
 */
	header("Content-Type:text/html;charset=utf-8");
?>

<?php
	if(isset($_POST['dosubmit'])) {
		if(!preg_match("/^\S+$/",$_POST['username'])) {
			echo "用户名为空，不成!<br>";
			//return;
		}


		if(!preg_match("/\w+([+-.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/i", $_POST['email'])) {
			echo "不是正确的email格式";
			//return ;
		}

		if(!preg_match( '/(https?|ftps?):\/\/(www|mail|bbs|ftp)\.(.*?)\.(net|com|org|cn)([\w-\.\/\=\?\&\%]*)?/', $_POST['url'])) {
			echo "不是正确的url格式";
			//retrun ;
		}
	
	}

?>

<!--action不写提交给自己-->
<form action="" method="post">
	username: <input type="text" name="username" value="" /><br>
	email: <input type="text" name="email" value="" /><br>
	url: <input type="text" name="url" value="" /> <br>

	<input type="submit" name="dosubmit" value="submit"> <br>
</form>
