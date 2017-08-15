<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-注册</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
</head>
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.weui-cells{margin-top:0; }
</style>
<body>
	<div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">用户名</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="text"  placeholder="请输入用户名">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">密码</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="text"  placeholder="请输入密码">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">手机号</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="tel"  placeholder="请输入手机号">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode">
        <div class="weui-cell__hd">
          <label class="weui-label">验证码</label>
        </div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="tel" placeholder="请输入手机号">
        </div>
        <div class="weui-cell__ft">
          <button class="weui-vcode-btn" style="color:#128BDA">获取验证码</button>
        </div>
      </div>
    </div>
    <label for="weuiAgree" class="weui-agree">
	      <input id="weuiAgree" type="checkbox" class="weui-agree__checkbox">
	      <span class="weui-agree__text">
	        阅读并同意<a href="javascript:void(0);" style="color: #128BDA">《用户协议规则》</a>
	      </span>
	</label>
	<div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary">下一步</a>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>
</body>
</html>