<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsers;
use App\Models\Users;
use App\Models\UsersInfos;
use Hash;
use DB;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * 用户列表页面
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 搜索
        // 接受搜索的参数
        $search_uname = $request->input('search_uname','');
        $search_email = $request->input('search_email','');

        // 查数据
        $users = Users::where('uname','like','%'.$search_uname.'%')->where('email','like','%'.$search_email.'%')->paginate(5);

        //加载列表页
        return view('admin.users.index',['users'=>$users,'params'=>$request->all()]);
    }

    /**
     * 用户添加页面
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加页
        return view('admin.users.create');
    }

    /**
     * 执行添加操作
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsers $request)
    {
        // 开启事务
        DB::beginTransaction();

        // 上传头像
        if($request->hasFile('photo')){
            // 创建文件上传对象
            $file_path = $request->file('photo')->store(date('Ymd'));
        }else{
            $file_path = '';
        }

        $data = $request->all();

        // 接收数据
        $user = new Users;
        $user->uname = $data['uname'];
        $user->pass = Hash::make($data['pass']);
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $res1 = $user->save();

        // 判断压入用户表
        if($res1){
            // 获取uid
            $uid = $user->id;
        }

        // 压入头像
        $userinfo = new UsersInfos;
        $userinfo->uid = $uid;
        $userinfo->photo = $file_path;
        $res2 = $userinfo->save();

        if($res1 && $res2){
            // 提交事务
            DB::commit();
            return redirect('admin/users')->with('success','添加成功');
        }else{
            // 回滚事务
            DB::rollBack();
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
     * 修改页面
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 查询要修改的数据
        $user = Users::find($id);

        //加载修改页面
        return view('admin/users/edit',['user'=>$user]);
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
        // 开启事务
        DB::beginTransaction();

        //获取头像
        if($request->hasFile('photo')){
            $file_path = $request->file('photo')->store(date('Ymd'));
            Storage::delete($request->input('old_photo'));
        }else{
            $file_path = $request->input('old_photo');
        }

        $user = Users::find($id);
        $user->email = $request->input('email','');
        $user->phone = $request->input('phone','');
        $res1 = $user->save();

        $userinfo = UsersInfos::where('uid',$id)->first();
        $userinfo->photo = $file_path;
        $res2 = $userinfo->save();

        if($res1 && $res2){
            // 提交事务
            DB::commit();
            return redirect('admin/users')->with('success','修改成功');
        }else{
            // 回滚事务
            DB::rollBack();
            return back()->with('error','修改失败');
        }
    }

    /**
     * 删除操作
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 开启事务
        DB::beginTransaction();

        //执行删除
        $userinfo = UsersInfos::where('uid',$id)->first();
        $res1 = Users::destroy($id);
        $res2 = UsersInfos::where('uid',$id)->delete();

        if($res1 && $res2){
            // 提交事务
            DB::commit();
            Storage::delete($userinfo->photo);
            return redirect('admin/users')->with('success','删除成功');
        }else{
            // 回滚事务
            DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}
