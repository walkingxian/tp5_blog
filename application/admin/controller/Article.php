<?php

namespace app\admin\controller;

use think\Controller;
use tree\Tree;
use app\common\model\Category;

class Article extends Controller
{
    protected $db;
    public function _initialize()
    {
        parent::_initialize();
        $this->db =  new \app\common\model\Article();
    }
    //首页
    public function index()
    {
        $field = $this->db->getAll(0);
        $this->assign("field", $field);
        return $this->fetch();
    }
    //添加文章
    public function store()
    {
        if(request()->isPost()) {
            $res = $this->db->store(input('post.'));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit();
            }else {
                $this->error($res['msg']);exit();
            }
        }
        $cateData = (new Category())->getAll();
        $this->assign('cateData',$cateData);
        $this->assign('tagData',db('tag')->select());
        return $this->fetch();
    }
    /**
     * 编辑
     */
    public function edit()
    {
        //发生编辑请求
        if(request()->isPost()) {
            $res = $this->db->edit(input("post."));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit();
            }else {
                $this->error($res['msg']);exit();
            }
        }
        //展示编辑页面
        $arc_id = input("param.arc_id");
        //获取分类数据
        $cateData = (new Category())->getAll();
        $this->assign('cateData',$cateData);
        //获取标签数据
        $tagData = db("tag")->select();
        $this->assign("tagData",$tagData);
        //获取旧数据
        $oldData = db("article")->alias('ar')->join('attachment at','ar.attachment_id = at.attachment_id')->field('ar.*,at.path')->find($arc_id);
        $this->assign("oldData",$oldData);
        //获取当前文章得所有标签
        $tag_ids = db("arc_tag")->where("arc_id",$arc_id)->column("tag_id");
        $this->assign("tag_ids",$tag_ids);

        return $this->fetch();
    }

    /**
     * 修改排序
     */
    public function changeSort()
    {
        if(request()->isAjax())
        {
            $res = $this->db->changeSort(input('post.'));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit;
            }else {
                $this->error($res['msg']);exit;
            }
        }
    }
    /**
     * 删除到回收站
     */
    public function delToRecycle()
    {
        $arc_id = input("param.arc_id");
        //将数据删除到回收站
        if($this->db->save(['is_recycle'=>1],["arc_id"=>$arc_id])){
            $this->success("操作成功","index");exit;
        }else {
            $this->error('操作失败');exit;
        }
    }

    /**
     * 恢复数据
     */
    public function outToRecycle()
    {
        $arc_id = input("param.arc_id");
        if($this->db->save(['is_recycle'=>0],["arc_id"=>$arc_id])){
            $this->success("操作成功","index");exit;
        }else {
            $this->error('操作失败');exit;
        }
    }
    /**
     * 回收站管理
     */
    public function recycle()
    {
        $field = $this->db->getAll(1);
        $this->assign("field",$field);
        return $this->fetch();
    }
    /**
     * 回收站真正的删除
     */
    public function del()
    {
        $arc_id = input("get.arc_id");
        $res = $this->db->del($arc_id);
        if($res['valid']) {
            $this->success($res['msg'],'index');exit;
        }else {
            $this->error($res['msg']);exit;
        }
    }
}
