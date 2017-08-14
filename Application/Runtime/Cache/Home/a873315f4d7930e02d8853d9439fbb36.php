<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>联系我们</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/contact.min.css" />
  <link rel="stylesheet" type="text/css" href="/public/css/add.css">

</head>
<body>
  <div class="layout">
    <!--===========layout-header================-->
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

  <!--===========内容是layout-container================-->
    <div class="layout-container">
      <div class="tupian"><img src="/public/images/lianxi.jpg" style="width: 100%"></div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active">联系我们</li>
          </ol>
        </div>  
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">经营范围</h2>
					<p class="section--description">
            
承接：室内外装饰设计工程 , 园林绿化工程 , 商业策划 , 网络维护 , 网站设计。（依法须经批准的项目 , 经相关部门批准后方可开展经营活动。）(依法须经批准的项目 , 经相关部门批准后方可开展经营活动)
					</p>
				</div>

        <div class="section-container">
          <div class="am-g">
            <!--contact-left start-->
            <div class="am-u-md-6">
              <ul class="contact-left">
                <li class="contact-box-item">
                  <div class="contact_item">
										<i class="contact_item--icon am-icon-phone"></i>
										<h3 class="contact_item--title">联系方式</h3>
										<p class="contact_item--text">
											联系电话： <strong>0760-88630763</strong>,
											<br> 周一 - 周五, 8：00 - 18:00
										</p>
									</div>
                </li>
                
              </ul>
            </div>
            <div class="am-u-md-6">
              <ul class="contact-left">
               <li class="contact-item">
                  <div class="contact_item">
                    <i class="contact_item--icon am-icon-map-marker"></i>
                    <h3 class="contact_item--title">地址</h3>
                    <p class="contact_item--text">
                      公司位于地址中山市西区岐港路1号星晨广场二期缤城1号商业楼3A、5A、6A卡商铺欢迎实地了解具体业务,公司主要经营或服务范围是装饰公司装饰设计服务. 您如果想进一步了解可以电话联系该公司。
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <!--contact-left end-->

            <!--contact-right start-->
              <!-- <div class="am-u-md-7">
                <div class="contact-form">
                  <h3 class="contact-form_title">你的需求</h3>
                  <form class="am-form">
                    <div class="am-g">
                      <div class="am-u-md-6">
                        <input type="email" class="" id="doc-ipt-email-1" placeholder="姓名">
                      </div>
                      <div class="am-u-md-6">
                        <input type="email" class="" id="doc-ipt-email-2" placeholder="Email">
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-md-6">
                        <input type="email" class="" id="doc-ipt-email-3" placeholder="电话">
                      </div>
                      <div class="am-u-md-6">
                        <div class="am-form-group" style="background: #fcfcfc;">
                          <select id="doc-select-1" style="width: 100%;font-size: 16px;line-height: 20px;padding: 15px 20px;border-radius: 3px;color: #262626;border: 2px solid #e9e9e9;">
                            <option value="option1">让生活更舒适</option>
                            <option value="option2">从毛坯到精装</option>
                            <option value="option3">装修不将就</option>
                          </select>
                          <span class="am-form-caret"></span>
                        </div>
                      </div>
                    </div>

                    <div class=am-g>
                      <div class="am-u-md-12">
                        <div class="am-form-group">
                          <textarea class="" rows="5" id="doc-ta-1" placeholder="写下你想说的..."></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="am-g">
                      <div class="am-u-md-9">
                        <div class="am-form-group am-form-file">
                          
                        </div>
                      </div>
                      <div class="am-u-md-3">
                        <p><button  type="submit" class="am-btn am-btn-default btn-reguest am-fr btn-fl">提交</button></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div> -->
             
            <!--contact-right end-->
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--===========layout-container================-->
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