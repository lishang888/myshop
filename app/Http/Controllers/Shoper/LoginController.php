<?php

namespace App\Http\Controllers\Shoper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class LoginController extends Controller
{
    //加载登录页面
    public function login()
    {
    	return view('shoper_admin.login.index');
    }

    public function dologin(Request $request)
    {
    	// 匹配正则
    	$user = $request->input('user','');
    	$pass = $request->input('pass','');
    	$phone_patt = '/^1([38][0-9]|4[579]|5[0-3,5-9]|6[6]|7[0135678]|9[89])\d{8}$/';
    	$email_patt = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
		$email = preg_match($email_patt, $user, $email_match);
    	$phone = preg_match($phone_patt,$user,$phone_match);
    	$uname = $user;

    	// 验证正则
		if($phone){
			$arr = ['phone'];
		}else if($email){
			$arr = ['email'];
		}else if($uname){
			$arr = ['uname'];
		}

		if(!($phone || $uname || $email)){
			return back()->with('error','账号格式错误');
		}

		// 验证账号
		$res1 = DB::table('users')->where($arr['0'],$user)->first();

        if(!$res1){
			return back()->with('error','账号或密码错误');
		}

		// 验证密码
		if(!Hash::check($pass, $res1->pass)){
			return back()->with('error','账号或密码错误');
		}

    	// 执行登录
    	session(['shoper_login'=>true]);
    	session(['shoper_user'=>$res1]);

    	// 跳转
    	return redirect('shoper_admin')->with('success','登录成功');
    }
}
