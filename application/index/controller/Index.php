<?php
namespace app\index\controller;

class Index extends Common
{
    public function index()
    {
        $headConf = ['title'=>'小贤的博客'];
        $this->assign("headConf",$headConf);
        //获取文章数据
        $articleData = db("article")->alias("a")
            ->join("cate c",'a.cate_id = c.cate_id')->join("attachment at","at.attachment_id = a.attachment_id")->where("a.is_recycle",0)->order("sendtime desc")->select();
        //halt($articleData);
        foreach($articleData as $k=>$v){
            $articleData[$k]['tags']=db("arc_tag")->alias("at")->join("tag t",'at.tag_id = t.tag_id')->where("at.arc_id",$v['arc_id'])->field("t.tag_id,t.tag_name")->select();
        }
        $this->assign("articleData",$articleData);
        return $this->fetch();

    }
}
