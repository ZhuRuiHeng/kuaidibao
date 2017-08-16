<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		 $this->show();
     }
//login

function login(){
    if($_POST){
      //print_r($_POST);die;
        I('request.iphone')?$_POST['iphone']=I('request.iphone'):jsonapp_fun(-1,'电话不能为空');
        
        I('request.dizhi')?$_POST['dizhi']=I('request.dizhi'):jsonapp_fun(-1,'地址不能为空');
                   
           $add=M('user')->add($_POST);
                if($add){
                     $this->display('Index/index');
                }else{
                    jsonapp_fun(1,'注册失败');
                }
    }
    $this->display();
  }
}