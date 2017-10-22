<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Link extends Controller
{
    protected $db;

    public function _initialize()
    {
        parent::_initialize();
        $this->db = new \app\common\model\Link();
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $field = $this->db->getAll();
        $this->assign("field",$field);
        return $this->fetch();
    }

    //添加友链
    public function store()
    {
        //新增请求
        if(request()->isPost()) {
            $res = $this->db->store(input("post."));
            if($res['valid']){
                $this->success($res['msg'],'index');exit;
            }else{
                $this->error($res['msg']);exit;
            }
        }

        //获取页面
        $link_id = input("param.link_id");
        if($link_id){  //编辑
            $oldData = $this->db->find($link_id);
        }else {
            $oldData = ['link_name'=>'','link_url'=>"","link_sort"=>100];
        }
        $this->assign("oldData",$oldData);
        return $this->fetch();
    }
    /**
     * 友链删除
     */
    public function del()
    {
        $link_id = input("get.link_id");
        if(\app\common\model\Link::destroy($link_id)){
            $this->success('操作成功','index');exit;
        }else{
            $this->error('操作失败');exit;
        }
    }
}
