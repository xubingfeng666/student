<?php

namespace app\admin\controller;


use houdunwang\core\Controller;
use houdunwang\view\View;
use Gregwar\Captcha\CaptchaBuilder;
use system\model\User;
class login extends Controller{
    public  function index(){
        //预先存入数据库用户名和密码
        //$password = password_hash('admin888',PASSWORD_DEFAULT);
        //echo $password;
        if(IS_POST) {
            $post=$_POST;
//            判断验证码
            if (strtolower($post['captcha']) != strtolower($_SESSION['captcha'])) {
                return $this->error('验证码错误');
            }
//           判断 用户名
            $data=User::where("username='{$post['username']}'")->get();
            if(!$data){
                return $this->error('用户名不存在');
            }
            //密码错误
            if(! password_verify($post['password'],$data[0]['password'])){
                return $this->error('密码不存在');
            }
            //如果用户有勾选7天免登陆
            if(isset($post['autologin'])){
                //延长钥匙的有效期（7天）
                //setcookie('名称','值','过期时间','作用域')
                setcookie(session_name(),session_id(),time() + 3600 * 24 * 7,'/');
            }else{//不勾选7天免登陆
                setcookie(session_name(),session_id(),0,'/');
            }
            $_SESSION['user']=[
                'uid' =>$data[0]['uid'],
                'username'=>$data[0]['username']
            ];
            return $this->setRedirect('?s=admin/entry/index')->success('登陆成功');
        }
        return View::make();
    }
    public function captcha(){
        $str     = substr(md5( microtime( true ) ), 0, 3 );
        $captcha = new CaptchaBuilder( $str );
        $captcha->build();
        header( 'Content-type: image/jpeg' );
        $captcha->output();
        //把验证码存入到session
        //把值存入到session
        $_SESSION['captcha'] = strtolower( $captcha->getPhrase() );
    }
    /**
     * 异步检测验证码
     */
    public function checkCaptcha(){
        if(strtolower($_POST['c']) != $_SESSION['captcha']){
            echo 0;
        }else{
            echo 1;
        }
    }
    public function logout(){
        session_unset();
        session_destroy();
        return $this->setRedirect('?s=admin/member/index')->success('退出成功');
    }
}