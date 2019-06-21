<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advers;
use DB;
use Storage;
class AdversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$advers = Advers::all();
        return view('admin.advers.index',['advers'=>$advers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		// 显示模板
        return view('admin.advers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 验证表单
        $this->validate($request, [
	        'aname' => 'required',
	        'desc' => 'required',
	        'url' => 'required',
        ],[
            'aname.required'=>'标题不能为空',
            'desc.required'=>'描述不能为空',
            'url.required'=>'url地址不能为空',
        ]);
        
        // 检查文件上传
    	if($request->hasFile('photo')){
    		$photo = $request->file('photo')->store(date('Ymd'));
    	}else{
    		return back()->with('error','请选择图片');
    	}
    	
    	// 接受收据压入数据库
		$adver = new Advers;
		$adver->aname = $request->input('aname','');
		$adver->photo = $photo;
		$adver->desc = $request->input('desc','');
		$adver->url = $request->input('url','');
		$res1 = $adver->save();
		if($res1){
			return redirect('admin/advers')->with('success','添加成功');
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
		// 查询数据库 按path字段排序
		$advers = Advers::find($id);
		// 显示模板
        return view('admin.advers.edit',['advers'=>$advers]);
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
    	// 验证表单
        $this->validate($request, [
	        'aname' => 'required',
        ],[
            'aname.required'=>'标题不能为空',
        ]);
    	
    	// 检查文件上传
    	if($request->hasFile('photo')){
    		$photo = $request->file('photo')->store(date('Ymd'));
    		Storage::files($request->input('old_photo'));
    	}else{
    		$photo = $request->input('old_photo');
    	}
    
        $adver = Advers::find($id);
		$adver->aname = $request->input('aname','');
		$adver->photo = $photo;
		$adver->desc = $request->input('desc','');
		$adver->url = $request->input('url','');
		$res = $adver->save();
		
		if($res){
			return redirect('admin/advers')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
		}
    	
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
    
    // 删除
    public function del(Request $request)
    {
    	// 接收id和图片的路径
        $id = $request->input('id');
        $photo = $request->input('photo');

        // 执行删除
        $res = DB::table('advers')->where('id',$id)->delete();
        Storage::delete($request->input('photo'));
        if($res){
            echo 'ok';
        }else{
            echo 'err';
        }
    }
    
    public function statu(Request $request)
	{
		$id = $request->input('id','');
		$status = $request->input('status','');
		if($status == 0){
			$status = 1;
		}else{
			$status = 0;
		}
    	// 执行修改
		$user = Advers::find($id);
		$user->status = $status;
		$res = $user->save();
        
        if($res){
            echo $status;
        }else{
        	echo $status;
        }
	}
}
