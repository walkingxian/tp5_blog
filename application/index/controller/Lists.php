<?php

namespace app\index\controller;

use app\common\model\Category;

class Lists extends Common
{
    public function index()
    {
        $headConf = ['title'=>'列表页'];
        $this->assign("headConf",$headConf);
        //获取左侧第一部分数据
        $cate_id = input("param.cate_id");
        $tag_id = input("param.tag_id");

        //分类页
        if($cate_id){
            //获取分类所有子分类
            $cids = (new Category())->getSon(db('cate')->select(),$cate_id);
            //追加自己
            $cids[] = $cate_id;
            $headData = [
                'title'=>'分类',
                'name'=>db("cate")->where("cate_id",$cate_id)->value("cate_name"),
                'total'=>db("article")->whereIn("cate_id",$cids)->count()
            ];
            //获取该分类下文章数据
            $articleData = db("article")->alias("a")
                ->join("arc_tag art",'a.arc_id = art.arc_id')
                ->join("cate c","c.cate_id = a.cate_id")
                ->join("attachment at",'at.attachment_id = a.attachment_id')
                ->where("a.is_recycle",0)->whereIn("a.cate_id",$cids)->select();
        }

        //标签页
        if($tag_id) {
            //获取标签相关信息
            $headData = [
                'title'=>'标签',
                'name'=>db("tag")->where("tag_id",$tag_id)->value("tag_name"),
                'total'=>db("arc_tag")->where("tag_id",$tag_id)->count()
            ];
            //获取标签分类文章
            $articleData = db("article")->alias("a")
                ->join("arc_tag art",'a.arc_id = art.arc_id')
                ->join("cate c","c.cate_id = a.cate_id")
                ->join("attachment at",'at.attachment_id = a.attachment_id')
                ->where("a.is_recycle",0)->where("art.tag_id",$tag_id)->select();

        }

        foreach ($articleData as $k => $v) {
            $articleData[$k]['tags'] = db("arc_tag")->alias("at")
                ->join("tag t",'at.tag_id = t.tag_id')
                ->where("at.arc_id",$v['arc_id'])->field("t.tag_id,t.tag_name")->select();
        }

        $this->assign("headData",$headData);
        $this->assign("articleData",$articleData);
        return $this->fetch();
    }
}
