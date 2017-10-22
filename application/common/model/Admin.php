<?php

namespace app\common\model;

use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model
{
    protected $pk = 'admin_id';  //主键
    protected $table = 'blog_admin'; //表
    /**
     * 登陆
     */
    public function login($data)
    {
        //执行验证，检验格式（包括验证码）
        $validate = Loader::validate("Admin");

        if(!$validate->check($data)) {
            return ['valid'=>0,'msg'=>$validate->getError()];
        }

        //比对账号密码
        $cryptPassword = crypt($data['admin_password'],substr($data['admin_password'],0,2));
        $userInfo = $this->where('admin_username',$data['admin_username'])->where('admin_password',$cryptPassword)->find();
        if(!$userInfo){
            return ['valid'=>0,'msg'=>'用户名或密码不正确'];
        }

        //将用户信息存入session
        session('admin.admin_id',$userInfo['admin_id']);
        session('admin.admin_username',$userInfo['admin_username']);
        return ['valid'=>1,'msg'=>'登陆成功'];

    }
    /**
     * 修改密码
     * @param  Array $data 输入post数据
     * @return Array $res  修改状态及消息
     */
    public function pass($data)
    {
        //执行格式验证
        $validate = new Validate([
            'admin_password' => 'require',
            'new_password' => 'require',
            'confirm_password' => 'require|confirm:new_password'
        ],[
            'admin_password.require' => '请输入原始密码',
            'new_password.require' => '请输入新密码',
            'confirm_password.require' => '请输入确认密码',
            'confirm_password.confirm' => '两次密码不一致'
        ]);

        if(!$validate->check($data)){
            return ['valid'=>0,'msg'=>$validate->getError()];
        };

        //原始是否正确
        $cryptPassword = crypt($data['admin_password'],substr($data['admin_password'],0,2));
        $userInfo = $this->where('admin_id',session('admin.admin_id'))->where('admin_password',$cryptPassword)->find();
        if(!$userInfo) {
            return ['valid'=>0,'msg'=>"原始密码不正确"];
        }
        //存入新密码
        $cryptNewPassword = crypt($data['new_password'],substr($data['new_password'],0,2));
        $this->save([
            'admin_password' => $cryptNewPassword
        ],[$this->pk=>session('admin.admin_id')]);
        return ['valid'=>1,'msg'=>"密码修改成功"];
    }
}
