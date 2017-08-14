<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>行业动态</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/other.min.css" />

</head>
<body class="error-container error-dark-box">
  <div class="layout">
    <!-- 公共头部 -->
        <link rel="stylesheet" type="text/css" href="/public/css/add.css">
    <!-- 头部 -->
    <div class="layout-header am-hide-sm-only">
      <!--topbar start-->
      <div class="topbar">
        <div class="container">
          <div class="am-g">
          <!-- 左 -->
            <div class="am-u-md-3">
              <div class="topbar-left">
                <i class="am-icon-globe"></i>
              </div>
            </div>
            <!-- 右 -->
            <div class="am-u-md-9">
              <div class="topbar-right am-text-right am-fr">
                <a href="<?php echo U('Index/login');?>">登录</a>
                <a href="<?php echo U('Index/register');?>">注册</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--topbar end-->
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
              <li class=""><a href="<?php echo U('Index/index');?>">首页</a></li>
              <li>
                <a href="#">产品中心</a>
                <!-- sub-menu start-->
                <ul class="sub-menu">
									<li class="menu-item"><a href="<?php echo U('Case/product1');?>">产品展示1</a></li>
									<li class="menu-item"><a href="<?php echo U('Case/product2');?>">产品展示2</a></li>
									<li class="menu-item"><a href="<?php echo U('Case/product3');?>">产品展示3</a></li>
								</ul>
                <!-- sub-menu end-->
              </li>
              <li><a href="<?php echo U('Case/example');?>">客户案例</a></li>
              <li><a href="<?php echo U('Case/solution');?>">解决方案</a></li>
              <li>
                <a href="<?php echo U('Case/news');?>">新闻中心</a>
                <!-- sub-menu start-->
                <ul class="sub-menu">
									<li class="menu-item"><a href="<?php echo U('Case/news-content');?>">公司动态</a></li>
									<li class="menu-item"><a href="<?php echo U('Case/404-dark');?>">行业动态</a></li>
									<li class="menu-item"><a href="<?php echo U('Case/404-light');?>">精彩专题</a></li>
								</ul>
                <!-- sub-menu end-->
              </li>
              <li><a href="<?php echo U('About/about');?>">关于我们</a></li>
              <li><a href="<?php echo U('About/join');?>">加入我们</a></li>
              <li><a href="<?php echo U('About/contact');?>">联系我们</a></li>
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
                    <li class="am-parent">
                      <a href="#" class="" >产品中心</a>
                      <ul class="am-menu-sub am-collapse ">
                        <li class="">
                          <a href="<?php echo U('Case/product1');?>" class="" >产品展示1</a>
                        </li>
                        <li class="">
                          <a href="<?php echo U('Case/product2');?>" class="" >产品展示2</a>
                        </li>
                        <li class="">
                          <a href="<?php echo U('Case/product3');?>" class="" >产品展示3</a>
                        </li>
                      </ul>
                    </li>
                    <li class=""><a href="<?php echo U('Case/example');?>" class="" >客户案例</a></li>
                    <li class=""><a href="<?php echo U('Case/solution');?>" class="" >解决方案</a></li>
                    <li class="am-parent">
                      <a href="<?php echo U('Case/news');?>" class="" >新闻中心</a>
                      <ul class="am-menu-sub am-collapse  ">
                        <li class="">
                          <a href="<?php echo U('Case/news-content');?>" class="" >公司动态</a>
                        </li>
                        <li class="">
                          <a href="<?php echo U('Case/404-dark');?>" class="" >行业动态</a>
                        </li>
                        <li class="">
                          <a href="<?php echo U('Case/404-light');?>" class="" >精彩专题</a>
                        </li>
                      </ul>
                    </li>
                    <li class=""><a href="<?php echo U('About/about');?>" class="" >关于我们</a></li>
                    <li class=""><a href="<?php echo U('About/join');?>" class="" >加入我们</a></li>
                    <li class=""><a href="<?php echo U('About/contact');?>" class="" >联系我们</a></li>
                    <li class=""><a href="<?php echo U('Index/login');?>" class="" >登录</a></li>
                    <li class=""><a href="<?php echo U('Index/register');?>" class="" >注册</a></li>
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

  <!--===========layout-container================-->
    <div class="layout-container">
      <div class="error error-dark">
        <div class="container">
        <h2>404</h2>
        <p>Page Not Found</p>
        <p>对不起,没有找到您所需要的页面,可能是URL不确定,或者页面已被移除。</p>
        <button type="button" class="am-btn am-btn-secondary" onclick="window.location.href='../index.html'">Home</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 公共底部 -->
  
    <div class="layout-footer">
      <div class="footer">
        <div style="background-color:#383d61" class="footer--bg"></div>
        <div class="footer--inner">
          <div class="container">
            <div class="footer_main">
              <div class="am-g">
                <div class="am-u-md-3 ">
                  <div class="footer_main--column">
                    <strong class="footer_main--column_title">关于我们</strong>
                    <div class="footer_about">
												<p class="footer_about--text">
													云适配(AllMobilize Inc.) 是全球领先的HTML5企业移动化解决方案供应商，由前微软美国总部IE浏览器核心研发团队成员及移动互联网行业专家在美国西雅图创立.
												</p>
												<p class="footer_about--text">
                          云适配跨屏云也成功应用于超过30万家企业网站，包括微软、联想等世界500强企业
												</p>
											</div>
                  </div>
                </div>

                <div class="am-u-md-3 ">
                  <div class="footer_main--column">
										<strong class="footer_main--column_title">产品中心</strong>
										<ul class="footer_navigation">
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Enterplorer 企业浏览器</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Xcloud 网站跨屏云</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Amaze UI 前端开发框架</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Amaze UI 前端开发框架</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">Amaze UI 前端开发框架</a></li>
										</ul>
									</div>
                </div>

                <div class="am-u-md-3 ">
                  <div class="footer_main--column">
										<strong class="footer_main--column_title">技术支持</strong>
										<ul class="footer_navigation">
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
											<li class="footer_navigation--item"><a href="#" class="footer_navigation--link">企业移动信息化白皮书</a></li>
										</ul>
									</div>
                </div>

                <div class="am-u-md-3 ">
                  <div class="footer_main--column">
										<strong class="footer_main--column_title">联系详情</strong>
										<ul class="footer_contact_info">
											<li class="footer_contact_info--item"><i class="am-icon-phone"></i><span>服务专线：400 069 0309</span></li>
											<li class="footer_contact_info--item"><i class="am-icon-envelope-o"></i><span>yunshipei.com</span></li>
											<li class="footer_contact_info--item"><i class="am-icon-map-marker"></i><span>北京市海淀区海淀大街27号天使大厦（原亿景大厦）三层</span></li>
											<li class="footer_contact_info--item"><i class="am-icon-clock-o"></i><span>Monday - Friday, 9am - 6 pm; </span></li>
										</ul>
									</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 



  <script src="/public/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="/public/js/amazeui.js" charset="utf-8"></script>
</body>

</html>