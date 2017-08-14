<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企业网站模板</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/product.min.css" />
</head>
<body>
  <div class="layout">
    <!--===========layout-header================-->
    <div class="layout-header am-hide-sm-only">
      <!--topbar start-->
      <div class="topbar">
        <div class="container">
          <div class="am-g">
            <div class="am-u-md-3">
              <div class="topbar-left">
                <i class="am-icon-globe"></i>
                <div class="am-dropdown" data-am-dropdown>
                  <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle>Language <span class="am-icon-caret-down"></span></button>
                  <ul class="am-dropdown-content">
                    <li><a href="#">English</a></li>
                    <li class="am-divider"></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="am-u-md-9">
              <div class="topbar-right am-text-right am-fr">
                Follow us
                <i class="am-icon-facebook"></i>
                <i class="am-icon-twitter"></i>
                <i class="am-icon-google-plus"></i>
                <i class="am-icon-pinterest"></i>
                <i class="am-icon-instagram"></i>
                <i class="am-icon-linkedin"></i>
                <i class="am-icon-youtube-play"></i>
                <i class="am-icon-rss"></i>
                <a href="./login.html">登录</a>
                <a href="./register.html">注册</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--topbar end-->

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
  												<i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
  												<strong>0 (855) 233-5385</strong>
  												<span>周一~周五, 8:00 - 20:00</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-envelope-o"></i>
  												<strong>cn@yunshipei.com</strong>
  												<span>随时欢迎您的来信！</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
  												<strong>天使大厦,</strong>
  												<span>海淀区海淀大街27</span>
  											</div>
  										</div>
                    </div>
                    <a href="html/contact.html" class="contact-btn">
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
              <li class=""><a href="../index.html">首页</a></li>
              <li>
                <a href="#">产品中心</a>
                <!-- sub-menu start-->
                <ul class="sub-menu">
									<li class="menu-item"><a href="./product1.html">产品展示1</a></li>
									<li class="menu-item"><a href="./product2.html">产品展示2</a></li>
									<li class="menu-item"><a href="./product3.html">产品展示3</a></li>
								</ul>
                <!-- sub-menu end-->
              </li>
              <li><a href="./example.html">客户案例</a></li>
              <li><a href="./solution.html">解决方案</a></li>
              <li>
                <a href="./news.html">新闻中心</a>
                <!-- sub-menu start-->
                <ul class="sub-menu">
									<li class="menu-item"><a href="./news-content.html">公司动态</a></li>
									<li class="menu-item"><a href="./404-dark.html">行业动态</a></li>
									<li class="menu-item"><a href="./404-light.html">精彩专题</a></li>
								</ul>
                <!-- sub-menu end-->
              </li>
              <li><a href="./about.html">关于我们</a></li>
              <li><a href="./join.html">加入我们</a></li>
              <li><a href="./contact.html">联系我们</a></li>
            </ul>
          </div>
        </div>
        <!--nav end-->
      </div>

    </div>
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
                    <li><a href="../index.html" class="" >首页</a></li>
                    <li class="am-parent">
                      <a href="#" class="" >产品中心</a>
                      <ul class="am-menu-sub am-collapse ">
                        <li class="">
                          <a href="./product1.html" class="" >产品展示1</a>
                        </li>
                        <li class="">
                          <a href="./product2.html" class="" >产品展示2</a>
                        </li>
                        <li class="">
                          <a href="./product3.html" class="" >产品展示3</a>
                        </li>
                      </ul>
                    </li>
                    <li class=""><a href="./example.html" class="" >客户案例</a></li>
                    <li class=""><a href="./solution.html" class="" >解决方案</a></li>
                    <li class="am-parent">
                      <a href="./news.html" class="" >新闻中心</a>
                      <ul class="am-menu-sub am-collapse  ">
                        <li class="">
                          <a href="./news-content.html" class="" >公司动态</a>
                        </li>
                        <li class="">
                          <a href="./404-dark.html" class="" >行业动态</a>
                        </li>
                        <li class="">
                          <a href="./404-light.html" class="" >精彩专题</a>
                        </li>
                      </ul>
                    </li>
                    <li class=""><a href="./about.html" class="" >关于我们</a></li>
                    <li class=""><a href="./join.html" class="" >加入我们</a></li>
                    <li class=""><a href="./contact.html" class="" >联系我们</a></li>
                    <li class="am-parent">
                      <a href="./news.html" class="nav-icon nav-icon-globe" >Language</a>
                      <ul class="am-menu-sub am-collapse  ">
                        <li>
                          <a href="#" >English</a>
                        </li>
                        <li class="">
                          <a href="#" >Chinese</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-share-contain">
                      <div class="nav-share-links">
                        <i class="am-icon-facebook"></i>
                        <i class="am-icon-twitter"></i>
                        <i class="am-icon-google-plus"></i>
                        <i class="am-icon-pinterest"></i>
                        <i class="am-icon-instagram"></i>
                        <i class="am-icon-linkedin"></i>
                        <i class="am-icon-youtube-play"></i>
                        <i class="am-icon-rss"></i>
                      </div>
                    </li>
                    <li class=""><a href="./login.html" class="" >登录</a></li>
                    <li class=""><a href="./register.html" class="" >注册</a></li>
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




    <div class="section">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">跨平台企业级浏览器内核</h2>
          <p class="section--description">
            全球独创专利技术：一行代码部署，帮助企业快速安全地将现有PC版网页适配成HTML5跨屏网页，跨平台的企业统一办公
            门户，快捷的移动适配开发能力，完备的数据安全保护
          </p>
        </div>

        <div class="product2-main">
          <div class="am-g">
            <div class="am-u-md-3 am-u-sm-6">
              <img src="/public/images/product/product2/product2_icon_1.png" alt="" />
              <h3>企业级浏览器内核</h3>
              <p>
                全球独创专利技术：一行代码部署，帮
                助企业快速安全地将现有.
              </p>
              <a>了解更多</a>
            </div>
            <div class="am-u-md-3 am-u-sm-6">
              <img src="/public/images/product/product2/product2_icon_2.png" alt="" />
              <h3>企业级浏览器内核</h3>
              <p>
                全球独创专利技术：一行代码部署，帮
                助企业快速安全地将现有.
              </p>
              <a>了解更多</a>
            </div>
            <div class="am-u-md-3 am-u-sm-6">
              <img src="/public/images/product/product2/product2_icon_3.png" alt="" />
              <h3>企业级浏览器内核</h3>
              <p>
                全球独创专利技术：一行代码部署，帮
                助企业快速安全地将现有.
              </p>
              <a>了解更多</a>
            </div>
            <div class="am-u-md-3 am-u-sm-6">
              <img src="/public/images/product/product2/product2_icon_4.png" alt="" />
              <h3>企业级浏览器内核</h3>
              <p>
                全球独创专利技术：一行代码部署，帮
                助企业快速安全地将现有.
              </p>
              <a>了解更多</a>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- product2-banner start-->
    <div class="product2-banner">
      <div class="container">
        <h2>统一的移动办公门户</h2>
        <p>
          Enterplorer提供企业级HTML5应用统一运行及管理平台，一个入口整合所有的企业级应用
        </p>
        <button type="button" class="am-btn am-btn-warning am-round">了解详情</button>
      </div>
    </div>
    <!-- product2-banner end-->


    <div class="section product2-service">
      <div class="container">
        <div class="product2-service-title">
          <h2>产品服务<img src="/public/images/product/product2/product2_service_icon1.png" alt=""></h2>
        </div>
        <div class="product2-service-content">
          <div class="am-g">
            <!--product2-info-left start-->
            <div class="am-u-md-4 product2-info">
              <div class="product2-info-left">
                <div class="am-g">
                  <div class="am-u-sm-10 am-text-right product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon2.png" alt="" />
                  </div>
                </div>

                <div class="am-g">
                  <div class="am-u-sm-10 am-text-right product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon3.png" alt="" />
                  </div>
                </div>

                <div class="am-g">
                  <div class="am-u-sm-10 am-text-right product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon4.png" alt="" />
                  </div>
                </div>

                <div class="am-g">
                  <div class="am-u-sm-10 am-text-right product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon5.png" alt="" />
                  </div>
                </div>
              </div>
              </div>
            <!--product2-info-left end-->

            <!-- product2-content-img start -->
            <div class="am-u-md-4">
              <div class="product2-content-img">
                <img src="/public/images/product/product2/product2-phone.jpg" alt="" />
              </div>
            </div>
            <!-- product2-content-img end -->

            <!-- product2-info-right start -->
            <div class="am-u-md-4 product2-info">
              <div class="product2-info-right">
                <div class="am-g">
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon6.png" alt="" />
                  </div>
                  <div class="am-u-sm-10 am-text-left product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                </div>
                <div class="am-g">
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon7.png" alt="" />
                  </div>
                  <div class="am-u-sm-10 am-text-left product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                </div>

                <div class="am-g">
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon8.png" alt="" />
                  </div>
                  <div class="am-u-sm-10 am-text-left product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
                  </div>
                </div>

                <div class="am-g">
                  <div class="am-u-sm-2">
                    <img src="/public/images/product/product2/product2_service_icon9.png" alt="" />
                  </div>
                  <div class="am-u-sm-10 am-text-left product2-content-info">
                    <h3>企业级浏览器内核</h3>
                    <p>全球独创专利技术：一行代码部署，帮助企业快速安全地将现有.</p>
              </div>
                </div>
              </div>
            </div>
            <!-- product2-info-right end -->
          </div>
        </div>
      </div>
    </div>


    <div class="section" style="margin-top:0px;background-image: url('/public/images/pattern-light.png');">
      <div class="container">
        <!--index-container start-->
        <div class="index-container">
          <div class="am-g">
            <div class="am-u-md-4">
              <div class="contact_card">
  							<i style="color:#59bcdb" class="contact_card--icon am-icon-phone"></i>
  							<strong class="contact_card--title">Contact Us</strong>
  							<p class="contact_card--text">Feel free to call us on <br> <strong>0 (855) 233-5385</strong> <br> Monday - Friday, 8am - 7pm</p>
                <button type="button" class="am-btn am-btn-secondary">Order a Call Back</button>
  						</div>
            </div>
            <div class="am-u-md-4">
              <div class="contact_card">
  							<i style="color:#59bcdb" class="contact_card--icon am-icon-envelope-o"></i>
  							<strong class="contact_card--title">Our Email</strong>
  							<p class="contact_card--text">Drop us a line anytime at <br> <strong><a href="mailto:info@financed.com">info@financed.com</a>,</strong> <br> and we’ll get back soon.</p>
                <button type="button" class="am-btn am-btn-secondary">Start Writing</button>
  						</div>
            </div>
            <div class="am-u-md-4">
              <div class="contact_card">
  							<i style="color:#59bcdb" class="contact_card--icon am-icon-map-marker"></i>
  							<strong class="contact_card--title">Our Address</strong>
  							<p class="contact_card--text">Come visit us at <br> <strong>Stock Building, New York,</strong> <br> NY 93459</p>
                <button type="button" class="am-btn am-btn-secondary">See the Map</button>
  						</div>
            </div>
          </div>
        </div>
        <!--index-container end-->
      </div>
    </div>


    <!--===========layout-footer================-->
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