<?php

namespace app\home\controller;
use houdunwang\core\Controller;
use houdunwang\view\View;
use houdunwang\model\Model;


class Entry extends Controller {
	public function index() {
         $data=Model::q("SELECT * FROM stu s JOIN grade g ON g.gid=s.gid" );
       return View::make()->with(compact('data'));
	}
	public function show(){
		$data=Model::q("SELECT * FROM stu s JOIN grade g ON g.gid=s.gid HAVING s.sid=".$_GET['sid'] );

		return View::make()->with(compact('data'));
	}



}