<!DOCTYPE html>
<!-- saved from url=(0060)http://localhost/wstmart_v2.1.1_190220/shop/index/index.html -->
<html style="height: auto; min-height: 100%;">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>卖家中心 - 我的商城系统</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <link rel="stylesheet" href="/shoper_admins/index/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/shoper_admins/index/layui.css" type="text/css" />
  <link rel="stylesheet" href="/shoper_admins/index/font-awesome.min.css" type="text/css" />
  <script src="/shoper_admins/index/jquery.min.js.下载"></script>
  <script type="text/javascript" src="/shoper_admins/index/layer.js.下载"></script>
  <link rel="stylesheet" href="/shoper_admins/index/layer.css" id="layui_layer_skinlayercss" style="" />
  <link rel="stylesheet" href="/shoper_admins/index/skin-blue.min.css" type="text/css" />
  <link rel="stylesheet" href="/shoper_admins/index/index.css" type="text/css" />
  <link href="/shoper_admins/index/common.css" rel="stylesheet" type="text/css" />
  <script>
window.conf = {"DOMAIN":"http://localhost/wstmart_v2.1.1_190220","ROOT":"/wstmart_v2.1.1_190220","APP":"/wstmart_v2.1.1_190220","STATIC":"/wstmart_v2.1.1_190220/static","SUFFIX":"html","GOODS_LOGO":"upload/sysconfigs/2016-10/5804802a4b162.png","SHOP_LOGO":"upload/sysconfigs/2016-10/58048008993ed.png","MALL_LOGO":"upload/sysconfigs/2016-10/580480413c986.png","USER_LOGO":"upload/sysconfigs/2016-10/5804800d5841e.png",'GRANT':'',"IS_CRYPT":"","ROUTES":'{"\\think\\addons\\addonscontroller@execute":"addon\/<module>-<action>-<method>","home\/index\/index":"index","home\/goods\/lists":"category-<cat>","home\/goods\/search":"search","home\/goods\/detail":"goods-<goodsId>","home\/brands\/index":"brands","home\/shops\/shopstreet":"street","home\/helpcenter\/view":"service-<id>","home\/news\/view":"news-<id>","home\/news\/nlist":"cats-news-<catId>","home\/users\/login":"login","home\/users\/regist":"register","home\/users\/forgetpass":"forget","home\/users\/forgetpasst":"find-forget","home\/users\/forgetpassf":"success-forget","home\/users\/resetpass":"reset-forget","home\/shops\/index":"shop-<shopId>","home\/shops\/goods":"shopgoods-<shopId>"}',"MAP_KEY":"","__HTTP__":"http://",'RESOURCE_PATH':'/wstmart_v2.1.1_190220',"SMS_VERFY":"1",'TIME_TASK':1,"MESSAGE_BOX":"",MSG_SHOP_GRANT:'message,shoporder24,shoporder55,shoporder45,shoporder25,shoporder54'}
</script>
  <script language="javascript" type="text/javascript" src="/shoper_admins/index/common.js.下载"></script>
  <link id="layuicss-laydate" rel="stylesheet" href="/shoper_admins/index/laydate.css" media="all" />
  <link id="layuicss-layer" rel="stylesheet" href="/shoper_admins/index/layer(1).css" media="all" />
  <link id="layuicss-skincodecss" rel="stylesheet" href="/shoper_admins/index/code.css" media="all" />
 </head>
 <body class="skin-blue sidebar-mini" style="height: auto; min-height: 100%;">
  <div id="j-loader" style="display: none;">
   <img src="/shoper_admins/index/ajax-loader.gif" />
  </div>
  <style>body,.wrapper{overflow:hidden;}</style>
  <div class="wrapper" style="height: auto; min-height: 100%;">
   <header class="main-header">
    <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" class="logo"> <span class="logo-mini"></span> <span class="logo-lg"></span> </a>
    <nav class="navbar navbar-static-top">
     <div class="navbar-custom-menu" style="float:left">
      <ul class="nav navbar-nav">
       <li><a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a></li>
       <li><a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" class="top-menu" dataid="22"><span>卖家中心</span></a></li>
       <li><a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" class="top-menu" dataid="57"><span>运营管理</span></a></li>
       <li><a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" class="top-menu" dataid="76"><span>促销管理</span></a></li>
      </ul>
     </div>
     <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
       <li id="toMsg" class="j-im"> <a target="_blank" class="drop-down" style="padding-right: 0px;" href="javascript:void(0)" title="用户信息"><i class="fa fa-bell fa-lg"></i><span class="msg-num">6</span></a>
        <div class="j-dorpdown-layer">
         <div id="m-msg" style="display: block;">
          <a href="javascript:void(0)" onclick="WST.redirect(120)">用户消息<span>6</span></a>
         </div>
         <div id="m-24" style="display: none;">
          <a href="javascript:void(0)" onclick="WST.redirect(24)">待发货订单</a>
          <span></span>
         </div>
         <div id="m-55" style="display: none;">
          <a href="javascript:void(0)" onclick="WST.redirect(55)">待付款订单</a>
          <span></span>
         </div>
         <div id="m-45" style="display: none;">
          <a href="javascript:void(0)" onclick="WST.redirect(45)">待退款订单<span></span></a>
         </div>
         <div id="m-25" style="display: none;">
          <a href="javascript:void(0)" onclick="WST.redirect(25)">投诉订单<span></span></a>
         </div>
         <div id="m-54" style="display: none;">
          <a href="javascript:void(0)" onclick="WST.redirect(54)">库存预警<span></span></a>
         </div>
        </div> </li>
       <li id="toMall"><a target="_blank" href="http://localhost/wstmart_v2.1.1_190220/shop-1.html" title="我的店铺主页"><i class="fa fa-home fa-lg"></i></a></li>
       <li id="toLogout"><a class="j-logout" href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" title="退出系统"><i class="fa fa-power-off fa-lg"></i></a></li>
      </ul>
     </div>
    </nav>
   </header>
   <aside class="main-sidebar">
    <section class="sidebar">
     <div class="user-panel">
      <div class="pull-left image">
       <img src="/shoper_admins/index/5804800d5841e.png" class="img-circle" />
      </div>
      <div class="pull-left info">
       <p>wstmart</p>
      </div>
      <div class="pull-left button">
       <a href="javascript:void(0);" class="j-edit-pass edit-pass"><i class="fa fa-key"></i><span>修改密码</span></a>
       <a href="javascript:void(0);" class="j-logout logout"><i class="fa fa-power-off"></i><span>退出系统</span></a>
      </div>
     </div>
     <ul class="sidebar-menu tree" data-widget="tree">
      <li class="treeview j-menulevel0 j-sysmenu22"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>交易管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
       <ul class="treeview-menu">
        <li><a id="menuItem44" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/orders/finished.html" dataid="44">已收货订单 </a></li>
        <li><a id="menuItem55" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/orders/waituserpay.html" dataid="55">待付款订单 </a></li>
        <li><a id="menuItem24" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/orders/waitdelivery.html" dataid="24">待发货订单 </a></li>
        <li><a id="menuItem53" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/orders/delivered.html" dataid="53">已发货订单 </a></li>
        <li><a id="menuItem45" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/orders/failure.html" dataid="45">取消/拒收订单 </a></li>
        <li><a id="menuItem25" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/ordercomplains/shopcomplain.html" dataid="25">投诉订单 </a> </li>
       </ul> </li>
      <li class="treeview j-menulevel0 j-sysmenu22"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>商品管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
       <ul class="treeview-menu">
        <li><a id="menuItem30" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shopcats/index.html" dataid="30">商品分类 </a></li>
        <li><a id="menuItem31" class="menuItem" href="/shoper_admin/shops/create" dataid="31">新增商品 </a></li>
        <li><a id="menuItem32" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goods/sale.html" dataid="32">出售中的商品 </a></li>
        <li><a id="menuItem33" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goods/audit.html" dataid="33">审核中的商品 </a></li>
        <li><a id="menuItem34" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goods/store.html" dataid="34">仓库中的商品 </a></li>
        <li><a id="menuItem54" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goods/stockwarnbypage.html" dataid="54">库存预警 </a></li>
        <li><a id="menuItem56" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goods/illegal.html" dataid="56">违规商品 </a></li>
        <li><a id="menuItem36" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/imports/index.html" dataid="36">数据导入 </a></li>
        <li><a id="menuItem35" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goodsappraises/index.html" dataid="35">评价管理 </a></li>
        <li><a id="menuItem102" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/goodsconsult/shopreplyconsult.html" dataid="102">商品咨询 </a> </li>
       </ul> </li>
      <li class="treeview j-menulevel0 j-sysmenu22"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>店铺设置</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
       <ul class="treeview-menu">
        <li><a id="menuItem39" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shops/info.html" dataid="39">店铺资料 </a></li>
        <li><a id="menuItem40" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shopconfigs/toshopcfg.html" dataid="40">店铺设置 </a></li>
        <li><a id="menuItem42" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shopfreights/index.html" dataid="42">运费设置 </a></li>
        <li><a id="menuItem236" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shopstyles/index.html" dataid="236">风格设置 </a></li>
        <li><a id="menuItem120" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/messages/shopmessage.html" dataid="120">用户信息 </a></li>
        <li><a id="menuItem121" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shops/notice.html" dataid="121">店铺公告 </a> </li>
       </ul> </li>
      <li class="treeview j-menulevel0 j-sysmenu22"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>帐号管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
       <ul class="treeview-menu">
        <li><a id="menuItem234" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/users/security.html" dataid="234">安全设置 </a></li>
        <li><a id="menuItem235" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/users/edit.html" dataid="235">用户资料 </a></li>
        <li><a id="menuItem233" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shopusers/index.html" dataid="233">帐号列表 </a></li>
        <li><a id="menuItem232" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/shoproles/index.html" dataid="232">角色管理 </a> </li>
       </ul> </li>
      <li class="treeview j-menulevel0 j-sysmenu57" style="display:none"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>资金管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
       <ul class="treeview-menu">
        <li><a id="menuItem59" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/settlements/index.html" dataid="59">订单结算 </a></li>
        <li><a id="menuItem68" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/logmoneys/torecharge.html" dataid="68">钱包充值 </a></li>
        <li><a id="menuItem61" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/logmoneys/shopmoneys.html" dataid="61">资金流水 </a></li>
        <li><a id="menuItem67" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/cashdraws/shopindex.html" dataid="67">提现管理 </a> </li>
       </ul> </li>
      <li class="treeview j-menulevel0 j-sysmenu57" style="display:none"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>报表统计</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
       <ul class="treeview-menu">
        <li><a id="menuItem66" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/reports/topsalegoods.html" dataid="66">商品销售排行 </a></li>
        <li><a id="menuItem64" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/reports/statsales.html" dataid="64">销售额统计 </a></li>
        <li><a id="menuItem65" class="menuItem" href="http://localhost/wstmart_v2.1.1_190220/shop/reports/statorders.html" dataid="65">销售订单统计 </a> </li>
       </ul> </li>
      <li class="treeview j-menulevel0 j-sysmenu76" style="display:none"> <a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#"> <i class="fa fa-eercast"></i> <span>促销管理</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a> </li>
     </ul>
    </section>
   </aside>
   <div class="content-wrapper" style="min-height: 646px;">
    <section class="content-header">
     <ol class="breadcrumb">
      <li><a href="http://localhost/wstmart_v2.1.1_190220/shop/index/index.html#" onclick="javascript:location.reload()"><i class="fa fa-map-marker"></i>卖家中心</a></li>
     </ol>
     <button id="toFullSreen" class="fullscreen"><i class="fa fa-arrows-alt"></i></button>
    </section>
    <section class="content-iframe" style="margin: 0px; padding: 0px; height: 606px;">
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

      <!-- 内容开始 -->
      @section('content')

      @show
      <!-- 内容结束 -->
    </section>
   </div>
  </div>
  <div id="editPassBox" style="display:none;padding-top:5px;">
   <form id="editPassFrom" autocomplete="off">
    <table class="wst-form">
     <tbody>
      <tr>
       <th style="width:100px">原密码：</th>
       <td><input type="password" id="srcPass" name="srcPass" class="ipt" data-rule="原密码: required;" maxlength="16" /></td>
      </tr>
      <tr>
       <th>新密码：</th>
       <td><input type="password" id="newPass" name="newPass" class="ipt" data-rule="新密码: required;length[6~]" maxlength="16" /></td>
      </tr>
      <tr>
       <th>确认密码：</th>
       <td><input type="password" id="newPass2" name="newPass2" class="ipt" data-rule="确认密码: required;match(newPass);" maxlength="16" /></td>
      </tr>
     </tbody>
    </table>
   </form>
  </div>
  <script>
