<?php

namespace app\admin\controller;

use think\Controller;
use app\common\model\Admin;

class Entry extends Common
{
    public function index()
    {
        //加载后台首页
        return $this->fetch();
    }
    /**
     * 修改密码
     */
    public function pass()
    {
        if(request()->isPost()){
            $res = (new Admin())->pass(input('post.'));
            if($res['valid']) {
                //执行成功
                $this->success($res['msg'],'admin/entry/index');exit();
            }else{
                $this->error($res['msg']);
            }
        }
        return $this->fetch();
    }
}
