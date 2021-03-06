<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-预约收取时间</title>
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
	<link rel="stylesheet" href="/kuaidi/Public/css/jquery-weui.min.css">
</head>
<style>
.weui-cells{margin-top:0; }
.weui-vcode-btn{color:#128BDA}
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
</style>
<body>
	<div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="time-format" class="weui-label">选择时间</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="time-format" type="text" value="" readonly="" placeholder="选择时间">
        </div>
      </div>
      <div class="weui-cell">
        <div class="weui-cell__hd"><label for="name" class="weui-label">地址</label></div>
        <div class="weui-cell__bd">
          <input class="weui-input" id="start" type="text" value="" readonly="" placeholder="请选择地址">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode" style="height: 44px;">
        <div class="weui-cell__hd">
          <label class="weui-label">详细地址</label>
        </div>
        <div class="weui-cell__bd">
          <input class="weui-input" type="tel" placeholder="请输入详细地址">
        </div>
      </div>
    </div>
	<!-- 按钮 -->
	<div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary">确定预约</a>
    </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<!-- 地址插件 -->
	<script src="/kuaidi/Public/js/city-picker.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
      //地址
	   $("#start").cityPicker({
        title: "选择出发地",
        onChange: function (picker, values, displayValues) {
          console.log(values, displayValues);
        }
      });
      //时间
       $("#time-format").datetimePicker({
        title: '自定义格式',
        yearSplit: '年',
        monthSplit: '月',
        dateSplit: '日',
        times: function () {
          return [  // 自定义的时间
            {
              values: (function () {
                var hours = [];
                for (var i=0; i<24; i++) hours.push(i > 9 ? i : '0'+i);
                return hours;
              })()
            },
            {
              divider: true,  // 这是一个分隔符
              content: '时'
            },
            {
              values: (function () {
                var minutes = [];
                for (var i=0; i<59; i++) minutes.push(i > 9 ? i : '0'+i);
                return minutes;
              })()
            },
            {
              divider: true,  // 这是一个分隔符
              content: '分'
            }
          ];
        },
        onChange: function (picker, values, displayValues) {
          console.log(values);
        }
      });
	</script>
</body>
</html>