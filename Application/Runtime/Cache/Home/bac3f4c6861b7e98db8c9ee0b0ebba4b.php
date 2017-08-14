<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>售后保障</title>
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
            <li class="am-active">售后保障</li>
          </ol>
        </div>
      </div>
    </div>


  <div class="section" style="margin-top:0px;background-image: url('/public/images/pattern-light.png');">
      <div class="container">
        <div class="section--header">
        <table style="text-align:center;border-collapse:collapse;border-spacing:1;border-spacing:0;width: 100%;">
         <h2 class="section--title" style="text-align:center!important;font-size: 30px!important;">售后保障内容</h2>
            <tbody>
              <!-- 1 -->
                <tr style="padding:8px 0;">
                  <td rowspan="3">电源</td>
                  <td>电源线断路或短路</td>
                  <td>十年</td>
                  <td>更换</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>漏电及空气开关失灵</td>
                  <td>五年</td>
                  <td>修复</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>线路不通</td>
                  <td>十年</td>
                  <td>修复</td>
                </tr>
            </tbody>
            <!-- 2 -->
            <tbody>
                <tr style="padding:8px 0;">
                  <td rowspan="6">木工类</td>
                  <td>电天花造型开裂</td>
                  <td>一年</td>
                  <td>修补</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>门类开裂</td>
                  <td>一年</td>
                  <td>校正或更换</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>面板层脱落</td>
                  <td>一年</td>
                  <td>修补或更换</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>地板起鼓发响</td>
                  <td>一年</td>
                  <td>返工</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>框架发霉变黑</td>
                  <td>一年</td>
                  <td>重做</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>推拉门失灵</td>
                  <td>一年</td>
                  <td>调整、更换吊轮</td>
                </tr>
            </tbody>
            <!-- 3 -->
            <tbody>
                <tr style="padding:8px 0;">
                  <td rowspan="6">扇灰/油漆类</td>
                  <td>表面部落</td>
                  <td>一年</td>
                  <td>重新刷漆</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>表面变色</td>
                  <td>一年</td>
                  <td>重新刷漆</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>墙面发裂</td>
                  <td>一年</td>
                  <td>修补</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>表面起泡</td>
                  <td>一年</td>
                  <td>修补</td>
                </tr>
                <tr style="padding:8px 0;">
                  <td>表面脱落</td>
                  <td>一年</td>
                  <td>修补</td>
                </tr>
            </tbody>
        </table>
                    
      </div>
      </div> 
  </div>

  <div class="section" style="margin-top:0px;background-image: url('/public/images/pattern-light.png');">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">一、售后保障</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;text-indent: 2em">
            1、属于保修范围、内容的项目，施工方应当在接到保修通知之日起48小时内派人保修。施工方不能在约定期限内派人保修的，需及时通知业主约定具体时间。
          </p>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;text-indent: 2em">
          2、对于涉及结构安全的质量问题，应当按照《房屋建筑工程质量保修办法》的规定，立即采取安全防范措施。
          </p>
          <h2 class="section--title">二、保修费用</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;text-indent: 2em">
            保修费用及相关费用由造成质量缺陷的责任方承担。
          </p>
           <h2 class="section--title">三、其他</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;text-indent: 2em">
            1、以上各项工程质量属人为损坏、超过保修期等情况则不在保修之列。
          </p>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;text-indent: 2em">
           2、施工方有责任终生维护，并在保修期外适当收取材料及人工费用。
          </p>
        </div>
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