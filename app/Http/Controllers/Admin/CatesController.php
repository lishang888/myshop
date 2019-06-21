<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cates;
use DB;
class CatesController extends Controller
{
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// $cates = Cates::all();
		return view('admin.cates.index',['cates'=>self::getCateData()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
		// $cates = Cates::all();
		$id = $request->input('id',0);
		// 显示模板
        return view('admin.cates.create',['id'=>$id,'cates'=>self::getCateData()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 $this->validate($request, [
		    'cname' => 'required',
		],[
		    'cname.required'=>'分类名称不能为空',
		]);
		// dump($request->all());
		// 获取pid
		$pid = $request->input('pid',0);
		
		if($pid == 0){
			$path = 0;
		}else{
			// pid =3 
			// 获取父级的数据
			$parent_data = Cates::find($pid);
			$path = $parent_data->path.','.$parent_data->id;
		}
		// 将数据压入到数据库
		$cate = new Cates;
		$cate->cname = $request->input('cname','');
		$cate->pid = $pid;
		$cate->path = $path;
		$res1 = $cate->save();
		if($res1){
			return redirect('admin/cates')->with('success','添加成功');
		}else{
			return back()->with('error','添加失败');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
