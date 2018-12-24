<meta http-equiv="content-type" content="text/html; charset=utf-8">
<?php
$text=$_POST["text"];
include ("link.php");
mysqli_query($conn,"update houtai set 修改内容='$text' where id= '征婚要求'");
echo "<script>alert('修改成功');history.back();</script>";
?>