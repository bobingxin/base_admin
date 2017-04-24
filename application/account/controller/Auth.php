<?php
namespace app\account\controller;

use think\Controller;
use think\Request;
use app\account\model\AuthRuleModel;

class Auth extends Controller
{
    public function add(Request $request)
    {
        $rule = new AuthRuleModel;
        $rule->name = "/a/b/c";
        $rule->title = "hahaha";
        $rule->condition = "cdecde";
        if($rule->save()){
            return '规则[ ' . $rule->name . ':' . $rule->id . ' ]新增成功';
        }else{
            return $rule->getError();
        }
    }

}