<?php

namespace app\home\controller;

use app\common\controller\Index as commonIndex;
use think\Controller;
use think\Request;

class Index extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
         // echo 111123;
        return view("signin/index");
    }

    public function testa()
    {
         $m = new commonIndex;
         return $m->index();  
    }

    public function company(){

           dump(config());
        return $this->fetch("index/company",['name' =>'seven']);
    }


}
