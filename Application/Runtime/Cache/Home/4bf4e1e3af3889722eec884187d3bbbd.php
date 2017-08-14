<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>关于我们</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/about.min.css" />
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
          <h1 class="page-header-title">about us</h1>
        </div>
      </div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="../index.html">首页</a></li>
            <li class="am-active">联系我们</li>
          </ol>
        </div>
      </div>
    </div>


    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">路人甲</h2>
					<p class="section--description">
						中山市路人甲装饰工程有限公司办公室地址位于一代伟人孙中山先生的故乡中山，中山 中山市西区岐港路1号星晨广场二期缤城1号商业楼3A、5A、6A卡商铺，于2015年08月28日在中山工商局注册成立，注册资本为500万人民币元（万元），在公司发展壮大的2年里，我们始终为客户提供最好的产品、良好的技术支持、健全的售后服务，我公司主要经营承接：室内外装饰设计工程、园林绿化工程；商业策划；网络维护；网站设计。（依法须经批准的项目，经相关部门批准后方可开展经营活动。）(依法须经批准的项目，经相关部门批准后方可开展经营活动)〓，我们有最好的产品和专业的销售和技术团队，我公司是中山装饰公司装饰设计公司黄页行业内知名企业，如果您对我公司的产品服务有兴趣，期待您在线留言或者来电咨询
					</p>
				</div>

        <!--about-container start-->
        <div class="about-container">
          <div class="am-g">
            <div class="am-u-md-6">
              <div class="our-company-text">
                <h3>关于路人甲你需要知道哪些？</h3>
                <p>
									云适配(AllMobilize Inc.) 是全球领先的HTML5企业移动化解决方案供应商，由前微软美国总部IE浏览器核心研发团队成员及移动互联网行业专家在美国西雅图创立，并获得了微软创投的扶持以及晨兴资本、IDG资本、天创资本等国际顶级风投机构的投资。
								</p>
                <p>
                  从2012年至今，云适配的开放技术平台已经吸引了超过40万开发者加入；云适配跨屏云也成功应用于超过30万家企业网站，包括微软、联想等世界500强企业，光明网、中国青年报等知名媒体，清华、北大、中科大等知名大学，以及中国政府网、中国共产党网等政府机构。2014年6月，比尔·盖茨先生访华时特地观看了云适配的技术演示，并给予高度的赞赏。
  							</p>
              </div>
            </div>

            <div class="am-u-md-6">
              <div class="our-company-quote">
                <div class="am-g">
                  <div class="am-u-md-6">
                    <div class="our-company-img">
                      <img src="/public/images/about/ben.jpg" alt="" />
                    </div>
                  </div>

                  <div class="am-u-md-6">
                    <p class="our-company-brief">
                      国家“千人计划”特聘专家、中国企业级HTML5产业联盟主席、HTML5国际标准制定者之一、微软总部IE浏览器核心研发,成功发布了IE8、IE9、IE10,参与了下一代互联网标准HTML5国际标准制定以及IE中HTML5引擎的设计。
                    </p>
                    <div class="our-company-quote_author"><strong>陈本峰 Ben</strong><span>云适配创始人CEOy</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--about-container end-->
      </div>
    </div>


    <hr class="section_divider -narrow">


    <div class="section">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">我们的宗旨</h2>
          <p class="section--description">
            让人们无论使用任何设备都能安全高效获取信息
            <br>One Web，Any Device
          </p>
        </div>

        <!--about-container start-->
        <div class="about-container">
          <div class="our-mission">
            <div class="am-g">
              <div class="am-u-md-3">
                <div class="our_mission--item">
									<div class="figure our_mission--item_media"><img src="/public/images/about/f02.jpg" alt=""></div>
									<h3 class="our_mission--item_title">品质</h3>
									<div class="our_mission--item_body">
										<p>
											全球领先的HTML5解决方案供应商，安全高效解决企业移动化
										</p>
										<ul>
											<li>快捷的移动适配开发</li>
											<li>统一的办公通讯门户</li>
											<li>完善的安全管理平台</li>
										</ul>
									</div>
								</div>
              </div>

              <div class="am-u-md-3">
                <div class="our_mission--item">
									<div class="figure our_mission--item_media"><img src="/public/images/about/f03.jpg" alt=""></div>
									<h3 class="our_mission--item_title">责任</h3>
									<div class="our_mission--item_body">
										<p>
											国产最流行的开源HTML5前端框架，组件丰富，为HTML5开发加速
										</p>
										<ul>
											<li>持续改进 </li>
											<li>追求卓越品质</li>
											<li>为顾客创造价值</li>
										</ul>
									</div>
								</div>
              </div>

              <div class="am-u-md-3">
                <div class="our_mission--item">
									<div class="figure our_mission--item_media"><img src="/public/images/about/f04.jpg" alt=""></div>
									<h3 class="our_mission--item_title">诚信</h3>
									<div class="our_mission--item_body">
										<p>
											全球领先的HTML5解决方案供应商，安全高效解决企业移动化
										</p>
										<ul>
											<li>平等包容</li>
											<li>互利共赢</li>
											<li>与事业伙伴同成长</li>
										</ul>
									</div>
								</div>
              </div>

              <div class="am-u-md-3">
                <div class="our_mission--item">
									<div class="figure our_mission--item_media"><img src="/public/images/about/f01.jpg" alt=""></div>
									<h3 class="our_mission--item_title">责任</h3>
									<div class="our_mission--item_body">
										<p>
											全球领先的HTML5解决方案供应商，安全高效解决企业移动化
										</p>
										<ul>
											<li>快捷的移动适配开发</li>
											<li>统一的办公通讯门户</li>
											<li>完善的安全管理平台</li>
										</ul>
									</div>
								</div>
              </div>
            </div>
          </div>
        </div>
        <!--about-container end-->
      </div>
    </div>



    <div class="section" style="margin-top:0px;background-image: url('/public/images/pattern-light.png');">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">我们的团队</h2>
          <p class="section--description">
            成员既有超级学霸（来自Harvard、Google、香港科技大学、中国科技大学），
            <br>也有来自行业的技术大拿。
          </p>
        </div>

        <!--about-container start-->
        <div class="about-container">
          <div class="our-team">
            <div class="am-g">
              <div class="am-u-md-3">
                <div class="team-box">
                  <div class="our-team-img">
                    <img src="/public/images/about/001.jpg" alt="" />
                  </div>
                  <div class="team_member--body">
										<h3 class="team_member--name">John Holland</h3>
										<span class="team_member--position">Chief Executive Officer</span>
										<span class="team_member--email">
											<a href="">john@financed.com</a>
										</span>
										
									</div>
                </div>
            </div>

            <div class="am-u-md-3">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/002.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                  
                </div>
              </div>
            </div>


            <div class="am-u-md-3">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/003.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                  
                </div>
              </div>
            </div>

            <div class="am-u-md-3">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/004.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                 
                </div>
              </div>
            </div>

            <div class="am-u-md-3">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/005.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                  
                </div>
              </div>
            </div>

            <div class="am-u-md-3">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/006.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                 
                </div>
              </div>
            </div>

            <div class="am-u-md-3">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/007.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                 
                </div>
              </div>
            </div>

            <div class="am-u-md-3 am-u-end">
              <div class="team-box">
                <div class="our-team-img">
                  <img src="/public/images/about/008.jpg" alt="" />
                </div>
                <div class="team_member--body">
                  <h3 class="team_member--name">John Holland</h3>
                  <span class="team_member--position">Chief Executive Officer</span>
                  <span class="team_member--email">
                    <a href="">john@financed.com</a>
                  </span>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
        <!--about-container end-->
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="section--header">
        <h2 class="section--title">客户评价</h2>
        <p class="section--description">
          金龙集团为一家微型跨国企业，在全球有50家工厂，办公人员有近5000人，移动信息化选型之路是摸着石头过河，最终采用了云适配的整体解决方案，在移动端也有了像PC端一样的统一办公门户
        </p>
      </div>

      <!--about-container start-->
      <div class="about-container">
        <div class="our-customer-say">
          <div class="am-g">
            <div class="am-u-md-4">
              <div class="our-customer-say-box">
                <div class="our-customer-say-content">
                  <p>光明网曾考虑过通过原生App来实现移动化，但是由于无法复用原始业务流程和数据就放弃了，直到选用了云适配整体解决方案后，可以很方便的在Enterplorer上使用一个帐号登录我们的系统，通过VPN随时进入内网。现在已经把我们的邮件系统，CMS内容管理系统都非常好的融合到了一起。</p>
                </div>
                <div class="our-customer-say-title">
                  <figure>
                    <img src="/public/images/about/tz_pic_active.png" alt="">
                  </figure>
                  <strong>光明网 CTO</strong>
                  <span>屠志</span>
                </div>
              </div>
            </div>

            <div class="am-u-md-4">
              <div class="our-customer-say-box">
                <div class="our-customer-say-content">
                  <p>光明网曾考虑过通过原生App来实现移动化，但是由于无法复用原始业务流程和数据就放弃了，直到选用了云适配整体解决方案后，可以很方便的在Enterplorer上使用一个帐号登录我们的系统，通过VPN随时进入内网。现在已经把我们的邮件系统，CMS内容管理系统都非常好的融合到了一起。</p>
                </div>
                <div class="our-customer-say-title">
                  <figure>
                    <img src="/public/images/about/tz_pic_active.png" alt="">
                  </figure>
                  <strong>光明网 CTO</strong>
                  <span>屠志</span>
                </div>
              </div>
            </div>

            <div class="am-u-md-4">
              <div class="our-customer-say-box">
                <div class="our-customer-say-content">
                  <p>光明网曾考虑过通过原生App来实现移动化，但是由于无法复用原始业务流程和数据就放弃了，直到选用了云适配整体解决方案后，可以很方便的在Enterplorer上使用一个帐号登录我们的系统，通过VPN随时进入内网。现在已经把我们的邮件系统，CMS内容管理系统都非常好的融合到了一起。</p>
                </div>
                <div class="our-customer-say-title">
                  <figure>
                    <img src="/public/images/about/tz_pic_active.png" alt="">
                  </figure>
                  <strong>光明网 CTO</strong>
                  <span>屠志</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!--about-container end-->
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
</body>

</html>