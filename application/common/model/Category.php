<?php

namespace app\common\model;

use think\Model;
use tree\Tree;

class Category extends Model
{
    protected $pk = 'cate_id';
    protected $table = 'blog_cate';
    /**
     * 获取分类数据【树状结构】
     */
    public function getAll()
    {
        $data = db('cate')->order('cate_sort desc,cate_id')->select();
        $field = Tree::makeTreeForHtml($data, [
            'primary_key' => 'cate_id', //主键id
            'parent_key' => 'cate_pid'  //父id
        ]);
        return $field;
    }
    /**
     * 添加栏目
     */
    public function store($data)
    {
        //执行验证

        //执行添加
        $result = $this->validate(true)->save($data);
        if(false === $result ) {
            return ['valid'=>0,'msg'=>$this->getError()];
        }else {
            return ['valid'=>1,'msg'=>'添加栏目成功'];
        }
    }
    /**
     * 处理所属分类
     */
    public function getCateData($cate_id)
    {
        //获取当前id子集
        $field = db('cate')->order('cate_sort desc,cate_id')->select();
        $cate_ids = $this->getSon($field, $cate_id);
        //追加自己
        $cate_ids[] = $cate_id;
        //获取过滤后数据
        $filterField = db('cate')->order('cate_sort desc,cate_id')->whereNotIn('cate_id',$cate_ids)->select();
        $cates = Tree::makeTreeForHtml($filterField, [
            'primary_key' => 'cate_id', //主键id
            'parent_key' => 'cate_pid'  //父id
        ]);
        return $cates;
    }
    /**
     * 过滤cate，排除子集和自己
     */
    public function getSon($data, $cate_id) {
        static $temp = [];
        foreach($data as $k=>$v) {
            if($cate_id == $v['cate_pid']){
                $temp[] = $v['cate_id'];
                $this->getSon($data, $v['cate_id']);
            }
        }
        return $temp;
    }
    /**
     * 编辑栏目
     */
    public function edit($data)
    {
        $result = $this->validate(true)->save($data,[
            $this->pk => $data['cate_id']
        ]);
        if($result) {
            return ['valid'=>1,'msg'=>'编辑成功'];
        }else {
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
    /**
     * 删除栏目
     */
    public function del($cate_id)
    {
        //将当前分类子栏目 分配到 其父栏目
        $cate_pid = $this->where("cate_id",$cate_id)->value('cate_pid');
        $this->where('cate_pid',$cate_id)->update(['cate_pid'=>$cate_pid]);
        //删除
        if(Category::destroy($cate_id)) {
            return ['valid'=>1,'msg'=>'删除成功'];
        }else {
            return ['valid'=>0,'msg'=>'删除失败'];
        }
    }
}
