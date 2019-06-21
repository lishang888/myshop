<?php

namespace App\Http\Controllers\Shoper;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use App\Models\Shops;
use App\Models\Attrs;
use DB;

class ShopsController extends Controller
{
	// 封装栏目名
	public static function getCateData()
	{
		// 查询数据库 按path字段排序
		$cates = Cates::select('*',DB::raw("concat(path,',',id) as paths"))->orderBy('paths','asc')->get();
		// 遍历 用substr_count判断path中有几个逗号,有几个就用str_repeat在名称前加几
		foreach($cates as $key=>$value){
			// $value->path
			$n = substr_count($value->path,',');
			$cates[$key]->cname = str_repeat('|----',$n).$value->cname;
		}
		return $cates;
	}

    //添加页面
    public function create()
    {
    	$cates = self::getCateData();
    	return view('shoper_admin.shops.create',['cates'=>$cates]);
    }

    //执行添加操作
    public function store(Request $request)
    {
    	// 开启事务
        DB::beginTransaction();

    	// 上传图片
        if($request->hasFile('profile')){
            // 创建文件上传对象
            $file_path = $request->file('profile')->store(date('Ymd'));
        }else{
            $file_path = '';
        }
        $data = $request->except('_token','profile');

        $shop = new Shops;
    	$shop->uid = session('shoper_user')->id;
        $shop->cid = $data['cid'];
        $shop->shopname = $data['shopname'];
        $shop->desc = $data['desc'];
        $shop->num = $data['num'];
        $shop->price = $data['price'];
        $shop->profile = $file_path;
        $res1 = $shop->save();

        // 判断压入用户表
        if($res1){
            // 获取uid
            $sid = $shop->id;
        }

        $attr = new Attrs;
    	$attr->sid = $sid;
    	$attr->size = $data['size'];
    	$attr->color = $data['color'];
    	$attr->phone = $data['phone'];
    	$res2 = $attr->save();

    	if($res1 && $res2){
            // 提交事务
            DB::commit();
            return redirect('shoper_admin/shops/create')->with('success','添加成功');
        }else{
            // 回滚事务
            DB::rollBack();
            return back()->with('error','添加失败');
        }


    }
}
