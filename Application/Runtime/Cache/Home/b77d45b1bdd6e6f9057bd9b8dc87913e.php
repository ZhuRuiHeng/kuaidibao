<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-客服中心</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
</head>
<style>
.weui-cells{margin-top: 0;}
.weui-uploader__input-box:after, .weui-uploader__input-box:before{content:none;}
</style>
<body>
	<div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        	<div class="weui-cell__hd"><label class="weui-label">企业名称</label></div>
	        <div class="weui-cell__bd">
	          	<input class="weui-input" type="text" placeholder="请输入企业名称">
	        </div>
      </div>
      <div class="weui-cell">
        	<div class="weui-cell__hd"><label class="weui-label">企业地址</label></div>
	        <div class="weui-cell__bd">
	          	<input class="weui-input" type="text" placeholder="请选择企业地址">
	        </div>
      </div>
      <div class="weui-cell">
        	<div class="weui-cell__hd"><label class="weui-label">营业执照</label></div>
	        <div class="weui-cell__bd">
	          	<input class="weui-input" type="text" placeholder="请输入企业名称">
	        </div>
      </div>
      <div class="weui-cell">
			<div class="weui-uploader__input-box" style="background:url(https://cn.vuejs.org/images/logo.png) no-repeat;background-size: cover;
">
            	<input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">
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