<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>注册</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/other.min.css" />
</head>
<body class="register-container">
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
    <div class="register-box">
      <form action="" class="am-form" data-am-validator>
        <fieldset>
          <legend>注册用户<p class="register-info">账号可以使用手机或者邮箱注册，但是仔细核对后，填入正确信息。</p></legend>

          <div class="am-form-group">
            <div class="am-g">
              <div class="am-u-md-2 am-padding-0 am-text-right">
                <label for="doc-vld-name-2" class="register-name">账号</label>
              </div>
              <div class="am-u-md-10">
                <input type="text" id="doc-vld-name-2" minlength="3"
                       placeholder="输入用户名（至少 3 个字符）" required/>
              </div>
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-g">
              <div class="am-u-md-2 am-padding-0 am-text-right">
                <label for="doc-vld-pwd-1" class="register-pwd">密码</label>
              </div>
              <div class="am-u-md-10">
                <input type="password" id="doc-vld-pwd-1" placeholder="6 位数字的银行卡密码" pattern="^\d{6}$" required/>
              </div>
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-g">
              <div class="am-u-md-2 am-padding-0 am-text-right">
                <label for="doc-vld-pwd-2">确认密码</label>
              </div>
              <div class="am-u-md-10">
                <input type="password" id="doc-vld-pwd-2" placeholder="请与上面输入的值一致" data-equal-to="#doc-vld-pwd-1" required/>
              </div>
            </div>
          </div>

          <div class="am-g">
            <div class="am-u-md-10">
              <button class="am-btn am-btn-secondary" type="submit">注册</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>

  </div>




  <script src="/public/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="/public/js/amazeui.js" charset="utf-8"></script>
</body>

</html>