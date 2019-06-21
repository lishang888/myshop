<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shops;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 搜索
        // 接受搜索的参数
        $search_shopname = $request->input('search_shopname','');

        // 查数据
        $shops = Shops::where('shopname','like','%'.$search_shopname.'%')->paginate(5);

        //加载列表页
        return view('admin.shops.index',['shops'=>$shops,'search_shopname'=>$search_shopname]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $shop = Shops::find($id);
        $res = $shop->forceDelete();
        if($res){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }

    // 软删除
    public function delete($id)
    {
        $res = Shops::destroy($id);

        if($res){
            return back()->with('success','下架成功');
        }else{
            return back()->with('error','下架失败');
        }
    }

    // 回收站
    public function bin()
    {
        // 查数据
        $bins = Shops::onlyTrashed()->paginate(5);
        //加载列表页
        return view('admin.shops.bin',['bins'=>$bins]);
    }

    // 恢复
    public function hui($id)
    {
        $res = Shops::withTrashed()->where('id',$id)->restore();

        if($res){
            return back()->with('success','上架成功');
        }else{
            return back()->with('error','上架失败');
        }
    }

}
