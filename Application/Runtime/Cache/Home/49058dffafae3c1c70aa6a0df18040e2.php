<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>快递宝-修改密码</title>
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
          <label class="weui-label">旧密码</label>
        </div>
        <div class="weui-cell__bd"> 
          <input class="weui-input number" type="password" placeholder="请输入原始密码">
        </div>
      </div>
      <div class="weui-cell weui-cell_vcode" style="height: 44px;">
        <div class="weui-cell__hd">
          <label class="weui-label">新密码</label>
        </div>
        <div class="weui-cell__bd"> 
          <input class="weui-input number" type="password" placeholder="请输入新的密码">
        </div>
      </div>
    </div>
	<!-- 按钮 -->
	<div class="demos-content-padded">
      <a href="javascript:;" class="weui-btn weui-btn_primary" id=zhuce>确定修改</a>
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
  $('#zhuce').click(function (){
        var iphone = $('.number').val();
        var dizhi = $('.dizhi').val();
       
    
        if(iphone==''){
          alert('手机号不能为空');
          return false;
        }
        if(dizhi==''){
          alert('地址验证码不能为空');
          return false;
        }
        
        //判断验证码
        $.post("<?php echo U('Index/login');?>",{iphone:iphone,dizhi:dizhi},function (d){
          if(d.state=='1'){
            
           alert(d.message);
            return false;
          }else{
            window.location.href="<?php echo U('Index/index');?>";
           
          }
        })
      })
   
	</script>
</body>
</html>