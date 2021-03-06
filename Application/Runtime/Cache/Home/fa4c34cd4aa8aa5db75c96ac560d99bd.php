<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>接收箱子</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
	<link rel="stylesheet" href="/kuaidi/Public/css/reset.css">
</head>
<style>
.weui-media-box__desc{ -webkit-line-clamp: 1;color:#000;}
.weui-media-box_appmsg .weui-media-box__hd{width: 80px;}
.weui-media-box__hd button{width: 100%;background-color: #128BDA;color:#fff;    padding: 10px;border-radius: 5px;}
.address{font-size: 15px;}
.weui-panel{margin-top:1px;}
</style>
<body>

	<div class="xz-list">
		<div class="weui-panel weui-panel_access" id="jieshou1">
			  <div class="weui-panel__bd">
				    <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
				      <div class="weui-media-box__bd">
				        <p class="weui-media-box__desc">
				        	预约时间
				        	<span class="time">14:00-15:00</span>
				        </p>
				        <p class="weui-media-box__desc address">
							深圳市宝安区xx路
				        </p>
				      </div>
				      <div class="weui-media-box__hd">
				        <button onclick="jieshou(this,1)">接收</button>
				      </div>
				    </a>
			   </div>
		</div>
		<div class="weui-panel weui-panel_access" id="jieshou2">
			  <div class="weui-panel__bd">
				    <a href="javascript:void(0);" class="weui-media-box weui-media-box_appmsg">
				      <div class="weui-media-box__bd">
				        <p class="weui-media-box__desc">
				        	预约时间
				        	<span class="time">14:00-15:00</span>
				        </p>
				        <p class="weui-media-box__desc address">
							深圳市宝安区xx路
				        </p>
				      </div>
				      <div class="weui-media-box__hd">
				        <button onclick="jieshou(this,2)">接收</button>
				      </div>
				    </a>
			   </div>
		</div>
	</div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
		function jieshou(obj,id){
			console.log(id);
			window.location.href="<?php echo U('Index/shoujian');?>?id="+id;
		}
	</script>
</body>
</html>