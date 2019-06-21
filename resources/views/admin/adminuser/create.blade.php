@extends('admin.layout.index')

@section('content')

<!-- 显示错误信息 开始 -->
@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissable">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- 显示错误信息 结束 -->
<h1 class="page-header">管理员</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                管理员添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/adminuser" enctype="multipart/form-data">
						{{csrf_field()}}
                            <div class="form-group">
                                <label>管理员用户名</label>
                                <input class="form-control" type="text" name="uname" value="{{ old('uname') }}" placeholder="用户名">
                            </div>

							<div class="form-group">
                                <label>管理员密码</label>
                                <input class="form-control" type="password" name="upass" value="" placeholder="密码">
                            </div>

                            <div class="form-group">
                                <label>确认密码</label>
                                <input class="form-control" type="password" name="repass" value="" placeholder="确认密码">
                            </div>


                           <!--  <div class="form-group">
                                <label>管理员头像</label>
                                <input class="form-control" type="file" name="photo" value="" placeholder="头像">
                            </div> -->

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