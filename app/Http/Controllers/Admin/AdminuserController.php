<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class AdminuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('admin_users')->get();
        // 显示数据
        return view('admin.adminuser.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('admin.adminuser.create');
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
        // $data = $request->all();
        // if ($request->hasFile('photo')) {
        //     $photo = $request->file('photo')->store(date('Ymd'));
        // } else {
        //     return back()->with('error','请选择图片');
        // }

        $data = $request->all();
        // dd($data);

        // 接收数据
        $admin_users = DB::table('admin_users')->insert([
            ['uname'=>$data['uname'],'upass'=>Hash::make($data['upass'])]
        ]);
        // $admin_users->uname = $data['uname'];
        // $admin_users->upass = Hash::make($data['upass']);
        // $admin_users->photo = $photo;

        // dd($admin_users);
        if ($admin_users) {
            return redirect('admin/adminuser')->with('success','添加成功');
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
        // $res = Banners::destroy($id);
        // dd($id);
        $res = DB::table('admin_users')->where('id',$id)->delete();

        if ($res) {
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
