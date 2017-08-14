<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> 量房沟通</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/about.min.css" />
  <link rel="stylesheet" type="text/css" href="/public/css/add.css">
</head>
<style type="text/css">
  .page-header{background: url(/Public/images/about1.jpg) no-repeat;background-size: cover;}
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
            <li class="am-active"> 量房沟通</li>
          </ol>
        </div>
      </div>
    </div>




    <div class="section">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title"> 量房沟通</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;text-indent: 2em">
             量房是房屋装修的第一步，这个环节虽然细小，但却是非常必须和重要的。量房并不只是测量数据那么简单。传统量房只要十来分钟，但要达到专业标准量房至少需要60分钟，设计师到现场量房，实地了解房屋内外结构和环境特点，是为高品质家装打好坚实基础。
            <br>1.巡视一遍所有的房间。了解基本的房型结构，对于特别之处要予以关注
            <br>2.在纸上画出大概的平面（不讲求尺寸，这个平面只是用于记录具体的尺寸，但要体现出房间与房间之间的前后、左右连接方式）。
从进户门开始，一个一个房间测量，并把测量的每一个数据记录到平面中相应的位置上。
            <br>测量方法：
            <br>（1）卷尺量出房间的长度、高度（长度要紧贴地面测量，高度要紧贴墙体拐角处测量）；
            <br>（2）把通向另一个房间的具体尺寸再测量、记录（了解两个房间之间的空间结构关系）；
            <br>（3）观察四面墙体上如果有门、窗、开关、插座、管子等，在纸上简单示意；
            <br>（4）测量门本身的长、宽、高，再测量这个门与所属墙体的左、右间隔尺寸，测量门与天花的间隔尺寸；
            <br>（5）测量窗本身的长、宽、高，再测量这个窗与所属墙体的左、右间隔尺寸，测量窗与天花的间隔尺寸；
            <br>（6）按照门窗的测量方式把开关、插座、管子的尺寸记录；（厨房、卫生间要特别注意）
            <br>（7）要注意每个房间天花上的横梁尺寸以及固定的位置。
            <br>4.按照上述方法，把房屋内所有的房间测量一遍。如果是多层的，为了避免漏测，测量的顺序要一层测量完后再测量另外一层，而且房间的顺序要从左到右；
            <br>5.有特殊之处用不同颜色的笔标示清楚；
            <br>6.在全部测量完后，再全面检查一遍，以确保测量的准确、精细。



          </p>
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