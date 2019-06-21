@extends('admin.layout.index')

@section('content')

<!-- 显示错误信息 开始 -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- 显示错误信息 结束 -->
<h1 class="page-header">用户管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/users" enctype="multipart/form-data">
						{{csrf_field()}}
                            <div class="form-group">
                                <label>用户名</label>
                                <input class="form-control" type="text" name="uname" value="{{ old('uname') }}" placeholder="用户名">
                            </div>

							<div class="form-group">
                                <label>密码</label>
                                <input class="form-control" type="password" name="pass" value="" placeholder="密码">
                            </div>

                            <div class="form-group">
                                <label>确认密码</label>
                                <input class="form-control" type="password" name="repass" value="" placeholder="确认密码">
                            </div>

							<div class="form-group">
                                <label>手机号</label>
                                <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" placeholder="手机号">
                            </div>

                            <div class="form-group">
                                <label>邮箱</label>
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="邮箱">
                            </div>

                            <div class="form-group">
                                <label>头像</label>
                                <input class="form-control" type="file" name="photo" placeholder="头像">
                            </div>

                            <button type="submit" class="btn btn-success">提交</button>
                            <button type="reset" class="btn btn-primary">重置</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection