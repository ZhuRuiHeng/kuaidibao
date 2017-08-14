<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>路人甲</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/index.min.css" />
  <link rel="stylesheet" type="text/css" href="/Public/css/iconfont.css">
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
    <style type="text/css">
      .nav-contain .nav-inner .am-nav li{padding: 0}
      .nav-contain{background: #3a3a3a;color: #fff;}
      .nav-contain .nav-inner .am-nav li.active{background-color: #f4a100;}
      .nav-contain .nav-inner .am-nav li a{color: #fff;padding: 20px 10px;}
      .nav-contain .nav-inner .am-nav li a:hover{background: #f9be00;color: #fff!important}
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
                    <li <?php if(($num == '1') or ($num == '')): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'1'));?>" class="" >首页</a></li>
                    <li <?php if($num == '2'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'2'));?>" class="" >客户案例</a></li>
                    <li <?php if($num == '3'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'3'));?>" class="" >关于我们</a></li>
                    <li <?php if($num == '4'): ?>class="active"<?php endif; ?>><a href="<?php echo U('Index/num',array('num'=>'4'));?>" class="" >联系我们</a></li>
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
      <div class="index-page">
        <div data-am-widget="tabs" class="am-tabs am-tabs-default">
          <!-- 轮播图 -->
          <div class="am-tabs-bd">
                <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
                    <ul class="am-slides">
                        <li>
                            <img src="/public/images/lunbo1.jpg">
                           
                        </li>
                        <li>
                            <img src="/public/images/lunbo2.jpg">
                           
                        </li>
                        
                        <li>
                            <img src="/public/images/lunbo4.jpg">
                           
                        </li>
                    </ul>
                </div>
          </div>
          <script type="text/javascript">
            $(function(){  
                $('.am-slider').flexslider({  
                    playAfterPaused: 3000,  
                    animation: "fade",  
                    animationLoop: true,  
                    smoothHeight: true,  
                    animationSpeed: 4000  
                });  
            });   
          </script>
          <!-- 轮播图结束 -->
          <div class="liucheng">
              <div class="section1">
                  <div class="section--header">
                    <h2 class="section--title" style="text-align: center;">服务流程</h2>
                  </div>
              </div>
              <!-- 服务流程 -->
              <ul class="am-tabs-nav am-cf index-tab tab-liucheng">
                <li class="a">
                  <a href="javascript:;">
                    <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                      <i class="iconfont icon-goutongxuanzhong"></i>
                    </div>
                    <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                      <strong class="promo_slider_nav--item_title">量房沟通</strong>
                      <p class="promo_slider_nav--item_description">公司量房设计</p>
                    </div>
                  </a>
                </li>
                <li class="a">
                  <a href="javascript:;">
                    <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                      <i class="iconfont icon-duibi"></i>
                    </div>
                    <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                      <strong class="promo_slider_nav--item_title">对比方案</strong>
                      <p class="promo_slider_nav--item_description">对比装修方案</p>
                    </div>
                  </a>
                </li>
                <li class="">
                  <a href="javascript:;">
                    <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                      <i style="font-size: 44px;" class="iconfont icon-yzjungong"></i>
                    </div>
                    <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                      <strong class="promo_slider_nav--item_title">竣工验收</strong>
                      <p class="promo_slider_nav--item_description">验收通过全屋装修指标</p>
                    </div>
                  </a>
                </li>
                <li class="">
                  <a href="javascript:;">
                    <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                      <i class="iconfont icon-hetongqianding"></i>
                    </div>
                    <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                      <strong class="promo_slider_nav--item_title">售后保障</strong>
                      <p class="promo_slider_nav--item_description">进行一年的售后保障服务</p>
                    </div>
                  </a>
                </li>
              </ul>
          </div>
        </div>

      </div>
    </div>
    <!-- 我们的优势 -->
    <style type="text/css">
      .am-u-md-3 .features_item img{width: 100%}
    </style>
    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">核心优势</h2>
					<p class="section--description">
						
					</p>
				</div>

        <!--index-container start-->
        <div class="index-container">
          <div class="am-g">
            <div class="am-u-md-3">
              <div class="features_item">
								<img src="/public/images/zhiliang.jpg" alt="">
								<h3 class="features_item--title">工程质量保证</h3>
								<p class="features_item--text">
									路人甲装饰有限公司是由国内大型房地产公司及金融投资机构投资的大型家居装饰企业公司拥有雄厚的经济实力
								</p>
							</div>
            </div>
            <div class="am-u-md-3">
              <div class="features_item">
								<img src="/public/images/jianguan.jpg" alt="">
								<h3 class="features_item--title">工程监管保证</h3>
								<p class="features_item--text">
									路人甲施工工艺严格执行GB50210，GB50327国家标准，项目经理、班长、工人节点管理，培训上岗。
								</p>
							</div>
            </div>
            <div class="am-u-md-3">
              <div class="features_item">
								<img src="/public/images/tuandui.jpg" alt="">
								<h3 class="features_item--title">施工团队保证</h3>
								<p class="features_item--text">
									“为实现企业目标而努力工作的路人甲所有员工”就是奋斗者。路人甲的以人为本体现在“以团结奋斗者为本”，
							</div>
            </div>
            <div class="am-u-md-3">
              <div class="features_item">
								<img src="/public/images/huanbao.jpg" alt="">
								<h3 class="features_item--title">环保材料保证</h3>
								<p class="features_item--text">
									路人甲一直坚持使用材料最好的经营理念，永远比竞争对手的材料高一个档次。所有材料环保等级达到E1级。
								</p>
							</div>
            </div>
          </div>
      </div>
        <!--index-container end-->
      </div>
    </div>

  </div>

  <!--个性化定制  色彩任你搭-->
  <div class="promo_detailed">
    <div class="promo_detailed-container" >
      <div class="container">
        <div class="am-g">
        <!-- 左侧 -->
          <div class="am-u-md-6">
            <div class="ui-viewer fixed">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="case1">
                  <div class="view on">
                    <img src="http://www.mehome520.com/templets/cs/img/diy/bedroom/blank/bedroom-blank.jpg" alt="" style="display: inline;">
                    <div class="lay">
                      <div class="furniture">
                        <img src="http://www.mehome520.com/templets/cs/img/diy//bedroom/comp/基础家具.png" alt="" >
                      </div>
                      <div class="floor">
                        <img src="http://www.mehome520.com/templets/cs/img/diy//bedroom/comp/木地板-大自然-T06426.png" alt="">
                      </div>
                      <div class="wall">
                        <img src="http://www.mehome520.com/templets/cs/img/diy//bedroom/comp/乳胶漆-灰蓝色.png" alt="" >
                      </div>
                      <div class="coping">
                        <img src="http://www.mehome520.com/templets/cs/img/diy//bedroom/comp/平板顶角线.png" alt="" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 右侧 -->
          <div class="am-u-md-6">
            <ul class="promo_detailed--list">
              <li class="promo_detailed--list_item">
                <dl>
                  <dt>地砖</dt>
                  <dd>
                    <span>234</span>
                    <span>234</span>
                    <span>234</span>
                    <span>234</span>
                    <span>234</span>
                  </dd>
                </dl>
              </li>
              <li class="promo_detailed--list_item">
                <dl>
                  <dt>木地板</dt>
                  <dd>
                    提供实时监控平台，日志和报告系统，帮助管理员对系统的整体情况有全面的了解。
                  </dd>
                </dl>
              </li>
              <li class="promo_detailed--list_item">
                <dl>
                  <dt>壁纸</dt>
                  <dd>
                    支持在线应用、适配应用、本地应用等多种应用类型。使用户可以最便捷的获取企业的各种应用。
                  </dd>
                </dl>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!--promo_detailed end-->
  <style type="text/css">
    .index-container .am-g .am-u-md-3 p.zx_img img{width: 100%;cursor: pointer;}
    .index-container .service_item{padding: 20px 7px 18px;}
  </style>
  <!-- 我们的服务 -->
  <div class="section"  style="border-bottom: 1px solid #e9e9e9;">
    <div class="container">
      <div class="section--header">
        <h2 class="section--title">服务承诺</h2>
        <p class="section--description">
          统一配置专业、先进施工工具；严格按照工艺标准施工，实时监控施工现场，自主反馈工程进度。全程一对一服务
        </p>
      </div>
      <!--装修效果图-->
      <div class="index-container">
        <div class="am-g">
          <div class="am-u-md-3">
            <div class="service_item">
              <p class="zx_img"><img class="normal-logo" src="/public/images/zx1.jpg" alt="" style="display: inline;"></p>
              <h3 class="service_item--title">你的客厅足够大吗？</h3>
              <div class="service_item--text">
								<p>休闲娱乐，休息区，孩子玩耍区，统统搞定</p>
							</div>
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item">
              <p class="zx_img"><img class="normal-logo" src="/public/images/zx2.jpg" alt="" style="display: inline;"></p>
              <h3 class="service_item--title">卧室空间你规划好了吗？  </h3>
              <div class="service_item--text">
								<p>东西放不下？好不容易有了自己的房子，但是空间怎么利用一直是个难题，特别是卧室，总是觉得东西没地方放。虽然只是用来睡觉的地方，但是大多数人也希望自己的卧室看起来能够清新整洁又不会太单调  </p>
							</div>
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item">
              <p class="zx_img"><img class="normal-logo" src="/public/images/zx3.jpg" alt="" style="display: inline;"></p>
              <h3 class="service_item--title">琴棋书画，游戏区...</h3>
              <div class="service_item--text">
								<p>办公流程太多，搜索框输入（或语音输入），可以快速找到核心内容</p>
							</div>
            </div>
          </div>

          <div class="am-u-md-3">
            <div class="service_item">
              <p class="zx_img"><img class="normal-logo" src="/public/images/zx4.jpg" alt="" style="display: inline;"></p>
              <h3 class="service_item--title">现代简约客厅</h3>
              <div class="service_item--text">
								<p>不方便打字时，可以直接用语音输入想要的内容，使您的双手得到解放</p>
							</div>
             </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 内容结束 -->
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