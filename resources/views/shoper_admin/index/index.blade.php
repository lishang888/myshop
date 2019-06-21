@extends('shoper_admin.layout.index')

@section('content')


<!DOCTYPE html>
<!-- saved from url=(0059)http://localhost/wstmart_v2.1.1_190220/shop/index/main.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>卖家中心 - 商淘软件多用户商城系统</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="/shoper_admins/index/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="/shoper_admins/index/layui.css" type="text/css">
<link rel="stylesheet" href="/shoper_admins/index/font-awesome.min.css" type="text/css">
<script src="/shoper_admins/index/jquery.min.js.下载"></script>
    <script type="text/javascript" src="/shoper_admins/index/layer.js.下载"></script><link rel="stylesheet" href="/shoper_admins/index/layer.css" id="layui_layer_skinlayercss" style="">

<link href="/shoper_admins/index/main.css" rel="stylesheet">

<link href="/shoper_admins/index/common.css" rel="stylesheet" type="text/css">
<script>
window.conf = {"DOMAIN":"http://localhost/wstmart_v2.1.1_190220","ROOT":"/wstmart_v2.1.1_190220","APP":"/wstmart_v2.1.1_190220","STATIC":"/wstmart_v2.1.1_190220/static","SUFFIX":"html","GOODS_LOGO":"upload/sysconfigs/2016-10/5804802a4b162.png","SHOP_LOGO":"upload/sysconfigs/2016-10/58048008993ed.png","MALL_LOGO":"upload/sysconfigs/2016-10/580480413c986.png","USER_LOGO":"upload/sysconfigs/2016-10/5804800d5841e.png",'GRANT':'',"IS_CRYPT":"","ROUTES":'{"\\think\\addons\\addonscontroller@execute":"addon\/<module>-<action>-<method>","home\/index\/index":"index","home\/goods\/lists":"category-<cat>","home\/goods\/search":"search","home\/goods\/detail":"goods-<goodsId>","home\/brands\/index":"brands","home\/shops\/shopstreet":"street","home\/helpcenter\/view":"service-<id>","home\/news\/view":"news-<id>","home\/news\/nlist":"cats-news-<catId>","home\/users\/login":"login","home\/users\/regist":"register","home\/users\/forgetpass":"forget","home\/users\/forgetpasst":"find-forget","home\/users\/forgetpassf":"success-forget","home\/users\/resetpass":"reset-forget","home\/shops\/index":"shop-<shopId>","home\/shops\/goods":"shopgoods-<shopId>"}',"MAP_KEY":"","__HTTP__":"http://",'RESOURCE_PATH':'/wstmart_v2.1.1_190220',"SMS_VERFY":"1",'TIME_TASK':1,"MESSAGE_BOX":"",MSG_SHOP_GRANT:'message,shoporder24,shoporder55,shoporder45,shoporder25,shoporder54'}
</script>
<script language="javascript" type="text/javascript" src="/shoper_admins/index/common.js.下载"></script>
<link id="layuicss-laydate" rel="stylesheet" href="/shoper_admins/index/laydate.css" media="all"><link id="layuicss-layer" rel="stylesheet" href="/shoper_admins/index/layer(1).css" media="all"><link id="layuicss-skincodecss" rel="stylesheet" href="/shoper_admins/index/code.css" media="all"></head>
<body class="hold-transition skin-blue sidebar-mini" style="">
<div id="j-loader" style="display: none;"><img src="/shoper_admins/index/ajax-loader.gif"></div>

<div class="wst-shop-name"><a target="_blank" href="http://localhost/wstmart_v2.1.1_190220/shop-1.html">WSTMart自营超市</a></div>
<div class="wst-shop-info">
	<span class="wst-shop-img">
	  <a target="_blank" href="http://localhost/wstmart_v2.1.1_190220/shop-1.html">
	  <img src="/shoper_admins/index/5c6fd1074ce70.png" title="WSTMart自营超市" alt="WSTMart自营超市">
	  </a>
	</span>
	<div class="wst-shop-na">
		<div class="wst-shop-na2">
				<img src="/shoper_admins/index/5c6f74197968c.png">
				<img src="/shoper_admins/index/5c6f74289d057.png">
				</div>
		<span class="wst-shop-na3">上次登录：2019-06-20 11:15:41</span>
		<span class="wst-shop-na3">店铺地址：燕岭路89号燕侨大厦</span>
	</div>
	<div class="wst-shop-eva">
		<p>商品评分</p>
		<div class="wst-shop-evai">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
				</div>
	</div>
	<div class="wst-shop-eva">
		<p>时效评分</p>
		<div class="wst-shop-evai">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
				</div>
	</div>
	<div class="wst-shop-eva">
		<p>服务评分</p>
		<div class="wst-shop-evai">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
					<img src="/shoper_admins/index/star-on.png">
				</div>
	</div>
	<div class="wst-shop-con">
		<p>电话：13888888888</p>
		<p>QQ：153289970</p>
		<p>服务时间：08:30-22:30</p>
	</div>
	<div class="f-clear"></div>
</div>


