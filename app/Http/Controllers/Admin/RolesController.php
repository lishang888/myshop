<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RolesController extends Controller
{
    public static function conall()
    {
        return [
            'userscontroller' => '用户管理',
            'catescontroller' => '分类管理',
            'adminusercontroller' => '管理员',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles_data = DB::table('roles')->get();
        // 加载模板
        return view('admin.roles.index',['roles_data'=>$roles_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nodes_data = DB::table('nodes')->get(); 

        $list = [];
        foreach($nodes_data as $k=>$v){
            $temp['id'] = $v->id;
            $temp['cname'] = $v->cname;
            $temp['aname'] = $v->aname;
            $temp['desc'] = $v->desc;

            $list[$v->cname][] = $temp; 
        }

        // 加载模板
        return view('admin.roles.create',['list'=>$list,'conall'=>self::conall()]);
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
        DB::beginTransaction();

        $rname = $request->input('rname','');
        $nids = $request->input('nids');

        // 添加角色表
        $rid = DB::table('roles')->insertGetId(['rname'=>$rname]);
        // 添加角色关系表
        foreach($nids as $k=>$v){
            $res = DB::table('roles_nodes')->insert(['rid'=>$rid,'nid'=>$v]);
        }

        if ($rid && $res) {
            DB::commit();
            return redirect('admin/roles')->with('success','添加成功');
        } else {
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
        // 开启事务
        DB::beginTransaction();

        //执行删除
       $res1 = DB::table('roles')->where('id',$id)->delete();
       $res2 = DB::table('roles_nodes')->where('rid',$id)->delete();

       // dump($res1);
       // dd($res2);
        if($res1 && $res2){
            // 提交事务
            DB::commit();
            return redirect('admin/roles')->with('success','删除成功');
        }else{
            // 回滚事务
            DB::rollBack();
            return back()->with('error','删除失败');
        }
    }
}