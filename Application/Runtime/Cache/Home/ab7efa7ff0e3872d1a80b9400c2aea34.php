<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>我的二维码</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
</head>
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.center,.ewm{margin: 30px auto;text-align: center;}
.ewm img{
	width: 200px;
	height: 200px;
}
.center p{text-align: center;height: 36px;line-height: 36px;}
</style>
<body>

	<div class="center">
		<p>我的快递宝二维码</p>
	</div>
	<div class="ewm">
		<img src="http://ofmonkey.com/fun/ercode?text=http://192.168.1.29/kuaidi/home/index/login.html&level=L&scale=150&margin=0&isTrans=false" alt="我的快递宝二维码">
	</div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>
</body>
</html>