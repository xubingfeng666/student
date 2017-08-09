<?php
/**
 * Created by PhpStorm.
 * User: xubingfeng
 * Date: 2017/8/2
 * Time: 下午10：00
 */

namespace app\admin\controller;
use houdunwang\view\View;
use system\model\User as UserModel;

class User extends Common {
    /**
     * 修改密码
     */
    public function changePassword(){
        if(IS_POST){
            $post=$_POST;
            $user=UserModel::where("uid=".$_SESSION['user']['uid'])->get() ;
//            判断旧密码
           if(!password_verify($post['oldPassword'],$user['0']['password'])){
               return $this->error('旧密码错误');
           }
//            判断两次输入密码一致吗
            if($post['newPassword']!=$post['confirmPassword']){
                return $this->error('两次输入的密码不一致');
            }
//            修改
            $data = ['password'=>password_hash($post['newPassword'],PASSWORD_DEFAULT)];

            UserModel::where('uid='.$_SESSION['user']['uid'])->update($data);
//             删除session里的值
            session_unset();
//            销毁当前会话中的全部数据
            session_destroy();
//            跳转页面
            return $this->setRedirect('?s=admin/member/index')->success('修改成功');
        }
//          加载模板
        return View::make();
    }
}