<div class="main">
	<div class="main_middle">
		<ul class="main_mid_box">
			<li class="mid_l">
				<div class="mid_l_item">
					<div class="main_title">
						<div class="wst-lfloat">
							<span class="tit_label"></span>
							<span class="c16_555">订单提示</span>
						</div>
						<div class="wst-rfloat">
								<span class="complain_num">0</span>
								<span class="c16_555">收到投诉信息</span>
						</div>
						<div class="f-clear"></div>
					</div>
					<div class="mid_main">
						<ul class="order_info">
							<li>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">待收货</span>
								</div>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">待发货</span>
								</div>
							</li>
							<li>
								<div class="item_center">
									<div class="info_item">
										<p class="c32_e33">0</p>
										<span class="c14_555">待付款</span>
									</div>
								</div>
							</li>
							<li>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">取消/拒收</span>
								</div>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">待退款</span>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="mid_l_item" style="margin-top:20px;">
					<div class="main_title">
						<div class="wst-lfloat">
							<span class="tit_label"></span>
							<span class="c16_555">商品信息</span>
						</div>
					</div>
					<div class="f-clear"></div>
					<div class="mid_main">
						<ul class="order_info">
							<li>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">仓库中</span>
								</div>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">预警库存</span>
								</div>
							</li>
							<li>
								<div class="item_center item_sale">
									<div class="info_item">
										<p class="c32_e33">74</p>
										<span class="c14_555">出售中</span>
									</div>
								</div>
							</li>
							<li>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">待审核</span>
								</div>
								<div class="info_item">
									<p class="c32_e33">0</p>
									<span class="c14_555">违规商品</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class="mid_c">
				<div class="index-right">
					<div class="index-right-item">
						<div class="main_title" style="padding-left:10px;">
							<div class="wst-lfloat">
								<span class="tit_label"></span>
								<span class="c16_555">最近七天销售排行</span>
							</div>
							<div class="f-clear"></div>
						</div>
						<ul class="right-list-tit">
							<li class="c12_555">序号</li>
							<li class="c12_555">商品</li>
							<li class="c12_555">数量</li>
						</ul>

					</div>
				</div>

			</li>
			<li class="mid_r">
				<div class="mid_r_rtop">
					<div class="main_title">
						<div class="wst-lfloat" style="float:none;">
							<span class="tit_label"></span>
							<span class="c16_555">平台联系方式</span>
						</div>
						<div class="f-clear"></div>
					</div>
					<div class="rtop_main">
						<p class="rtop_item">电话：020-85289921</p>
						<p class="rtop_item">邮箱：wstmart@qq.com</p>
					</div>
				</div>
				<div class="mid_r_rbottom">
					<div class="main_title">
						<div class="wst-lfloat">
							<span class="tit_label"></span>
							<span class="c16_555">商家公告</span>
						</div>
						<div class="f-clear"></div>
					</div>
					<div class="rbottom_main">
						<ul class="shop_tips">
													</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>

	<div class="sale_info">
		<div class="main_title">
			<div class="wst-lfloat">
				<span class="tit_label"></span>
				<span class="c16_555">近30天销售情况</span>
			</div>
			<div class="f-clear"></div>
		</div>
		<div id="saleMain" style="width: 100%; height: 260px; -webkit-tap-highlight-color: transparent; user-select: none; background: transparent; position: relative;" _echarts_instance_="ec_1561012492372"><div style="position: relative; overflow: hidden; width: 1293px; height: 260px; padding: 0px; margin: 0px; border-width: 0px;"><canvas width="1616" height="325" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 1293px; height: 260px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div></div></div>
	</div>
</div>



<input type="hidden" id="startDate" class="ipt" value="2019-05-21">
<input type="hidden" id="endDate" class="ipt" value="2019-06-20">

<script src="/shoper_admins/index/bootstrap.min.js.下载"></script>
<script language="javascript" type="text/javascript" src="/shoper_admins/index/layui.all.js.下载"></script>
<script language="javascript" type="text/javascript" src="/shoper_admins/index/common.js(1).下载"></script>
<script type="text/javascript" src="/shoper_admins/index/jquery.lazyload.min.js.下载"></script>

<script src="/shoper_admins/index/echarts.min.js.下载" type="text/javascript"></script>
<script>
$(function(){saleCount()});
// 销售统计
function saleCount(){
	$.post(WST.U('shop/reports/getStatSales'),WST.getParams('.ipt'),function(data,textStatus){
	    var json = WST.toJson(data);
	    var myChart = echarts.init(document.getElementById('saleMain'));
	    myChart.clear();
	    $('#mainTable').hide();
	    if(json.status=='1' && json.data){
			var option = {
			    tooltip : {
			        trigger: 'axis'
			    },
			    calculable : true,
			    xAxis : [
			        {
			            type : 'category',
			            data : json.data.days
			        }
			    ],
			    yAxis : [
			        {
			            type : 'value'
			        }
			    ],
			    series : [
			        {
			            name:'销售额',
			            type:'line',
			            data:json.data.dayVals
			        }
			    ]
			};
			myChart.setOption(option);
	    }
	});
}
</script>


</body></html>
@endsection