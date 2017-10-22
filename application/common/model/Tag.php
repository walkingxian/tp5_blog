<?php

namespace app\common\model;

use think\Model;

class Tag extends Model
{
    protected $ok = 'tag_id';
    protected $table = 'blog_tag';
    /**
     * 添加标签
     */
    public function store($data)
    {
        //验证
        //执行添加
        $result = $this->validate(true)->save($data, $data['tag_id']);
        if($result) {
            return ['valid'=>1,'msg'=>'操作成功'];
        }else {
            return ['valid'=>0,'msg'=>$this->getError()];
        }
    }
}
