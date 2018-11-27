<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="icym.css">
</head>
<body>
  
    <div class="bj">
        <img src="./bj.jpg" width="150%";height="150%"/>
     </div> 
    <div class=top>
    <h1>精弘首页</h1>

  </div>
  
  <div> 
        <ul class=lead>
          <li><a href="www.baidu.com">校园资讯</a>
            <ul>
                <li><a href="#lt" >论坛</a></li>
                <li><a href="#wp" >网盘</a></li>
                <li><a href="#zx" >咨讯</a></li>
          </ul></li>  
          <li><a href="www.baidu.com">玩转工大</a>
            <ul>
                <li><a href="#gdyq" >工大圆圈</a></li>
                <li><a href="#wp" >网盘</a></li>
                <li><a href="#dt" >电台</a></li>
            </ul></li>
          <li><a href="www.baidu.com">个人中心</a>
            <ul>
                <li><a href="#" >待租借</a></li>
                <li><a href="#" >待租借</a></li>
                <li><a href="#" >待租借</a></li>
            </ul></li>
          <li><a href="#">趣味校园</a>
           <ul>
             <li><a href="www.zjut.com">工大首页</a></li>
             <li><a href="http://www.jh.zjut.edu.cn/">原首页</a></li>
           </ul>  
      </ul>
      <?php
      include("conn.php");
      ?>
    <div class="ldiv">
        <p><span style="font-size: 40px;">“精弘网络</span>成立于2002年5月，
          精弘的名字取自工大学风“取精用弘”，是浙江工业大学的学生网络组织。精弘
          网络秉承着自由、共享、团结、创新的精神，全心全意为在校师生提供优质的
          服务和交流平台，受到了广泛好评。经过多年的发展，精弘网络已成为我校最
          大的网络平台，提供包括<i>精弘论坛、精弘资讯、精弘下载、精弘网盘、Fee
            l电台、精小弘在线、精弘微博、精弘文档</i>在内的一系列服务。与此同
            时，以精弘毅行为代表的线下活动也在如火如荼的展开，成为了工大的特色
            活动，为学生创造五彩的大学生活。<span style="font-size: 30px;">”</span></p>


          
    </div>
   
    <div class="rdiv">
        <?php
        $sql=mysqli_query($conn,"select * from 后台管理 where id='精弘论坛'");
        $info=mysqli_fetch_array($sql);
        ?>
        <h2><a name="lt">论坛</a></h2>
        <p><br><?php echo $info["修改内容"]; ?></p>
        <div class="overcontent">&nbsp;&nbsp;&nbsp;&nbsp;</div>
          
      
    </div> <div class=left><a href="http://bbs.zjut.edu.cn/"><img src="./bbs.png" width="200px";height="150px" /></a></div>
    <div class="ldiv">
      <h2><a name="wp">网盘</a></h2>
        <div class="overcontent">&nbsp;&nbsp;&nbsp;&nbsp;U盘？闪讯？CMCC？
          那是什么东西？精弘网盘可以同时支持外网和内网直接访问，只要用精弘通行
          证登陆即可使用。麻麻再也不用担心上机课忘记带U盘啦~还可以支持在线播放
          网盘里的音乐哟~</div>
    </div>
  </div> <div class=right><a href="http://pan.zjut.com/"><img src="./cloud.png" width="200px";height="150px" /></a></div>

    <div class="rdiv">
        <?php
        $sql=mysqli_query($conn,"select * from 后台管理 where id='精小弘在线'");
        $info=mysqli_fetch_array($sql);
        ?>
      <h2><a name="zx">精小弘在线</a></h2>
        <p><br><?php echo $info["修改内容"]; ?></p>
        <div class="overcontent">&nbsp;&nbsp;&nbsp;&nbsp;

        </div>
    </div>
  </div> <div class=left><a href="http://www.izjut.com/"><img src="./help.png" width="200px";height="150px" /></a></div>
    <div class="ldiv">
        <h2><a name="gdyq">工大圆圈</a></h2>
        <div class="overcontent">&nbsp;&nbsp;&nbsp;&nbsp;一个全新的校内活
          动发布平台，给你工大197个社团和8大组织的所有，为工大之人不再错过工
          大之事。</div>
    </div>
  </div> <div class=right><a href="http://hd.izjut.com/"><img src="./hd.png" width="200px";height="150px" /></a></div>
    <div class="rdiv">
        <?php
        $sql=mysqli_query($conn,"select * from 后台管理 where id='精弘资讯'");
        $info=mysqli_fetch_array($sql);
        ?>
        <h2><a name="wp"></a>精弘资讯</h2>
        <p><br><?php echo $info["修改内容"]; ?></p>
        <div class="overcontent">&nbsp;&nbsp;&nbsp;&nbsp;</div>

    </div>    
  </div> <div class=left><a href="http://news.zjut.com/"><img src="./news.png" width="200px";height="150px" /></a></div>
    <div class="ldiv">
        <?php
        $sql=mysqli_query($conn,"select * from 后台管理 where id='电台'");
        $info=mysqli_fetch_array($sql);
        ?>
        <h2><a name="dt"></a>电台</h2>
        <p><br><?php echo $info["修改内容"]; ?></p>
      <div class="overcontent">&nbsp;&nbsp;&nbsp;&nbsp;</div>


    </div>
  </div> <div class=right><a href="http://feel.zjut.com/"><img src="./feel.png" width="200px";height="150px" /></a></div>
    <div class="footer">
        <p>made by “c l t”</p>
        </div>

</div> 
 <div class="ttop">
    <a href="#"><img src="./jt.jpg" width="60px";height="60px"/></a>
     </div> 
 

</body>

</html>