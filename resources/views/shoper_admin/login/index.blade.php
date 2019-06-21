<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-Ua-Compatible" content="IE=edge">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link rel="stylesheet" href="/shoper_admins/index/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="/shoper_admins/login/layui.css" type="text/css">
<link href="/shoper_admins/login/jquery.css" rel="stylesheet">
<link href="/shoper_admins/login/login.css" rel="stylesheet" type="text/css">
<title>卖家中心登录 - 商淘软件多用户商城系统</title>
<link id="layuicss-laydate" rel="stylesheet" href="/shoper_admins/login/laydate.css" media="all"><link id="layuicss-layer" rel="stylesheet" href="/shoper_admins/login/layer.css" media="all"><link id="layuicss-skincodecss" rel="stylesheet" href="/shoper_admins/login/code.css" media="all"></head>
<body id="loginFrame">
<!-- 显示提示消息 开始 -->
@if(session('error'))
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    {{session('error')}}
</div>
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    {{session('success')}}
</div>
@endif
<!-- 显示提示消息 结束 -->
<div class="wst-lo-top">
  <div class="login_logo">
      <img src="/shoper_admins/login/580480413c986.png">
  </div>
</div>
<div class="wst-lo-center" style="background: url(/shoper_admins/login/5c36f8de66f2f.jpg) no-repeat top center;background-size:center">
  <div class="wst-lo">
    <div class="login-wrapper">
      <div class="boxbg2"></div>
      <div class="box">
          <form method="post" autocomplete="off" action="/shoper_admin/dologin">
          {{csrf_field()}}
          <div class="content-wrap">
            <div class="login-title">卖家中心登录</div>
            <div class="login-box">
              <div>
                 <div class="login-icon1"></div>
                 <input name="user" type="text" class="layui-input ipt" placeholder="用户名/手机号/邮箱">
              </div>
              <div>
                 <div class="login-icon2"></div>
                 <input name="pass" type="password" class="layui-input ipt" placeholder="登录密码">
              </div>
            </div>
            <div>
            <button id="loginbtn" type="submit" onclick="javascript:login()" class="layui-btn layui-btn-big layui-btn-normal" style="width: 100%;">登&nbsp;&nbsp;&nbsp;&nbsp;录</button>
            </div>
          </div>
          </form>
        </div>
    </div>
</div>
</div>
<div class="login-footer">
     CROPYRIGHT 2013-2015 广州商淘信息科技有限公司 版权所有<script src="/shoper_admins/login/z_stat.php" language="JavaScript"></script><script src="/shoper_admins/login/core.php" charset="utf-8" type="text/javascript"></script><a href="https://www.cnzz.com/stat/website.php?web_id=1263804910" target="_blank" title="站长统计">站长统计</a><br>     <div>
        Copyright©2019 Powered By <a target="_blank" href="http://www.wstmart.net/">WSTMart</a>
     </div>
     </div>
<input type="hidden" id="token" value="9B6A4E2D62F99AC6157232E7316B1FED82B7BC26E1A0BC138A242229FD2EEA6DD151A6F356FA78D847DEC32BC46C7F652B60F0E8A88F0FB234B024982A11FD8E13334E06555F4116D6CC45FC0ED584191A62247B4BA7C09F62A462EB2B5D0FE5B5DD701FB2DE8E315620CE8B6A1CA81CA4331F81D9A3AB2F1051FBF9FB3FD3AF">
<script type="text/javascript" src="/shoper_admins/login/jquery_002.js"></script>
<script>
window.conf = {"DOMAIN":"http://localhost/wstmart_v2.1.1_190220","ROOT":"/wstmart_v2.1.1_190220","APP":"/wstmart_v2.1.1_190220","STATIC":"/wstmart_v2.1.1_190220/static","SUFFIX":"html","IS_CRYPT":""}
</script>
<script language="javascript" type="text/javascript" src="/shoper_admins/login/layui.js"></script>
<script type="text/javascript" src="/shoper_admins/login/common.js"></script>
<script type="text/javascript" src="/shoper_admins/login/rsa.js"></script>
<script type="text/javascript" src="/shoper_admins/login/common_002.js"></script>
<script type="text/javascript" src="/shoper_admins/login/jquery.js"></script>
<script src="/shoper_admins/login/login.js" type="text/javascript"></script>

</body></html>