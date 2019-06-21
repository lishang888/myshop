<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banners;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banners::orderBy('id','desc')->paginate(5);
        return view('admin.banners.index',['banners'=>$banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store(date('Ymd'));
        } else {
            return back()->with('error','请选择图片');
        }

        $data = $request->all();

        // 接收数据
        $banners = new Banners;
        $banners->title = $data['title'];
        $banners->photo = $photo;
        $res = $banners->save();

        if ($res) {
            return redirect('admin/banners')->with('success','添加成功');
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
        $res = Banners::destroy($id);
        // 删除用户头像
        /*
            use Illuminate\Support\Facades\Storage;
            Storage::delete('file.jpg');
            Storage::delete(['file1.jpg', 'file2.jpg']);
         */
        if ($res) {
            return redirect('admin/banners')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

   
}
