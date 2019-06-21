@extends('admin.layout.index')

@section('content')
<h1 class="page-header">用户管理</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户列表
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                        <form action="/admin/users" method="get">
                            <div id="dataTables-example_filter" class="dataTables_filter">
                                <label>
                                用户名:<input type="text" name="search_uname" class="form-control input-sm" placeholder="用户名" value="{{$params['search_uname'] or ''}}" aria-controls="dataTables-example">
                                </label>&nbsp;
                                <label>
                                邮箱:<input type="text" name="search_email" class="form-control input-sm" placeholder="邮箱" value="{{$params['search_email'] or ''}}" aria-controls="dataTables-example">
                                </label>
                                <button type="submit" class="btn btn-info">搜索</button>
                            </div>
                        </form>
                        </div>
                    </div>
                <div class="row">
                <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;" width="100%">
                    <thead>
                        <tr>
                        	<th>ID</th>
                        	<th>用户名</th>
                        	<th>邮箱</th>
                        	<th>手机号</th>
                            <th>头像</th>
                            <th>权限</th>
                            <th>创建时间</th>
                        	<th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $k=>$v)
                    	<tr class="gradeA odd" role="row">
                            <td class="sorting_1">{{$v->id}}</td>
                            <td>{{$v->uname}}</td>
                            <td class="">{{$v->email}}</td>
                            <td class="center">{{$v->phone}}</td>
                            <td class="center">
                                <img class="img-circle" src="/uploads/{{$v->userinfo->photo}}" alt="头像加载失败" style="width:80px;height:80px;">
                            </td>
                            @if($v->power == 2)
                            <td class="center"><kbd>管理员</kbd></td>
                            @elseif($v->power == 1)
                            <td class="center"><kbd style="background:red">商家</kbd></td>
                            @else
                            <td class="center"><kbd style="background:green">普通用户</kbd></td>
                            @endif
                            <td class="center">{{$v->created_at}}</td>
                            <td class="center">
                                <button class="btn btn-info"><a href="/admin/users/{{$v->id}}/edit">修改</a></button>
                                <form action="/admin/users/{{$v->id}}" method="post" style="display:inline-block;">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger">删除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
                <!-- 分页 开始 -->
                <div>{{$users->appends($params)->links()}}</div>
                <!-- 分页 结束 -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

@endsection