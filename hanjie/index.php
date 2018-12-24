<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>圣诞快乐</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
include("link.php");
?>
<?php
$sql=mysqli_query($conn,"select * from houtai where id='征婚要求'");
$info=mysqli_fetch_array($sql);
?>
    <h1>为美丽的晗姐征婚</h1>
    <p>姓名：施俏晗 所在地：浙江工业大学信息学院电气与自动化1803班 年龄：18 生日：2000年5月24日</p><br>
    <p>征婚要求：     <?php echo $info["修改内容"]; ?>   </p>
    <h2>啥也不说，上图</h2>
    <img src="mmexport1542977223921.jpg" width="375px";heigh="375px">
</body>
</html>