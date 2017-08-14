<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-个人信息</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
</head>
<style>
.weui-cells{margin-top: 0;}
.weui-uploader__input-box:after, .weui-uploader__input-box:before{content:none;}
.upimgs .weui-cell__ft img{border-radius: 50%;
	-webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    width: 40px;
    height: 40px;}
    .weui-cell__ft input[type='file']{width: 100px;
    height: 40px;
    position: absolute;
    right: -2px;
    z-index: 2;
    opacity: 0;}
    .weui-cell__ft input[type='number']{height: 23px;
    border: none;text-align:right;}
</style>
<body>
	<div class="weui-cells">
          <a class="weui-cell weui-cell_access upimgs" href="javascript:;">
            <div class="weui-cell__bd">
              <p>头像</p>
            </div>
            <div class="weui-cell__ft">
            	<input type="file">
            	<img src="/kuaidi/Public/images/chenggong.png" alt="">
            </div>
          </a>
          <a class="weui-cell weui-cell_access" href="javascript:;">
            <div class="weui-cell__bd">
              <p>用户名</p>
            </div>
            <div class="weui-cell__ft">
            	远航
            </div>
          </a>
          <a class="weui-cell weui-cell_access" href="javascript:;">
            <div class="weui-cell__bd">
              <p>手机号</p>
            </div>
            <div class="weui-cell__ft">
            	<input type="number" value="12312341234">
            </div>
          </a>
          <a class="weui-cell weui-cell_access" href="javascript:;">
            <div class="weui-cell__bd">
              <p>密码</p>
            </div>
            <div class="weui-cell__ft">
            	修改密码
            </div>
          </a>
          <a class="weui-cell weui-cell_access" href="javascript:;">
            <div class="weui-cell__bd">
              <p>微信</p>
            </div>
            <div class="weui-cell__ft">
            	未绑定
            </div>
          </a>
          <a class="weui-cell weui-cell_access" href="javascript:;">
            <div class="weui-cell__bd">
              <p>身份证</p>
            </div>
            <div class="weui-cell__ft">
            	已认证
            </div>
          </a>
        </div>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>
</body>
</html>