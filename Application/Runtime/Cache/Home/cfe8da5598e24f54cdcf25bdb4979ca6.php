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
  <title>客户案例</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/example.min.css" />
</head>
<style type="text/css">
 .am-g .am-u-md-4{cursor: pointer;margin: 0 0 30px 0;}
 @media screen and (max-width: 768px) {
    .layui-layer.layui-layer-iframe.layer-anim {
        /*width: 90%!important;*/
        margin: 0 auto;
    }
}
</style>
<body>
  
  <!-- 结束 -->
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
      <div class="tupian"><img src="/public/images/anli.jpg" style="width: 100%"></div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active">客户案例</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section" style="background-image: url(/public/images/pattern-light.png);">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">案例</h2>
					<p class="section--description">
						路人甲自成立以来，就确立了“爱与责任”的核心理念，通过在行业内推广“德标工程”等战略动作，得到消费者的广泛认可，陆续获得行业内许多奖项荣誉，在行业中也树立了较高的影响力和号召力。 路人甲以“品质生活服务商”为定位，每次努力与变革，都极大影响着中国整体家装的发展。同时，也一步步向实现“中国高品质整装品牌”的企业愿景迈进。
					</p>
				</div>
        <!-- 案例 -->
        <style type="text/css">
          .example-container .am-tabs-bd img{width: 100%;position: relative;left: 0;top: 0;transform:none;}
        </style>
        <div class="example-container">
          <div class="am-tabs" data-am-tabs>
            
            <div class="am-tabs-bd am-tabs-bd-ofv">
              <div class="am-tab-panel am-active">
                  <!-- 1 -->
                 <div class="am-g">
                   <div class="am-u-md-4" onclick="aa(1)">
                    <img src="/public/images/zx1.jpg" alt="">
                   </div>
                   <div class="am-u-md-4" onclick="aa(2)">
                      <img src="/public/images/zx6.jpg" alt="">
                   </div>
                   <div class="am-u-md-4" onclick="aa(3)">
                      <img src="/public/images/y2.jpg" alt="">
                   </div>
                 </div>
                  <!-- 2 -->
                 <div class="am-g">
                   <div class="am-u-md-4" onclick="aa(4)">
                    <img src="/public/images/k2.jpg" alt="">
                   </div>
                   <div class="am-u-md-4" onclick="aa(5)">
                      <img src="/public/images/f1.png" alt="">
                   </div>
                   <div class="am-u-md-4" onclick="aa(6)">
                      <img src="/public/images/e1.jpg" alt="">
                   </div>
                 </div>
                <!-- 3 -->
                 <div class="am-g">
                   <div class="am-u-md-4" onclick="aa(7)">
                    <img src="/public/images/a1.jpg" alt="">
                   </div>
                   <div class="am-u-md-4" onclick="aa(8)">
                      <img src="/public/images/m1.jpg" alt="">
                   </div>
                   <div class="am-u-md-4" onclick="aa(9)">
                      <img src="/public/images/d1.jpg" alt="">
                   </div>
                 </div>
              </div>
           </div>

          </div>
        </div>
      </div>
    </div>
<!--===========layout-footer================-->

<input id="handle_status" value="" hidden="hidden">
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
  <script src="/public/js/common.js" charset="utf-8"></script>
  <!-- js弹窗 -->
  <script type="text/javascript" src="/public/js/layui.js"></script>
  <script>
//  	    function aa(num){
//        var html="";
//        var imglist=$.parseJSON(json);
//        var data=imglist[num];
          //layer插件弹窗
          layer.open({
            type: 2,
            title: '装修详情',
            shadeClose: true,
            shade: 0.8,
            area: ['720px', '700px'],     
            content: ["/index.php/Home/Index/xiangqing/id/"+num,"no"]
          });
          
     // };
      layui.use('layer', function(){
        var $ = layui.jquery,
        layer = layui.layer;  
      });

 </script>
</body>
<script type="text/javascript">
      var json='[["public/images/zx1.jpg","/public/images/zx2.jpg","/public/images/zx3.jpg","/public/images/zx4.jpg"],["/public/images/zx6.jpg","/public/images/zx7.jpg","/public/images/zx8.jpg","/public/images/zx9.jpg"],["/public/images/y1.jpg","/public/images/y2.jpg","/public/images/y3.jpg","/public/images/y4.jpg"],["/public/images/k1.jpg","/public/images/k2.jpg","/public/images/k3.jpg","/public/images/k4.jpg"],["/public/images/f1.png","/public/images/f2.png","/public/images/f3.png","/public/images/f4.png"],["/public/images/e1.jpg","/public/images/e2.jpg","/public/images/e3.jpg","/public/images/e4.jpg"],["/public/images/a1.jpg","/public/images/a2.jpg","/public/images/a3.jpg","/public/images/a4.jpg"],["/public/images/m1.jpg","/public/images/m2.jpg","/public/images/m3.jpg","/public/images/m4.jpg"],["/public/images/d1.jpg","/public/images/d2.jpg","/public/images/d3.jpg","/public/images/d4.jpg"]]';
      
   
//    function aa(num){
//        var html="";
//        var imglist=$.parseJSON(json);
//        var data=imglist[num];
//        //layer插件弹窗
//        layer.open({
//          type: 2,
//          title: '装修详情',
//          shadeClose: true,
//          shade: 0.8,
//          area: ['720px', '700px'],     
//          content: ["/index.php/Home/Index/xiangqing/id/"+num,"no"]
//        });
//        
//    };
//    layui.use('layer', function(){
//      var $ = layui.jquery,
//      layer = layui.layer;  
//    });

</script>
</html>