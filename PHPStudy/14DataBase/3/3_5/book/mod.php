<?php 

	include "header.php";


	if(isset($_GET['action']) && $_GET['action']=="mod") {
		//获取要修改的哪一条数据
		$sql = "select id, bookname, publisher, author, price, pic, detail from books where id='{$_GET['id']}'";

	
		$result = mysql_query($sql);
	
		if(mysql_num_rows($result)> 0 ) {

			list($id, $bookname, $publisher, $author, $price, $pic, $detail) = mysql_fetch_row($result);
		}else{
			echo "没有对应的数据!<br>";
		}
	}

	//修改数据库中的数据
	if(isset($_POST['dosubmit'])) {
		//全部字段都要修改
		$sql = "update books set bookname='{$_POST['bookname']}', publisher='{$_POST['publisher']}', author='{$_POST['author']}', price='{$_POST['price']}', pic='{$_POST['pic']}', detail='{$_POST['detail']}' where id='{$_POST['id']}'";

		$result = mysql_query($sql);

		if($result && mysql_affected_rows() > 0) {
			echo "修改成功!<br>";
		}else{
			echo "修改失败!<br>";
		}
	
	}

?>
<h3>修改图书</h3>

<form action="mod.php" method="post">
	   <input type="hidden" name="id" value="<?php echo $id ?>" />	
图书名称： <input type="text" name="bookname" value="<?php echo $bookname ?>" /> <br>
出版社:    <input type="text" name="publisher" value="<?php echo $publisher ?>" /> <br>
作者:      <input type="text" name="author" value="<?php echo $author  ?>" /> <br>
价格：     <input type="text" name="price" value="<?php echo $price ?>" /><br>
图片：     <input type="file" name="pic" value="<?php echo $pic  ?>" /><br> 
描述：    <textarea cols="40" rows="5" name="detail"><?php echo $detail  ?></textarea><br>

	<input type="submit" name="dosubmit" value="修改"><br>

</form>


<?php include "footer.php"; ?>

