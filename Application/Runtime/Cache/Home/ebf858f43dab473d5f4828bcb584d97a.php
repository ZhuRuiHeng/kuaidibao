<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企业网站模板</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/join.min.css" />
</head>
<body>
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
  <!--===========内容layout-container================-->
    <div class="layout-container">
      <div class="page-header">
        <div class="am-container">
          <h1 class="page-header-title">加入我们</h1>
        </div>
      </div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active">加入我们</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">我们的优势</h2>
					<p class="section--description">
						我们开创了中国首个开源HTML5跨屏前端框架、可见即可得的IDE、无障碍网页我们是全球独一无二的
						<br>云适配技术，我们的目标是打造极致的网页体验。
					</p>
				</div>

        <div class="join-container">
          <div class="am-g">
            <div class="am-u-md-3">
              <div class="careers--articles">
									<h3 class="careers--subtitle">Why Work For Us?</h3>
									<div class="careers_articles">
										<div class="careers_article">
											<i class="careers_article--icon am-icon-diamond"></i>
											<h3 class="careers_article--title">我们的团队</h3>
											<div class="careers_article--text">
												<p>
													成员既有超级学霸（来自Harvard、Google、香港科技大学、中国科技大学），也有来自行业的技术大拿。
												</p>
											</div>
											<div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
										</div>
										<div class="careers_article">
											<i class="careers_article--icon am-icon-key"></i>
											<h3 class="careers_article--title">我们的装备和趴体</h3>
											<div class="careers_article--text">
												<p>
                          顶配iMac、MacBook Pro、MacBook Air 3台瑞士Air空气净化器，PM2.5常年低于50,大趴每月一次，周三享用不尽的免费零食、饮料、水果
												</p>
											</div>
											<div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
										</div>
										<div class="careers_article">
											<i class="careers_article--icon am-icon-paper-plane-o"></i>
											<h3 class="careers_article--title">我们的队友</h3>
											<div class="careers_article--text">
												<p>
													充满热情的队友，也是一起撸串、篮球、足球、动感单车、甚至桌上足球组队互虐的好基友
												</p>
											</div>
											<div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
										</div>
									</div>
								</div>
            </div>

            <div class="am-u-md-9">
              <h3 class="careers--subtitle">We Are Looking For:</h3>
              <div class="careers--vacancies">
                <div class="am-panel-group" id="accordion">
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
                        高级产品经理
                      </h4>
                    </div>
                    <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
                      <div class="am-panel-bd">
                        <div class="vacancies--item_content js-accordion--pane_content" style="">
														<h5>职位描述：</h5>
														<p>
															熟练应用各种市场分析工具及产品原型工具，能够撰写和输出规范的产品白皮书；
														</p>
														<p>
															有产品策划和产品管理思维，能够撰写市场调研、市场分析、可行性分析报告等；
														</p>
														<p>
														  具备良好的沟通协调能力、系统性思维和创新意识；
														</p>
                            <p>
                              具有产品需求、归纳能力、市场敏觉洞察能力；
                            </p>
                            <p>
                              经历过完整的企业级应用产品生命周期；
                            </p>
                            <p>
                              有TOB企业5年以上产品经理工作经验；
                            </p>
                            <p>
                              有前端相关技术背景，具有产品架构师能力者优先考虑。
                            </p>

														<h5>请将您的简历发送至： <a href="mailto:jobs@yunshipei.com">jobs@yunshipei.com</a></h5>
													</div>
                      </div>
                    </div>
                  </div>
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-2'}">
                        高级前端开发工程师
                      </h4>
                    </div>
                    <div id="do-not-say-2" class="am-panel-collapse am-collapse">
                      <div class="am-panel-bd">
                        <h5>职位描述：</h5>
                        <p>
                          本科及以上，3-5年开发经验；
                        </p>
                        <p>
                          熟练掌握JS原生代码开发，对原型编程有深入的理解；
                        </p>
                        <p>
                          熟练使用过至少一种前端框架（如:Angularjs/reactjs/backbonejs/emberjs/knockoutjs）；
                        </p>
                        <p>
                          熟悉模块化开发思路，实际使用过至少一种框架（如：requirejs/seajs）；
                        </p>
                        <h5>有下列经验者优先：</h5>
                        <ul>
                          <li>计算机相关专业统招本科以上学历；</li>
                          <li>具有Reactjs实际开发经验；</li>
                          <li>具有Nodejs后端开发经验；</li>
                          <li>具有Nodejs后端开发经验；</li>
                          <li>具有较好的UI设计能力；</li>
                          <li>有个人作品可以演示；；</li>
                        </ul>
                        <p>
                          面试时请带个人笔记本或硬盘，在面试过程中向产品负责人展示你的产品，或你写的代码。
                        </p>
                        <h5>请将您的简历发送至： <a href="mailto:jobs@yunshipei.com">jobs@yunshipei.com</a></h5>
                      </div>
                    </div>
                  </div>
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-3'}">
                        iOS开发工程师
                      </h4>
                    </div>
                    <div id="do-not-say-3" class="am-panel-collapse am-collapse">
                      <div class="am-panel-bd">
                        <h5>职位描述：</h5>
                        <p>
                          有iOS开发项目经验；
                        </p>
                        <p>
                          拥有文档能力、有进程/多线程编程经验；
                        </p>
                        <p>
                          拥有良好的代码规范，熟悉TCP/IP，HTTP等网络协议；
                        </p>
                        <p>
                          能够对iOS手机不同分辨率、不同屏幕大小的界面进行适配；
                        </p>
                        <p>
                          有iOS底层开发经验；
                        </p>
                        <p>
                          熟悉html。
                        </p>
                        <h5>请将您的简历发送至： <a href="mailto:jobs@yunshipei.com">jobs@yunshipei.com</a></h5>
                      </div>

                    </div>
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