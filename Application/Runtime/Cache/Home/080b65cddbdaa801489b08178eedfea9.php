<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="telephone=no" name="format-detection">
  <meta name="msapplication-tap-highlight" content="no">
  <meta content="email=no" name="format-detection" />
  <meta name="keywords" content="装修不将就，生活家装饰，新房整装、旧房改造" />
  <meta name="description" content="" />
  <title>精彩专题</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/example.min.css" />
</head>
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
    <!-- 头部 -->
    <div class="layout-header am-hide-sm-only">
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
  												<strong>13702373435</strong>
  												<span>周一~周五, 8:00 - 18:00</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#00ad60" class="contact-icon am-icon-qq"></i>
  												<strong>911398924</strong>
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
                    <a href="<?php echo U('About/contact');?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">联系我们</button>
                    </a>
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
              <li <?php if(($num == '1') or ($num == '')): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/index');?>">首页</a></li>
              <li <?php if($num == '2'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/example');?>">客户案例</a></li>
              <li <?php if($num == '3'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/about');?>">关于我们</a></li>
              <li <?php if($num == '4'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/contact');?>">联系我们</a></li>
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
                    <li><a href="<?php echo U('Index/index');?>" class="" >首页</a></li>
                    <li class=""><a href="<?php echo U('Case/example');?>" class="" >客户案例</a></li>
                    <li class=""><a href="<?php echo U('About/about');?>" class="" >关于我们</a></li>
                    <li class=""><a href="<?php echo U('About/contact');?>" class="" >联系我们</a></li>
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
      <div class="page-header">
        <div class="am-container">
          <h1 class="page-header-title">客户案例</h1>
        </div>
      </div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active">客户案例</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">案例</h2>
					<p class="section--description">
						Enterplorer Studio是一套面向企业级移动信息化建设的开发平台。集聚开发、测试、
						<br>打包、发布于一体的移动化开发综合平台。
					</p>
				</div>

        <div class="example-container">
          <div class="am-tabs" data-am-tabs>
            
            <div class="am-tabs-bd am-tabs-bd-ofv">
              <div class="am-tab-panel am-active">
                 <div class="am-g">
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                 </div>

                 <div class="am-g">
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                 </div>

                 <div class="am-g">
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                 </div>

                 <div class="am-g">
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                   <div class="am-u-md-3">
                     <a href="#" style="background-image: url('/public//images/example/example1.jpg');" class="example-item-bg"></a>
                    <img src="/public//images/example/logo_hx_active.png" alt="">
                     <span>了解更多></span>
                   </div>
                 </div>
              </div>
           </div>
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
              	<p style="text-align: center;margin: 0;">中山市路人甲装饰工程有限公司 Copyright © 2017</p>
				<p style="text-align: center;margin: 0;">北京市海淀区海淀大街27号天使大厦（原亿景大厦）三层</p>
			  </div>
			</div>
		</div>
	</div> 
  <script src="/public/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="/public/js/amazeui.js" charset="utf-8"></script>
  <script src="/public/js/common.js" charset="utf-8"></script>
</body>

</html>