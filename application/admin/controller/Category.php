<?php

namespace app\admin\controller;

use think\Controller;
/**
 * 栏目管理
 */
class Category extends Controller
{
    protected $db;
    protected function _initialize()
    {
        parent::_initialize();
        $this->db = new \app\common\model\Category();
    }
    //栏目管理首页
    public function index()
    {
        //获取栏目
        $field = $this->db->getAll();
        $this->assign([
            'field' => $field
        ]);
        return $this->fetch();
    }
    //添加栏目
    public function store()
    {
        if(request()->isPost()){
            $res = $this->db->store(input('post.'));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit();
            }else {
                $this->error($res['msg']);exit();
            }
        }
        return $this->fetch();
    }
    /**
     * 添加子集
     */
    public function addSon()
    {
        if(request()->isPost()) {
            $res = $this->db->store(input('post.'));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit();
            }else {
                $this->error($res['msg']);exit();
            }
        }
        $cate_id = input('param.cate_id');
        $data = $this->db->where('cate_id',$cate_id)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
    /**
     * 编辑栏目
     */
    public function edit()
    {
        if(request()->isPost()) {
            $res = $this->db->edit(input('post.'));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit();
            }else {
                $this->error($res['msg']);exit();
            }
        }
        //接受cate_id
        $cate_id = input("param.cate_id");
        //获取旧数据
        $oldData = $this->db->find($cate_id);
        $cateData = $this->db->getCateData($cate_id);
        $this->assign('oldData',$oldData);
        $this->assign('cateData',$cateData);
        return $this->fetch();
    }
    /**
     * 删除栏目
     */
    public function del()
    {
        $cate_id = input("param.cate_id");
        $res = $this->db->del($cate_id);
        if($res['valid']) {
            $this->success($res['msg'],'index');exit();
        }else {
            $this->error($res['msg']);exit();
        }
    }
}
