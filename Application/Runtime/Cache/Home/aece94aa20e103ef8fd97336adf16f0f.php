<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>预算清单</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/about.min.css" />
  <link rel="stylesheet" type="text/css" href="/public/css/add.css">
</head>
<style type="text/css">
.section--description{
  font-size: 16px!important;color:#626262;
}
.section--title{ font-size: 16px!important;color:#000!important;text-align: left!important;font-weight: normal;text-indent:2em;}
table{text-align:center;border-collapse:collapse;border-spacing:1;border-spacing:0;width: 100%;}
td{border:1px solid #ddd; padding: 10px 0;}
td input{border:none;background: none;outline: none;}
</style>
<body>
  <div class="layout">
    <!-- 公共头部 -->
        <link rel="stylesheet" type="text/css" href="/public/css/add.css">
    ﻿<!--[if (gte IE 9)|!(IE)]><!-->
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <!--<![endif]-->

    <!--[if lt IE 9]>
    <script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
    <script src="/public/js/amazeui.ie8polyfill.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .nav-contain .nav-inner .am-nav li{padding: 0}
      .nav-contain{background: #3a3a3a;color: #fff;}
      .nav-contain .nav-inner .am-nav li.active{background-color: #f4a100;}
      .nav-contain .nav-inner .am-nav li a{color: #fff;padding: 20px 10px;}
      .nav-contain .nav-inner .am-nav li a:hover{background: #f9be00;color: #fff!important}
      .m-header .am-offcanvas-bar {background: #383d61;}
    </style>
    <!-- 头部 -->
    <div class="layout-header am-hide-sm-only" style="margin-top: -30px!important;">
      <!-- 导航-->
      <div class="header-box" data-am-sticky>
        <!--header start-->
          <div class="container">
            <div class="header">
              <div class="am-g">
                <div class="am-u-lg-2 am-u-sm-12">
                  <div class="logo">
                    <a href=""><img src="/public/images/logo.png" alt="" /></a>
                  </div>
                </div>
                <div class="am-u-md-10">
                  <div class="header-right am-fr">
                    <div class="header-contact">
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#00ad60" class="contact-icon am-icon-phone"></i>
  												<strong>0760-88630763</strong>
  												<span>周一~周五, 8:00 - 18:00</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#00ad60" class="contact-icon am-icon-weixin"></i>
  												<strong>13727705974</strong>
  												<span>随时欢迎您的咨询！</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#00ad60" class="contact-icon am-icon-map-marker"></i>
  												<strong>中山市西区岐港路1号,</strong>
  												<span>星晨广场二期缤城1号商业楼3A、5A、6A卡商铺</span>
  											</div>
  										</div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--header end-->


        <!--nav start-->
        <div class="nav-contain">
          <div class="nav-inner">
            <ul class="am-nav am-nav-pills am-nav-justify">
              <li <?php if(($num == 'index') or ($num == '')): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'index'));?>">首页</a></li>
              <li <?php if($num == 'example'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'example'));?>">客户案例</a></li>
              <li <?php if($num == 'about'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'about'));?>">关于我们</a></li>
              <li <?php if($num == 'contact'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'contact'));?>">联系我们</a></li>
            </ul>
          </div>
        </div>
        <!--nav end-->
      </div>

    </div>
    <!-- 适配移动端 -->
    <!--mobile header start-->
    <div class="m-header">
      <div class="am-g am-show-sm-only">
        <div class="am-u-sm-2">
          <div class="menu-bars">
            <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
            <!-- 侧边栏内容 -->
            <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas >
              <a href="javascript: void(0)" class="am-menu-toggle"></a>

              <div class="am-offcanvas" >
                <div class="am-offcanvas-bar">
                  <ul class="am-menu-nav am-avg-sm-1">
                    <li <?php if(($num == 'index') or ($num == '')): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/index',array('num'=>'1'));?>" class="" >首页</a></li>
                    <li <?php if($num == 'example'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'example'));?>" class="" >客户案例</a></li>
                    <li <?php if($num == 'about'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'about'));?>" class="" >关于我们</a></li>
                    <li <?php if($num == 'contact'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'contact'));?>" class="" >联系我们</a></li>
                  </ul>
                </div>
              </div>
            </nav>

          </div>
        </div>
        <div class="am-u-sm-5 am-u-end">
          <div class="m-logo">
            <a href=""><img src="/public/images/logo.png" alt=""></a>
          </div>
        </div>
      </div>
      <!--mobile header end-->
    </div>

 
  </div>

  <!--===========内容layout-container================-->
    <div class="layout-container">
      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active">工程预算单</li>
          </ol>
        </div>
      </div>
    </div>


  <div class="section" style="margin-top:0px;background-image: url('/public/images/pattern-light.png');">
      <div class="container">
        <div class="section--header">
        <table style="text-align:center;border-collapse:collapse;border-spacing:1;border-spacing:0;width: 100%;">
         <h2 class="section--title" style="text-align:center!important;font-size: 30px!important;">售后保障内容</h2>
         <p style=" font-weight: bold;">1.按照户型，划好所需功能区</p>
            <thead>
              <tr>
                <td>项目名称</td>
                <td>单位</td>
                <td>数量</td>
                <td>单价</td>
                <td>合价</td>
                <td>备注</td>
              </tr>
            </thead>
            <tbody>
              <!-- 1 -->
              <tr style="padding:8px 0;">
                <td>客厅</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr>
              <tr style="padding:8px 0;">
                <td>餐厅</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>卫生间</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>厨房</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>主卧</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>主卧阳台</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>次卧</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>书房</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>五金</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
            </tbody>
        </table>
       <!-- 2 -->
       <table style="text-align:center;border-collapse:collapse;border-spacing:1;border-spacing:0;width: 100%;">
          <p style=" font-weight: bold;">2.列出每个项目所需材料</p>
            <thead>
              <tr>
                <td>项目名称</td>
                <td>单位</td>
                <td>数量</td>
                <td>单价</td>
                <td>合价</td>
                <td>备注</td>
              </tr>
            </thead>
            <tbody>
              <!-- 1 -->
              <tr style="padding:8px 0;">
                <td>水电安装</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr>
              <tr style="padding:8px 0;">
                <td>线槽修补</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>客厅铺地砖（正铺）</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>铺木地板前地面找平</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>门槛石安装</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>填缝剂</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>门洞修补</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>平顶天花（双层板）</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>石膏线安装</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>批灰及油漆</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>灯具安装</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>大门保护</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>地面保护</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
              <tr style="padding:8px 0;">
                <td>小计</td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
                <td><input type="" name=""></td>
              </tr> 
            </tbody>
        </table>
        </div>
      </div> 
  </div>
         
  <!--===========layout-footer================-->
  <!-- 公共底部 -->
  
   <div class="footer--inner" style="background: #222;color: #fff;padding: 20px">
          <div class="container">
            <div class="footer_main">
              <div class="am-g">
              	<p style="text-align: center;margin: 0;">中山市西区岐港路1号</p>
              	<p style="text-align: center;margin: 0;">中山市路人甲装饰工程有限公司 Copyright © 2017</p>
			  </div>
			</div>
		</div>
	</div>
     
  <script src="/public/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="/public/js/amazeui.js" charset="utf-8"></script>
</body>

</html>