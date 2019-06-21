<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('admin.login.login');
    }

    public function dologin(Request $request)
    {
    	// dump($request->all());
    	$uname = $request->input('uname','');
    	$upass = $request->input('upass','');

    	$admin_user_data = DB::table('admin_users')->where('uname',$uname)->first();

    	if (!$admin_user_data) {
    		echo "<script>alert('用户名或密码错误');location.href='/admin/login'</script>";
    		exit;
    	}

    	// dd($admin_user_data);
    	
    	// 执行登录
    	session(['admin_login'=>true]);
    	session(['admin_user'=>$admin_user_data]);

    	// 跳转
    	return redirect('admin');
    }
}
