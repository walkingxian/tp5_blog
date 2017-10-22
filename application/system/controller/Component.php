<?php

namespace app\system\controller;

use think\Controller;
use think\Db;

class Component extends Controller
{
    //上传图片
    public function uploader()
    {
        //获取临时文件
        $file = request()->file("file");
        //移动到uploads目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info) {
            $data = [
                'name'=> $_FILES['file']['name'],
                'filename'=> $info->getFilename(),
                'path'=> 'uploads/' . str_replace('\\','/',$info->getSaveName()),
                'extension'=> $info->getExtension(),
                'createtime'=> time(),
                'size'=> $file->getSize(),
                'status' => 1
            ];
            $attachmentId = Db::name("attachment")->insertGetId($data);;
            return  [
                'valid'=>1,
                'message'=> APP_ROOT . "uploads/" . str_replace('\\','/',$info->getSaveName()),
                'data'=>[
                    'attachment_id'=>$attachmentId
                ]
            ];
        }else {  //上传失败
            return  [
                'valid'=>0,
                'message'=> $file->getError()
            ];
        }

    }
    //获取文件列表
    public function fileLists()
    {
        $db = Db::name("attachment")
            ->whereIn("extension", explode(",", strtolower(input("param.extensions"))))
            ->order("id","desc");
        $res = $db->paginate(32);
        $data = [];
        if($res->toArray()) {
            foreach ($res as $k => $v) {
                $data[$k]['createtime'] = date("Y/m/d", $v['createtime']);
                $data[$k]['size'] = $v['size'];
                $data[$k]['url'] = APP_ROOT . $v['path'];
                $data[$k]['path'] = APP_ROOT . $v['path'];
                $data[$k]['name'] =  $v['name'];
            }
        }
        return json(['data'=>$data]);
    }
}
