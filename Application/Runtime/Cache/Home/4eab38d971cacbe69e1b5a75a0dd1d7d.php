<?php if (!defined('THINK_PATH')) exit();?><html lang="en" class="pixel-ratio-2 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>扫码失败</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.center,.ewm{margin: 30px auto;text-align: center;}
.ewm img{
	width: 120px;
	height: 120px;
}
.center p{text-align: center;height: 36px;line-height: 36px;}

</style>
</head>

<body>
	<div class="ewm">
		<img src="/kuaidi/Public/images/shibai.png" alt="流转成功">
	</div>
	<div class="center">
		<p>扫码失败！</p>
    <p><a href="<?php echo U('Index/shoujian-xinxi');?>" style="color:#128BDA">请手动输入收件人信息</a></p>
	</div>
	<!-- 按钮 -->
	
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>

</body>
</html>