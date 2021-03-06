<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-首页</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
</head>
<style>
	.header{height: 200px;width: 100%;display: block;background: url(/kuaidi/Public/images/banner.png) no-repeat;background-size: cover;}
	.placeholder {
        margin: 5px;
        padding: 0 10px;
        background-color: #ebebeb;
        height: 6.3em;
        line-height: 6.3em;
        text-align: center;
        color: #cfcfcf;
        border-radius: 9px;
        position: relative;
     }
     .placeholder span{
     	position: absolute;
     	top: 5px;
	    left: 12px;
	    height: 20px;
	    line-height: 20px;
	    color: #fff;
     }
     .placeholder img{vertical-align: middle;width: 53px;}
     .placeholder.one{background: #56ABE1}
     .placeholder.two{background: #81D863}
     .placeholder.three{background: #9D9BFF}
     .placeholder.four{background: #FEBA67}
     .placeholder.five{background: #58E1E7}
     .placeholder.six{background: #F96D6C}
    </style>
<body>
	<!-- 头部 -->
	<header class="header">
		
	</header>
	<!-- 6宫格 -->
	<div class="weui-flex">
      <div class="weui-flex__item" onclick="javascript:window.location.href='<?php echo U('Index/fajian');?>'">
      	<div class="placeholder one">
      		<span>发件</span>
      		<img src="/kuaidi/Public/images/fa.png" alt="">
      	</div>
      </div>
      <div class="weui-flex__item" onclick="javascript:window.location.href='<?php echo U('Index/shoujian');?>'">
      	<div class="placeholder two">
      		<span>收件</span>
      		<img src="/kuaidi/Public/images/shou.png" alt="">
      	</div>
      </div>
    </div>
    <div class="weui-flex">
      <div class="weui-flex__item" onclick="javascript:window.location.href='<?php echo U('Index/liuzhuang');?>'">
      	<div class="placeholder three">
      		<span>流转</span>
      		<img src="/kuaidi/Public/images/liuzhuang.png" alt="">
      	</div>
      </div>
      <div class="weui-flex__item" onclick="javascript:window.location.href='<?php echo U('Index/jieshou-xiangzi');?>'">
      	<div class="placeholder four">
      		<span>回收</span>
      		<img src="/kuaidi/Public/images/huishou.png" alt="">
      	</div>
      </div>
    </div>
    <div class="weui-flex">
      <div class="weui-flex__item" onclick="javascript:window.location.href='<?php echo U('Index/wode');?>'">
      	<div class="placeholder five">
      		<span>个人中心</span>
      		<img src="/kuaidi/Public/images/gerenzhongxin.png" alt="">
      	</div>
      </div>
      <div class="weui-flex__item" onclick="javascript:window.location.href='<?php echo U('Index/kefu');?>'">
      	<div class="placeholder six">
      		<span>客服</span>
			<img src="/kuaidi/Public/images/kefu.png" alt="">
      	</div>
      </div>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>
</body>
</html>