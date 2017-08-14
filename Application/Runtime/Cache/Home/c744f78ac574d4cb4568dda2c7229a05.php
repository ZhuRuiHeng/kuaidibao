<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> 竣工验收</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/about.min.css" />
  <link rel="stylesheet" type="text/css" href="/public/css/add.css">
</head>
<style type="text/css">
  .page-header{background: url(/Public/images/about1.jpg) no-repeat;background-size: cover;}
  .section--title{ font-size: 16px!important;color:#000!important;text-align: left!important;font-weight: normal;}
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
      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li class="am-active"> 量房沟通</li>
          </ol>
        </div>
      </div>
    </div>




    <div class="section">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title" style="text-align:center!important;font-size: 30px!important;"> 路人甲装饰工程八大验收标准</h2>
          <h2 class="section--title">一、给水、排水管道安装工程验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
            管道、管件质量应符合现行标准；阀门安装应端正， 开关应灵活；经通水试压，所有管道、阀门、接头应无渗水、漏水现象。
          </p>
          <h2 class="section--title">二、电气工程验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
            漏电开关安装正确、使用正常；电气器件、设备的安装固定应牢固、平整；电器通电试验、灯具试亮及灯具控制性能良好； 开关、插座、终端盒等器件外观完好，绝缘器件无裂纹，安装牢固、平正，安装方式符合规定；并列安装的开关、 插座终端盒的偏差，暗装开关、插座、终端盒的面板、盒周边的间隙符合规定；弱电系统功能权齐全，满足使用要求，器具安装牢固、平正。
          </p>
          <h2 class="section--title">三、裱糊工程验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
            裱糊工程完工并干燥后，方可验收；验收时，应检查材料品种、颜色、图案是否符合设计要求；壁纸、墙布必须粘贴牢固，表面色泽一致，不得有气泡、空鼓、裂缝、皱折和斑污，斜视时无胶痕；表面平整，无波纹起伏，壁纸、墙布与挂镜线、顶角线、贴脸板、踢脚板、护墙板压条， 窗帘挂盒紧接，距离1.5米处，目测不得有明显缝隙；各幅拼接横平竖直，拼接处花纹、图案吻合，不离缝，不搭接；阴阳转角垂直，棱角分明，阴角处搭接顺光，阳角处无接缝；壁纸、墙布边缘平直整齐，不得有纸毛、飞刺；不得有漏贴、补贴和脱层等。
          </p>
          <h2 class="section--title">四、花饰工程验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
            花饰工程完工并干燥后，方可验收；验收花饰工程，应检查花饰的品种、规格、图案是否符合设计要求；花饰应安装牢固，其质量要求及允许偏差，应符合：条形花饰的水平和垂直允许偏差，全长不得大于3毫米；单独花饰位置的允许偏差，不得大于10毫米；花饰表面应光洁，图案清晰，接缝严密，不得有裂缝、翘曲、缺棱掉角等缺陷；裱花表面应光洁，图案清晰、无裂缝。
          </p>
          <h2 class="section--title">五、吊顶工程验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
            吊顶工程所用材料的品种、规格、颜色以及基层构造、固定方法应符合设计有关规范要求；罩面板与 龙骨 应连接紧密，表面应平整，不得有污染、折裂、缺棱掉角、锤伤等缺陷，接缝应均匀一致，粘贴的罩面板不得有脱层， 胶合板 不得有刨透之处；搁置的罩面板不得有漏、透、翘角现象。
          </p>
          <h2 class="section--title">六、木制地板安装验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
            材料应符合住户要求及现行产品标准；地板安装(粘结)应牢固、无声响，无松动；木地板表面应刨平磨光，无刨痕、刨渣和毛刺等现象，涂清漆的地板其图案(木纹)应清晰；拼花地板接缝应对齐，缝隙宽度一致，表面洁净，无溢胶现象；踢脚板与地板连接紧密；踢脚板上沿平直，全长高差应不大于±3毫米与墙面紧贴，无缝隙。
          </p>
          <h2 class="section--title">七、塑料板面层施工质量验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
           材料、色调、铺贴应符合住户要求；表面平整、光滑、无皱纹并不得翘边和鼓泡；色泽一致、接缝严密、四边顺直，脱胶处不得大于20毫米，其相隔间距不得小于500毫米；与管道结合处应严密、牢固、平整；踢脚板与塑料板连接紧密，踢脚板上沿平直，全长高差不大于±3毫米，与墙面紧贴，无缝隙。
          </p>
          <h2 class="section--title">八、板块面层施工质量验收标准</h2>
          <p class="section--description" style="text-align: left;font-size: 16px!important;color: #626262!important;">
           材质及图案符合住户要求，产品质量符合国家标准技术规定；铺贴应牢固、不松动，地面平整高差不大于0.5毫米；铺贴图案清晰，无玷污、浆痕；接缝平直，拉通缝检查，偏差不大于2毫米；接缝宽度不大于1.0毫米；块与块之间接缝高差不大于0.5毫米。
          </p>
        </div>
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