<?php

namespace app\common\model;

use think\Model;
use think\Validate;

class Webset extends Model
{
    protected $pk = "webset_id";
    protected $table = "blog_webset";

    /**
     * 执行编辑
     */
    public function edit($data)
    {
        $validate = new Validate([
            'webset_value'=>'require',
        ],[
            'webset_value.require'=>'请输入站点配置值',
        ]);

        foreach ($data as $key => $item) {
            $res = $validate->check($item);
            if(!$res){
               return ['valid'=>0,'msg'=>$validate->getError()];
            }
        }

        if($this->saveAll($data)){
            return ['valid'=>1,'msg'=>"更新成功"];
        }else {
            return ['valid'=>0,'msg'=>"更新失败"];
        }
    }
}