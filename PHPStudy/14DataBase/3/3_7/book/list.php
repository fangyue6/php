<?php
	include "header.php";
	//用户是否有动作
	if(isset($_GET['action'])) {
		//删除图书的动作
		if($_GET['action'] == "del") {
			//删除多个
			if(!empty($_POST['id'])) {
				$sql = "delete from books where id in(".implode(',', $_POST['id']).")";
			}else {
				//删除单个
				$sql = "delete from books where id='{$_GET['id']}'";
			}

			
			echo $sql."<br>";



			$result = mysql_query($sql);

			if($result && mysql_affected_rows() > 0) {
				//先从数据库中，通过id将表中的图片名称获取到，
				//
				//再删除

				
				echo "数据删除成功!<br>";


			} else {
				echo "数据删除失败!<br>";
			}	
		
		

		}
	
	}




	$sql = "select id, bookname, publisher, author, price, ptime from books order by id";

	
	$result = mysql_query($sql);

	echo '<form action="list.php?action=del" method="post" onsubmit="return confirm(\'你确定要删除这些图书吗?\')">';
	echo '<table border="1" width="900">';
	echo '<caption><h3>图书列表</h3></caption>';
	echo '<tr>';
	echo '<th>&nbsp;</th>';
	echo '<th>编号</th>';
	echo '<th>图书名称</th>';
	echo '<th>出版社</th>';
	echo '<th>作者</th>';
	echo '<th>价格</th>';
	echo '<th>添加时间</th>';
	echo '<th>操作</th>';
	echo '</tr>';

	while(list($id, $bookname, $publisher, $author, $price, $ptime) = mysql_fetch_row($result)) {
		echo '<tr>';
		echo '<td><input type="checkbox" name="id[]" value="'.$id.'"></td>';
		echo '<td>'.$id.'</td>';
		echo '<td>《'.$bookname.'》</td>';
		echo '<td>'.$publisher.'</td>';
		echo '<td>'.$author.'</td>';
		echo '<td>￥'.number_format($price, 2, ".", ",").'</td>';
		echo '<td>'.date("Y-m-d H:i",$ptime).'</td>';
		echo '<td><a href="mod.php?action=mod&id='.$id.'">修改</a>/<a onclick="return confirm(\'你确定要删除《'.$bookname.'》这个图书吗？\')" href="list.php?action=del&id='.$id.'">删除</a></td>';
		echo '</tr>';
	}


	echo '<tr><td><input type="submit" name="dosubmit" value="删除"/></td><td colspan="7" align="right">分页</td></tr>';

	echo '</table>';
	echo '</form>';


	include "footer.php";
