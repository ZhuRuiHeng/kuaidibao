<?php if (!defined('THINK_PATH')) exit();?><html lang="en" class="pixel-ratio-2 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>绑定文件</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.weui-dialog__btn{color:#000;}
</style>
</head>

<body>
	<div class="weui-cells weui-cells_form" style="margin-top: 0">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">微信号</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="text" placeholder="请输入微信号">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label class="weui-label">微信密码</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="text" placeholder="请输入微信号">
        </div>
      </div>
    </div>
	<!-- 按钮 -->
	<div class="demos-content-padded">
      <a href="javascript:;" id="show-confirm" class="weui-btn weui-btn_primary">确定</a>
    </div>
    <!-- 弹窗 -->
    <div id="tanchuang" style="display: none">
	    <div class="weui-mask weui-mask--visible"></div>
	    <div class="weui-dialog weui-dialog--visible">
	    	<div class="weui-dialog__bd">
				 <img width="85px" src="/kuaidi/Public/images/chenggong.png" alt="">
	    	</div>
	    	<div class="weui-dialog__hd">
	    		<strong class="weui-dialog__title">绑定成功</strong>
	    	</div>
	    	
	    	<div class="weui-dialog__ft">
	    		<a href="javascript:;" class="weui-dialog__btn default">取消</a>
	    		<a href="javascript:;" class="weui-dialog__btn primary">确定</a>
	    	</div>
	    </div>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
		$("#show-confirm").click(function(){
			$("#tanchuang").show();
		});
		$(".weui-dialog__btn").click(function(){
			$("#tanchuang").hide();
		})
	</script>

</body>
</html>