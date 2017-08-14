<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="renderer" content="webkit">
  <meta content="yes" name="apple-mobile-web-app-capable">
  <meta content="black" name="apple-mobile-web-app-status-bar-style">
  <meta content="telephone=no" name="format-detection">
  <meta name="msapplication-tap-highlight" content="no">
  <meta content="email=no" name="format-detection" />
  <meta name="keywords" content="装修不将就，生活家装饰，新房整装、旧房改造" />
  <meta name="description" content="" />
  <title>案例详情</title>
  <link rel="stylesheet" href="/public/css/amazeui.css" />
  <link rel="stylesheet" href="/public/css/common.min.css" />
  <link rel="stylesheet" href="/public/css/example.min.css" />
  <link rel="stylesheet" type="text/css" href="/public/css/add.css">
</head>
<body>
  <!-- 弹窗 -->
    <!-- 1 -->
    <div id='tanchuang1' class="boxs">
       <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{"animation":"slide","controlNav":"thumbnails"}' >
          
          <ul class="am-slides" >
              <?php if(is_array($img["one"])): foreach($img["one"] as $key=>$v): ?><li data-thumb="<?php echo ($v); ?>">
                    <img src="<?php echo ($v); ?>">
                </li><?php endforeach; endif; ?>
              <!-- <li data-thumb="/public/images/zx2.jpg">
                  <img src="/public/images/zx2.jpg">
                 
              </li>
              <li data-thumb="/public/images/zx3.jpg">
                  <img src="/public/images/zx3.jpg">  
              </li>
              <li data-thumb="/public/images/zx4.jpg">
                  <img src="/public/images/zx4.jpg">
              </li> -->
          </ul>
      </div>
    </div>
  <script src="/public/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="/public/js/amazeui.js" charset="utf-8"></script>
  <script src="/public/js/common.js" charset="utf-8"></script>
  <!-- js弹窗 -->
  <script type="text/javascript" src="/public/js/layui.js"></script>
  
</body>
<script type="text/javascript">
    //轮播时间
      $(function(){  
          $('.am-sliders').flexslider({  
              playAfterPaused: 3000,  
              animation: "fade",  
              animationLoop: true,  
              smoothHeight: true,  
              animationSpeed: 3000  
          });  
      });  
      
</script>
</html>