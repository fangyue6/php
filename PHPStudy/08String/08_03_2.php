<?php
/**
 * magic_quotes_gpc=on  开启这个
 */
if(isset($_POST['dosubmit'])) {
    $title = $_POST['title'];

    echo stripslashes(addslashes($title))."<br>"; //删除引号
    echo htmlspecialchars($title);


}
?>

<?php
if(isset($_POST['dosubmit'])) {
    $title = $_POST['title'];
    echo strip_tags($title, "<b><u>");
}
?>

<?php
$str = "this is a PHPStudy\n";
$str .="this is a demo\n";
$str .="this is a hello\n";
echo nl2br($str);
?>

<br>
<form action="" method="post">
    title: <input type="text" name="title" value="" />

    <input type="submit" name="dosubmit"  value="提交" /><br>

</form>