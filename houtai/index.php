<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台界面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php
include ('link.php');
?>
<form method="post" action="yaoqiu.php">
    <?php
    $sql=mysqli_query($conn,"select * from 后台管理 where id='征婚要求'");
    $info=mysqli_fetch_array($sql);
    ?>
    <label for="myName">征婚要求----------</label>
    <input type="text" name="text3" class="xiao" value=" <?php echo $info["修改内容"]; ?>">
    <input type="submit" value="确认更改" onclick="1" class="quer"><br/>
</form>
</body>
</html>>