var menus = {"22":{"menuId":22,"parentId":0,"menuName":"\u5356\u5bb6\u4e2d\u5fc3","menuUrl":"shop\/shops\/index","list":[{"menuId":23,"parentId":22,"menuName":"\u4ea4\u6613\u7ba1\u7406","menuUrl":"#","list":[{"menuId":44,"parentId":23,"menuName":"\u5df2\u6536\u8d27\u8ba2\u5355","menuUrl":"shop\/orders\/finished"},{"menuId":55,"parentId":23,"menuName":"\u5f85\u4ed8\u6b3e\u8ba2\u5355","menuUrl":"shop\/orders\/waituserPay"},{"menuId":24,"parentId":23,"menuName":"\u5f85\u53d1\u8d27\u8ba2\u5355","menuUrl":"shop\/orders\/waitdelivery"},{"menuId":53,"parentId":23,"menuName":"\u5df2\u53d1\u8d27\u8ba2\u5355","menuUrl":"shop\/orders\/delivered"},{"menuId":45,"parentId":23,"menuName":"\u53d6\u6d88\/\u62d2\u6536\u8ba2\u5355","menuUrl":"shop\/orders\/failure"},{"menuId":25,"parentId":23,"menuName":"\u6295\u8bc9\u8ba2\u5355","menuUrl":"shop\/ordercomplains\/shopComplain"}]},{"menuId":29,"parentId":22,"menuName":"\u5546\u54c1\u7ba1\u7406","menuUrl":"#","list":[{"menuId":30,"parentId":29,"menuName":"\u5546\u54c1\u5206\u7c7b","menuUrl":"shop\/shopcats\/index"},{"menuId":31,"parentId":29,"menuName":"\u65b0\u589e\u5546\u54c1","menuUrl":"shop\/goods\/add"},{"menuId":32,"parentId":29,"menuName":"\u51fa\u552e\u4e2d\u7684\u5546\u54c1","menuUrl":"shop\/goods\/sale"},{"menuId":33,"parentId":29,"menuName":"\u5ba1\u6838\u4e2d\u7684\u5546\u54c1","menuUrl":"shop\/goods\/audit"},{"menuId":34,"parentId":29,"menuName":"\u4ed3\u5e93\u4e2d\u7684\u5546\u54c1","menuUrl":"shop\/goods\/store"},{"menuId":54,"parentId":29,"menuName":"\u5e93\u5b58\u9884\u8b66","menuUrl":"shop\/goods\/stockWarnByPage"},{"menuId":56,"parentId":29,"menuName":"\u8fdd\u89c4\u5546\u54c1","menuUrl":"shop\/goods\/illegal"},{"menuId":36,"parentId":29,"menuName":"\u6570\u636e\u5bfc\u5165","menuUrl":"shop\/Imports\/index"},{"menuId":35,"parentId":29,"menuName":"\u8bc4\u4ef7\u7ba1\u7406","menuUrl":"shop\/goodsappraises\/index"},{"menuId":102,"parentId":29,"menuName":"\u5546\u54c1\u54a8\u8be2","menuUrl":"shop\/goodsconsult\/shopReplyConsult"}]},{"menuId":38,"parentId":22,"menuName":"\u5e97\u94fa\u8bbe\u7f6e","menuUrl":"#","list":[{"menuId":39,"parentId":38,"menuName":"\u5e97\u94fa\u8d44\u6599","menuUrl":"shop\/shops\/info"},{"menuId":40,"parentId":38,"menuName":"\u5e97\u94fa\u8bbe\u7f6e","menuUrl":"shop\/shopconfigs\/toShopCfg"},{"menuId":42,"parentId":38,"menuName":"\u8fd0\u8d39\u8bbe\u7f6e","menuUrl":"shop\/Shopfreights\/index"},{"menuId":236,"parentId":38,"menuName":"\u98ce\u683c\u8bbe\u7f6e","menuUrl":"shop\/shopstyles\/index"},{"menuId":120,"parentId":38,"menuName":"\u7528\u6237\u4fe1\u606f","menuUrl":"shop\/messages\/shopMessage"},{"menuId":121,"parentId":38,"menuName":"\u5e97\u94fa\u516c\u544a","menuUrl":"shop\/shops\/notice"}]},{"menuId":231,"parentId":22,"menuName":"\u5e10\u53f7\u7ba1\u7406","menuUrl":"#","list":[{"menuId":234,"parentId":231,"menuName":"\u5b89\u5168\u8bbe\u7f6e","menuUrl":"shop\/users\/security"},{"menuId":235,"parentId":231,"menuName":"\u7528\u6237\u8d44\u6599","menuUrl":"shop\/users\/edit"},{"menuId":233,"parentId":231,"menuName":"\u5e10\u53f7\u5217\u8868","menuUrl":"shop\/shopusers\/index"},{"menuId":232,"parentId":231,"menuName":"\u89d2\u8272\u7ba1\u7406","menuUrl":"shop\/shoproles\/index"}]}]},"57":{"menuId":57,"parentId":0,"menuName":"\u8fd0\u8425\u7ba1\u7406","menuUrl":"shop\/shops\/index","list":[{"menuId":58,"parentId":57,"menuName":"\u8d44\u91d1\u7ba1\u7406","menuUrl":"#","list":[{"menuId":59,"parentId":58,"menuName":"\u8ba2\u5355\u7ed3\u7b97","menuUrl":"shop\/settlements\/index"},{"menuId":68,"parentId":58,"menuName":"\u94b1\u5305\u5145\u503c","menuUrl":"shop\/logmoneys\/torecharge"},{"menuId":61,"parentId":58,"menuName":"\u8d44\u91d1\u6d41\u6c34","menuUrl":"shop\/logmoneys\/shopmoneys"},{"menuId":67,"parentId":58,"menuName":"\u63d0\u73b0\u7ba1\u7406","menuUrl":"shop\/cashdraws\/shopIndex"}]},{"menuId":63,"parentId":57,"menuName":"\u62a5\u8868\u7edf\u8ba1","menuUrl":"#","list":[{"menuId":66,"parentId":63,"menuName":"\u5546\u54c1\u9500\u552e\u6392\u884c","menuUrl":"shop\/reports\/topSaleGoods"},{"menuId":64,"parentId":63,"menuName":"\u9500\u552e\u989d\u7edf\u8ba1","menuUrl":"shop\/reports\/statSales"},{"menuId":65,"parentId":63,"menuName":"\u9500\u552e\u8ba2\u5355\u7edf\u8ba1","menuUrl":"shop\/reports\/statOrders"}]}]},"76":{"menuId":76,"parentId":0,"menuName":"\u4fc3\u9500\u7ba1\u7406","menuUrl":"shop\/shops\/index","list":[{"menuId":77,"parentId":76,"menuName":"\u4fc3\u9500\u7ba1\u7406","menuUrl":"#"}]}};
function showImg(opt){
  layer.photos(opt);
}
function showBox(opts){
  return WST.open(opts);
}
</script>
  <script src="/shoper_admins/index/bootstrap.min.js.下载"></script>
  <script language="javascript" type="text/javascript" src="/shoper_admins/index/layui.all.js.下载"></script>
  <script language="javascript" type="text/javascript" src="/shoper_admins/index/common.js(1).下载"></script>
  <script type="text/javascript" src="/shoper_admins/index/jquery.lazyload.min.js.下载"></script>
  <script src="/shoper_admins/index/index.js.下载"></script>
 </body>
</html>