<?php if (!defined('THINK_PATH')) exit();?><html lang="en" class="pixel-ratio-2 retina ios ios-9 ios-9-1 ios-gt-8 ios-gt-7 ios-gt-6"><head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>调配请求</title>
  <link rel="stylesheet" href="/kuaidi/Public/css/reset.css">
  <link rel="stylesheet" href="/kuaidi/Public/css/jquery-weui.min.css">
	<link rel="stylesheet" href="/kuaidi/Public/css/weui.min.css">
<style>
.weui-btn.weui-btn_primary{background-color:#128BDA;width: 90%;margin: 30px auto;}
.weui-cell__ft,.weui-cells__title{color:#000;}
.weui-cells{margin-top:0; }
span.weui-icon-checked{
  display: inline-block;
  width: 20;
  height: 20px;
  margin-right: 10px;
  background: url(/kuaidi/Public/images/1.png) no-repeat;
  background-size: contain;
}
span.weui-icon-checked.active{
  background: url(/kuaidi/Public/images/2.png) no-repeat;
  background-size: contain;
}
.list .weui-cells .weui-cell{
  height: 50px;
  line-height: 50px;
}
.weui-cell__ft span input[type="text"]{
    width: 30px;
    text-align: center;
}
.size{border: 1px solid #ddd;
    padding: 6px;
    box-sizing: border-box;    height: 50px;
    line-height: 39px;
    display: inline-block;}
em{
    font-style: normal;
    display: inline-block;
    width: 26px;
    height: 26px;
    line-height: 26px;
    border: 1px solid #ddd;
    text-align: center;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
</style>
</head>

<body>
  <div class="bd">
      <div class="page__bd">
        <div class="weui-cells__title" style="margin-top: 0;background: #fff;
    padding: 10px;">选择类型</div>
        <div class="list">
          <div class="weui-cells">
            <div class="weui-cell">
                <div class="weui-cell__bd">
                  <p><span class="size">35*25*15cm</span></p>
                </div>
                <div class="weui-cell__ft" id="size1">
                  <em onclick="jian(this,1)">-</em>
                  <span><input id="value1" type="text" value="1" disabled="disabled"></span>
                  <em onclick="add(this,1)">+</em>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__bd" id="size2">
                  <p><span class="size">35*25*15cm</span></p>
                </div>
                <div class="weui-cell__ft">
                  <em onclick="jian(this,2)">-</em>
                  <span><input id="value2" type="text" value="1" disabled="disabled"></span>
                  <em onclick="add(this,2)">+</em>
                </div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__bd" id="size3">
                  <p><span class="size">35*25*15cm</span></p>
                </div>
                <div class="weui-cell__ft">
                  <em onclick="jian(this,3)">-</em>
                  <span><input id="value3" type="text" value="1" disabled="disabled"></span>
                  <em onclick="add(this,3)">+</em>
                </div>
            </div>
          </div>
        </div>
        <div class="weui-cells">
          <div class="weui-cell">
            <div class="weui-cell__bd">
              <p>数量合计</p>
            </div>
            <div class="weui-cell__ft"><span>0</span>个</div>
          </div>
        </div>
        <!-- 时间 -->
        <div class="weui-cell" style="background: #fff;">
            <div class="weui-cell__hd">
              <label for="time-format" class="weui-label">选择调配时间</label>
            </div>
            <div class="weui-cell__bd">
              <input class="weui-input" style="text-align: right;" id="time-format" type="text" value="" readonly="" placeholder="选择时间">
            </div>
        </div>
    </div>
  <div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary">确定</a>
  </div>
	<script src="/kuaidi/Public/js/jquery-2.1.4.js"></script>
	<script src="/kuaidi/Public/js/jquery-weui.min.js"></script>
	<script src="/kuaidi/Public/js/vue.min.js"></script>
	<script>
      $(".weui-icon-checked").click(function(){
          if($(this).hasClass("active")){
              $(this).removeClass("active");
          }else{
              $(".weui-icon-checked").removeClass("active");
              $(this).addClass("active");
          }
      })
      //加减
      function jian(obj,id){
        var num = $("#value"+id).val();
            if(num==1){
              $("#value"+id).val(num);
            }else{
              num--;
              $("#value"+id).val(num);
            }
      };  
      function add(obj,id){
        var num = $("#value"+id).val();
            num++;
            console.log(num);
            $("#value"+id).val(num);
      };
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