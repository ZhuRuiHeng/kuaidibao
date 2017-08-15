<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-押金</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
</head>
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.weui-flex__item{margin: 0 10px;}
.weui-flex__item .placeholder.active{background: #128BDA;border:1px solid #128BDA;color:#fff;}
.placeholder{border:1px solid #ddd;text-align: center;padding: 10px;border-radius: 5px;}
</style>
<body>

	<div class="weui-cells__title" style="margin-top: 0;background: #fff;
    padding: 10px;color:#000;">请选择交付押金</div>
	<div class="weui-flex">
      <div class="weui-flex__item" data="100"><div class="placeholder">￥100</div></div>
      <div class="weui-flex__item" data="200"><div class="placeholder">￥200</div></div>
      <div class="weui-flex__item" data="300"><div class="placeholder">￥300</div></div>
    </div>
	<div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary">确认支付</a>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
		$(".weui-flex__item .placeholder").click(function(){
			$(".weui-flex__item .placeholder").removeClass("active");
			$(this).addClass("active");
		})
	</script>
</body>
</html>