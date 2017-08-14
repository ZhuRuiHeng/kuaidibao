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
      <div class="tupian"><img src="/public/images/about1.jpg" style="width: 100%"></div>
      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active">关于我们</li>
          </ol>
        </div>
      </div>
    </div>


   <!--  <div class="section" style="background-image: url(/public/images/pattern-light.png);">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">路人甲</h2>
					<p class="section--description">
						中山市“路人甲”装饰工程有限公司办公室地址位于一代伟人孙中山先生的故乡中山，中山 中山市西区岐港路1号星晨广场二期缤城1号商业楼3A、5A、6A卡商铺，于2015年08月28日在中山工商局注册成立，注册资本为500万人民币元（万元），在公司发展壮大的2年里，我们始终为客户提供最好的产品、良好的技术支持、健全的售后服务，我公司主要经营承接：室内外装饰设计工程、园林绿化工程；商业策划；网络维护；网站设计。（依法须经批准的项目，经相关部门批准后方可开展经营活动。）(依法须经批准的项目，经相关部门批准后方可开展经营活动)，我们有最好的产品和专业的销售和技术团队，我公司是中山装饰公司装饰设计公司黄页行业内知名企业，如果您对我公司的产品服务有兴趣，期待您在线留言或者来电咨询
					</p>
				</div>
      </div>
    </div> -->


    <!-- <hr class="section_divider -narrow"> -->


    <div class="section">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">我们的设计理念</h2>
          <p class="section--description" style="text-align: left">
             1、路人甲认为室内设计是设计“具有视觉限定的人工环境，以满足生理和精神上的要求、保障生活、生产活动的需求”室内设计也是“功能、空间形体、工程技术和艺术的相互依存和紧密结合”
            <br>2、路人甲秉持创造室内环境中给人舒适和安全的装饰理念，运用物质技术手段和建筑设计原理，创造功能合理、舒适优美、性价比高、满足人们物质和精神生活需要的室内环境。
          </p>
        </div>
      </div>
    </div>



    <div class="section" style="margin-top:0px;background-image: url('/public/images/pattern-light.png');">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">我们的团队</h2>
          <p class="section--description" style="text-align: left">
            中山市路人甲装饰工程有限公司于2015年8月28日成立，自成立以来我们的团队是一群有“新”想法的90后年轻人，我们从用户需求入手、深度优化硬装、软装和定制家具服务链，用三位一体式设计确保整装效果和谐统一，通过数据化交叉工程方式，剔除了传统模式营销、人力、渠道等叠加成本。未来我们将继续坚持“新理念”整合资源做让您更放心、更完美、更划算的家装生活！
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="section--header">
        <h2 class="section--title">家装小知识</h2>
        <p class="section--description">
         
        </p>
      </div>

      <!--about-container start-->
      <div class="about-container">
        <div class="our-customer-say">
          <div class="am-g">
            <div class="am-u-md-4">
              <div class="our-customer-say-box">
                <div class="our-customer-say-title">
                  <figure>
                    <img src="/public/images/db1.jpg" alt="">
                  </figure>
                  <strong>家装地砖的种类 你知道多少？</strong>
                  <span>一 路人甲</span>
                </div>
                <div class="our-customer-say-content">
                  <p> 地砖是一种地面装饰材料，也叫地板砖。用黏土烧制而成。规格多种。质坚、耐压耐磨，能防潮。有的经上釉处理，具有装饰作用。多用于公共建筑和民用建筑的地面和楼面。</p>
                </div>
              </div>
            </div>

            <div class="am-u-md-4">
              <div class="our-customer-say-box">
                <div class="our-customer-say-title">
                  <figure>
                    <img src="/public/images/db2.jpg" alt="">
                  </figure>
                  <strong>一分钟教会你 瓷砖选购小技巧</strong>
                  <span>一 路人甲</span>
                </div>
                <div class="our-customer-say-content">
                  <p> 家庭装修中，瓷砖的用量还是挺大的，然而不管是哪一种瓷砖，挑选的方法基本类似：一看、二听、三掂、四滴水、五尺量。这样简简单单的五步，让大家分分钟学会瓷砖选购。</p>
                </div>
              </div>
            </div>

            <div class="am-u-md-4">
              <div class="our-customer-say-box">
                <div class="our-customer-say-title">
                  <figure>
                    <img src="/public/images/db3.jpg" alt="">
                  </figure>
                  <strong>教你识别四种常见木料板材</strong>
                  <span>一 路人甲</span>
                </div>
                <div class="our-customer-say-content">
                  <p>装修自然离不开木工用料的主材：细木工板、集成板、刨花板、密度板、饰面板等各种板材，1、细木工板：防潮效果好，不能直接刷漆
                  2、集成板：不易变形...
                  3、刨花板是天然木材粉碎成颗粒状后，经压制成板，是目前橱柜的主要材料。
                  4、饰面三夹板：省事又便宜
                  5、多层板，又叫三夹板和三合板，层数不同叫法不同，它的优劣主要看原料。
                  </p>
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