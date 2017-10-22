<?php

namespace app\index\controller;

use think\Controller;

class Content extends Common
{
    //首页
    public function index()
    {
        //获取文章数据

        $arc_id = input("param.arc_id");
        //文章点击次数+1
        db("article")->where("arc_id",$arc_id)->setInc("arc_click");
        //当前文章数据
        $articleData = db("article")->alias("a")->join("attachment at",'at.attachment_id = a.attachment_id')->field('a.arc_id,a.arc_title,a.arc_author,a.arc_content,a.sendtime,at.path')->find($arc_id);
        //获取文章标签数据
        $articleData['tags'] = db('arc_tag')->alias('at')
        ->join('tag t','at.tag_id=t.tag_id')
            ->where('at.arc_id',$articleData['arc_id'])->field('t.tag_id,t.tag_name')->select();
        //提示语
        $headConf = ['title'=>$articleData['arc_title']];

        $this->assign("headConf",$headConf);
        $this->assign("articleData",$articleData);
        return $this->fetch();
    }
}
