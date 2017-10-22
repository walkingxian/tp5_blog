<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin;

class Login extends Controller
{
    public function login()
    {
        //登陆操作
        if(request()->isPost()){
            $res = (new Admin())->login(input('post.'));
            if($res['valid']){
                //登陆成功
                $this->success($res['msg'],'admin/entry/index');exit();
            }else{
                //登陆失败
                $this->error($res['msg']);exit();
            }
        }else{
         //加载登陆页面
            return $this->fetch();
        }
    }
}
