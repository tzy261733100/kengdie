<?php
@ session_start();
$inter=$_SESSION['inter'];
?>
<html>

<head>
	<title>shujuku</title>
	<meta charset="UTF-8" />
	<style type="text/css">
		
	
		.da {
			position:absolute;
			left: 0;
			top: 0;
			 padding: 10px; margin: 0px; 
			width: 100%;
			height: 100%;}
			
		
		.box1{
			  
			 height:100%;width: 100%; 
			 
			 padding: 10px; margin: 0px;
			 position: absolute;
		}
.zuo{
	height:681px;
	width:180px;
	
	 
	 z-index:-1;
}
.box2{ background-color:;
 height:200px;width:90px;
	 padding: 45px; margin:0px; }
.guan{
			 line-height:30px;
			 color:#ffffff;
			 position:relative;
			 top:10px;
		}
.cala{
			 text-align:center;
		}
.bottoms{
    height:180px;width:100px; 
		}
		.bottom{
			line-height:50px;
		}
		.shang{
			 height:236px; width:950px;z-index:1;
			 padding: 23px; margin:0px;
			 position:relative;
			 left:200px;
			 bottom:680px;
		}
		.xiao{
			 background:rgba(255,255,255,0.3);
    height:30px;
  width:860px;
		font-size:18px;
		 border:none;
		vertical-align:middle;

		}
.quer{
	 background:transparent; 
	 border:transparent; 
	 font-size:16px;
	float:right;
	position:relative;
	top:5px;

}
		.qqq{
			
			height:358px;
			 border: 0px solid black; padding: 0px; margin:0px;
		position:relative;
		left:185px;bottom:675px;
		}
		.lll{
			 height:380px; 
			 width:440px;border-color:white;
			 border: 0px solid black; padding:0px 22px; margin:0px;
			background:rgba(74,84,121,0.3); float:left;z-index:1;
			 margin:15px;
			 float:left;
			 
		}

		.latter{
			
			width:20px;height:800px;
    color:white;
	 writing-mode: vertical-lr;writing-mode: tb-lr;
		font:30px "Microsoft Yahei";
		position:relative;
		left:1210px;
		bottom:1350px;
	
		
		}

		</style>
</head>

<body>
<img src="./背景.jpg" width="1200px";height="1000px"/>
	<div class="da">
	  <div class="box1">
		 <div class="zuo">
		  <div class="box2">
		   
		   
              <?php
              session_start();
              $username=$_SESSION["username"];
              ?>
              <div class="guan">管理员：<?php echo $username; ?><br/>状态：<br/>权限等级:
		   </div>
		  </div>
		  
     
		 </div>
		<div class="shang">

    <?php
   include ('conn.php');
    ?>
<form method="post" action="精弘资讯.php">
    <?php
    $sql=mysqli_query($conn,"select * from 后台管理 where id='精弘资讯'");
    $info=mysqli_fetch_array($sql);
    ?>
	<label for="myName">精弘资讯----------</label>
	<input type="text" name="text1" class="xiao" value="<?php echo $info["修改内容"]; ?>">
	<input type="submit" value="确认更改" onclick="1" class="quer"><br/>
</form>
 <form method="post" action="精弘论坛.php">
    <?php
    $sql=mysqli_query($conn,"select * from 后台管理 where id='精弘论坛'");
    $info=mysqli_fetch_array($sql);
    ?>
	<label for="myName">精弘论坛----------</label>
	<input type="text" name="text2" class="xiao" value="<?php echo $info["修改内容"]; ?>">
	<input type="submit" value="确认更改" onclick="1" class="quer"><br/>
 </form>
<form method="post" action="电台.php">
    <?php
    $sql=mysqli_query($conn,"select * from 后台管理 where id='电台'");
    $info=mysqli_fetch_array($sql);
    ?>
    <label for="myName">电台----------</label>
	<input type="text" name="text3" class="xiao" value="<?php echo $info["修改内容"]; ?>">
	<input type="submit" value="确认更改" onclick="1" class="quer"><br/>
</form>
<form method="post" action="精小弘在线.php">
    <?php
    $sql=mysqli_query($conn,"select * from 后台管理 where id='精小弘在线'");
    $info=mysqli_fetch_array($sql);
    ?>
<label for="myName">精小弘在线----------</label>
	<input type="text" name="text4" class="xiao" value="<?php echo $info["修改内容"]; ?>">
	<input type="submit" value="确认更改" onclick="1" class="quer"><br/>
</form>
		</div>	  
		<div style="position:absolute;z-index:-1;width:100%;height:100%;top:0px;left:0px;">
	</div>
	</div>
		

	
</body>

</html>