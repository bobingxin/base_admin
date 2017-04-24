<?php
namespace app\account\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index(Request $request)
    {
        $Auth = new \think\Auth();
        echo '模块：'.$request->module();
        echo '<br/>控制器：'.$request->controller();
        echo '<br/>操作：'.$request->action();

        $name = $request->module().'/'.$request->controller().'/'.$request->action();
        $uid = 1;
        $type = $request->module();
        $mode = "url";
        $relation = "or";
        if($Auth->check($name,$uid,$type,$mode,$relation)){
            echo '</br>success';
        }else{
            echo '</br>failed';
        }
    }

    public function login(Request $request){
        $Auth = new \think\Auth();
        echo $request->module().'/'.$request->controller().'/'.$request->action();
    }
}