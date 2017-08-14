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
              <li <?php if($num == '2'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Case/example');?>">客户案例</a></li>
              <li <?php if($num == '3'): ?>class="active"<?php endif; ?>><a href="<?php echo U('About/about');?>">关于我们</a></li>
              <li <?php if($num == '4'): ?>class="active"<?php endif; ?>><a href="<?php echo U('About/contact');?>">联系我们</a></li>
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
          <h1 class="page-header-title">Contact Us</h1>
        </div>
      </div>

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
					<h2 class="section--title">Get In Touch!</h2>
					<p class="section--description">
            云适配致力于为企业提供全球最先进的移动化技术帮助企业最高效安全实现生产力提升<br/>
              One Web，Any Device
					</p>
				</div>

        <div class="section-container">
          <div class="am-g">
            <!--contact-left start-->
            <div class="am-u-md-5">
              <ul class="contact-left">
                <li class="contact-box-item">
                  <div class="contact_item">
										<i class="contact_item--icon am-icon-phone"></i>
										<h3 class="contact_item--title">联系方式</h3>
										<p class="contact_item--text">
											联系电话： <strong>13702373435</strong>,
											<br> 周一 - 周五, 8：00 - 18:00
										</p>
									</div>
                </li>
                <li class="contact-item">
                  <div class="contact_item">
										<i class="contact_item--icon am-icon-envelope-o"></i>
										<h3 class="contact_item--title">邮箱</h3>
										<p class="contact_item--text">
                      service@yunshipei.com, <br/>期待您的来信...
										</p>
									</div>
                </li>
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
              <div class="am-u-md-7">
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
                          <button type="button" class="am-btn am-btn-default am-btn-sm btn-change">
                            <i class="am-icon-cloud-upload"></i> 上传文件</button>
                          <input type="file" multiple>
                        </div>
                      </div>
                      <div class="am-u-md-3">
                        <p><button type="submit" class="am-btn am-btn-default btn-reguest am-fr btn-fl">提交</button></p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
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
              	<p style="text-align: center;margin: 0;">中山市路人甲装饰工程有限公司 Copyright © 2017</p>
				<p style="text-align: center;margin: 0;">北京市海淀区海淀大街27号天使大厦（原亿景大厦）三层</p>
			  </div>
			</div>
		</div>
	</div> 
  <script src="/public/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="/public/js/amazeui.js" charset="utf-8"></script>
</body>

</html>