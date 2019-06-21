<?php

namespace App\Http\Controllers\Shoper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //商家后台首页
    public function index()
    {
    	return view('shoper_admin.index.index');
    }
}
