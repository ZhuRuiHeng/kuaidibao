<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->show();
    }

    /**
     *  页面跳转
     *  @param  num     string  模板名称
     *  @return data    array   返回数据
     *
     */
    public function num(){
        $data['num'] = $_GET['num'];
        //print_r($data);exit;

        $this->assign($data);   //输出数据
        $this->display($data['num']);   //输出模板
    }

    /**
     *  页面跳转
     *  @param  num     string  模板名称
     *  @return data    array   返回数据
     *
     */
  
    public function xiangqing(){
        $data['id'] = intval($_GET['id']);
        
        switch ($data['id']) {
            case '1':
                    $data['img'] = array('one'=> array('0'=>'/public/images/zx1.jpg','1'=>'/public/images/zx2.jpg','2'=>'/public/images/zx3.jpg','3'=>'/public/images/zx4.jpg'));
                break;
            
            case '2':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/zx6.jpg','1'=>'/public/images/zx7.jpg','2'=>'/public/images/zx8.jpg','3'=>'/public/images/zx9.jpg'));
                break;

            case '3':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/y1.jpg','1'=>'/public/images/y2.jpg','2'=>'/public/images/y3.jpg','3'=>'/public/images/y4.jpg'));
                break;

            case '4':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/k1.jpg','1'=>'/public/images/k2.jpg','2'=>'/public/images/k3.jpg','3'=>'/public/images/k4.jpg'));
                break;

            case '5':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/f1.png','1'=>'/public/images/f2.png','2'=>'/public/images/f3.png','3'=>'/public/images/f4.png'));
                break;

            case '6':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/e1.jpg','1'=>'/public/images/e2.jpg','2'=>'/public/images/e3.jpg','3'=>'/public/images/e4.jpg'));
                break;

            case '7':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/a1.jpg','1'=>'/public/images/a2.jpg','2'=>'/public/images/a3.jpg','3'=>'/public/images/a4.jpg'));
                break;

            case '8':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/m1.jpg','1'=>'/public/images/m2.jpg','2'=>'/public/images/m3.jpg','3'=>'/public/images/m4.jpg'));
                break;

            case '9':
                    $data['img'] =  array('one'=> array('0'=>'/public/images/d1.jpg','1'=>'/public/images/d2.jpg','2'=>'/public/images/d3.jpg','3'=>'/public/images/d4.jpg'));
                break;
        }
        // print_r($data);exit;
        $this->assign($data);   //输出数据
        $this->display();   //输出模板
    }
}