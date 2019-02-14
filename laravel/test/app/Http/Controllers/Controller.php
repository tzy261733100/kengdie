<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Controllers\Controller;
/*class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}*/
class Controller extends BaseController{
    public function test(){


$text=$_POST["text3"];
mysqli_query($conn,"update 后台管理 set 修改内容='$text' where id= '电台'");
echo "<script>alert('修改成功');history.back();</script>";





$text=$_POST["text4"];
mysqli_query($conn,"update 后台管理 set 修改内容='$text' where id= '精小弘在线'");
echo "<script>alert('修改成功');history.back();</script>";





$text=$_POST["text1"];
mysqli_query($conn,"update 后台管理 set 修改内容='$text' where id= '精弘资讯'");
echo "<script>alert('修改成功');history.back();</script>";





$text=$_POST["text2"];
mysqli_query($conn,"update 后台管理 set 修改内容='$text' where id= '精弘论坛'");
echo "<script>alert('修改成功');history.back();</script>";

return view('final');
    }
}
/*class Controller extends BaseController{
    public function haha(){
        echo 'haha';
    }
}
