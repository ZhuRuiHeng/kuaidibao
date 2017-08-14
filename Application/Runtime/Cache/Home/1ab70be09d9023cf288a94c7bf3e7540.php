<?php if (!defined('THINK_PATH')) exit();?><html lang="en" class="pixel-ratio-2 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>丢失损坏报备</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.weui-cell__ft,.weui-cells__title{color:#000;}
.weui-cells{margin-top:0; }
{color: #fff;
    border: 1px solid #ddd;
    content: "";
    display: block;
    content: "EA08";
    font-size: 16px;
    box-sizing: border-box;}
    .weui-cells_radio .weui-check:checked+.weui-icon-checked:before {
    color: #fff;
    background-color: #128BDA;
}
.weui-cells_radio .weui-check:checked+.weui-icon-checked:before {
    display: block;
    content: "\EA08";
    color: #09bb07;
    font-size: 16px;
}
[class*=" weui-icon-"]:before, [class^=weui-icon-]:before {
    display: inline-block;
    margin-left: .2em;
    margin-right: .2em;
}
</style>
</head>

<body>
  <div class="bd">
      <div class="page__bd">
        <div class="weui-cells__title">选择类型</div>
        <div class="weui-cells">
          <a class="weui-cell weui-cell_access" href="javascript:;">
            <div class="weui-cell__bd">
              <p><span class="weui-icon-checked"></span>丢失</p>
            </div>
            <div class="weui-cell__bd">
              <p><span class="weui-icon-checked"></span>损坏</p>
            </div>
          </a>
        </div>
        <div class="weui-cells">
          <div class="weui-cell">
            <div class="weui-cell__bd">
              <p>箱子型号</p>
            </div>
            <div class="weui-cell__ft">数量</div>
          </div>
        </div>
        <div class="list">
          <div class="weui-cells">
          <div class="weui-cell">
            <div class="weui-cell__bd">
              <p>标题文字</p>
            </div>
            <div class="weui-cell__ft">说明文字</div>
          </div>
        </div>
        </div>
    </div>
  <div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary">确认收件</a>
  </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
	</script>
  
</body>
</html>