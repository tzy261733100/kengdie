<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
$text=$_POST["text3"];
include ("conn.php");
mysqli_query($conn,"update 后台管理 set 修改内容='$text' where id= '电台'");
echo "<script>alert('修改成功');history.back();</script>";
?>