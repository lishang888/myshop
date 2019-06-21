<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//李尚1-100行 刘仕民100-200行 王帅200-300行

Route::get('/', function () {
    return view('welcome');
});

// 后台登录页面
Route::get('admin/login','Admin\LoginController@login');
Route::post('admin/dologin','Admin\LoginController@dologin');

// 后台 退出登录
Route::get('admin/logout','Admin\LoginController@logout');

// 后台权限
Route::get('admin/rbac',function(){
	return view('admin.rbac');
});

Route::group(['middleware'=>'login'],function(){

	// 后台首页路由
	Route::get('admin','Admin\IndexController@index');

	// 后台 用户
	Route::resource('admin/users','Admin\UsersController');

	// 后台 订单
	Route::resource('admin/orders','Admin\OrdersController');

	// 后台 商品 软删除
	Route::get('admin/shops/delete/{id}','Admin\ShopsController@delete');

	// 后台 商品 回收站
	Route::get('admin/shops/bin','Admin\ShopsController@bin');

	// 后台 商品 恢复
	Route::get('admin/shops/hui/{id}','Admin\ShopsController@hui');

	// 后台 商品 删除
	Route::get('admin/shops/del','Admin\ShopsController@del');

	// 后台 商品
	Route::resource('admin/shops','Admin\ShopsController');





























































	// 刘仕民
	// 后台 分类 路由
	Route::resource('admin/cates','Admin\CatesController');

	// 后台 广告删除
	Route::get('admin/advers/del','Admin\AdversController@del');

	// 后台 广告 激活 关闭
	Route::get('admin/advers/statu','Admin\AdversController@statu');

	// 后台 广告 路由
	Route::resource('admin/advers','Admin\AdversController');

























































































	// 王帅
	// 后台 管理员
	Route::resource('admin/adminuser','Admin\AdminuserController');

	// 后台 角色
	Route::resource('admin/roles','Admin\RolesController');

	// 轮播图管理
	Route::resource('admin/banners','Admin\BannersController');

	// 友情链接管理
	Route::resource('admin/links','Admin\LinksController');

	// 网站配置管理
	Route::resource('admin/config','Admin\ConfigController');



















































































});


// 商家登录
Route::get('shoper_admin/login','Shoper\LoginController@login');
Route::post('shoper_admin/dologin','Shoper\LoginController@dologin');

Route::group(['middleware'=>'shoper_login'],function(){
	// 商家后台首页
	Route::get('shoper_admin','Shoper\IndexController@index');

	// 商家后台 商品添加
	Route::get('shoper_admin/shops/create','Shoper\ShopsController@create');

	// 商家后台 执行添加
	Route::post('shoper_admin/shops/store','Shoper\ShopsController@store');

});