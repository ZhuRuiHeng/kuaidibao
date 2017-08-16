<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-收件人信息</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
	<link rel="stylesheet" href="/kuaidi/Public/css/jquery-weui.min.css">
</head>
<style>
.weui-cells{margin-top:0;}
.weui-vcode-btn{color:#128BDA}
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
</style>
<body>
	<div class="weui-cells weui-cells_form">
      <div class="weui-cell weui-cell_vcode" style="height: 44px;">
        <div class="weui-cell__hd">
          <label class="weui-label">收件人</label>
        </div>
        <div class="weui-cell__bd"> 
          <input class="weui-input number" type="text" placeholder="请输入收件人信息">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode" style="height: 44px;">
        <div class="weui-cell__hd">
          <label class="weui-label">手机号</label>
        </div>
        <div class="weui-cell__bd"> 
          <input class="weui-input number" type="tel" placeholder="请输入手机号">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="name" class="weui-label">地址</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input dizhi" id="start" type="text" value="" readonly="" placeholder="请选择地址">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode" style="height: 44px;">
        <div class="weui-cell__hd">
          <label class="weui-label">详细地址</label>
        </div>
        <div class="weui-cell__bd"> 
          <input class="weui-input number" type="text" placeholder="请输入详细地址">
        </div>
      </div>
    </div>
	<!-- 按钮 -->
	<div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary" id=zhuce>确定</a>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<!-- 地址插件 -->
	<script src="/kuaidi/Public/js/city-picker.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	$("#start").cityPicker({
      title: "选择出发地",
      onChange: function (picker, values, displayValues) {
        console.log(values, displayValues);
      }
    });
  // 注册

   
	</script>
</body>
</html>