<?php

namespace app\admin\controller;

use think\Controller;

class Tag extends Controller
{
    protected $db;
    public function _initialize()
    {
        parent::_initialize();
        $this->db = new \app\common\model\Tag();
    }
    public function index()
    {
        $field = db('tag')->paginate(2);
        $this->assign('field',$field);
        return $this->fetch();
    }
    public function store()
    {
        $tag_id = input('param.tag_id');
        if($tag_id) {
            //编辑请求
            $oldData = $this->db->find($tag_id);
        }else {
            //添加
            $oldData = ['tag_name'=>""];
        }
        if(request()->isPost()){
            $res = $this->db->store(input('post.'));
            if($res['valid']) {
                $this->success($res['msg'],'index');exit();
            }else {
                $this->error($res['msg']);exit();
            }
        }
        $this->assign('oldData',$oldData);
        return $this->fetch();
    }
    /**
     * 删除标签
     */
    public function del()
    {
        $tag_id = input('param.tag_id');
        //执行删除
        if(\app\common\model\Tag::destroy($tag_id)) {
            $this->success('删除标签成功','index');exit();
        }else {
            $this->error('删除标签失败');exit();
        }
    }
}
