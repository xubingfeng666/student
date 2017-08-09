<?php
/**
 * Created by PhpStorm.
 * User: xubingfeng
 * Date: 2017/8/2
 * Time: 下午9:27
 */

namespace app\admin\controller;


use houdunwang\core\Controller;

class Common extends Controller{
    public function __construct() {
        //如果没有登陆
        if(!isset($_SESSION['user'])){
            go('?s=admin/member/index');
        }
    }
}