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
.weui-flex{text-align: center;}
.placeholder{text-align: center;margin: 0 auto;
    display: inline-block;}
</style>
<body>
	<div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">所属单位</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="text"  placeholder="请输入所属单位">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">银行卡号</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="text"  placeholder="请输入银行卡号">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">身份证号码</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="tel"  placeholder="请输入身份证号码">
        </div>
      </div>
    </div>
    <div class="weui-cells__title" style="margin-top: 0;background: #fff;
    padding: 10px;color:#000;">身份证照片</div>
    <!-- 照片 -->
      <div class="weui-flex" style="margin-top: 30px;">
        <div class="weui-flex__item">
          <div class="placeholder">
              <div class="weui-uploader__input-box">
                <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">
              </div>
          </div>
        </div>
        <div class="weui-flex__item">
          <div class="placeholder">
              <div class="weui-uploader__input-box">
                <input id="uploaderInput" class="weui-uploader__input" type="file" accept="image/*" multiple="">
              </div>
          </div>
        </div>
      </div>
      <div class="weui-flex">
        <div class="weui-flex__item">
          <div class="placeholder">身份证正面</div>
        </div>
        <div class="weui-flex__item">
          <div class="placeholder">身份反正面</div>
        </div>
      </div>
    <div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary">确定</a>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>
</body>
</html>