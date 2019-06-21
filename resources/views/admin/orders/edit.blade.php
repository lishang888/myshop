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
                用户修改
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/users/{{$user->id}}" enctype="multipart/form-data">
						{{csrf_field()}}
                        {{method_field('PUT')}}
                            <div class="form-group">
                                <label>用户名</label>
                                <input disabled class="form-control" type="text" name="uname" value="{{ $user->uname }}" placeholder="用户名">
                            </div>

							<div class="form-group">
                                <label>手机号</label>
                                <input class="form-control" type="text" name="phone" value="{{ $user->phone }}" placeholder="手机号">
                            </div>

                            <div class="form-group">
                                <label>邮箱</label>
                                <input class="form-control" type="text" name="email" value="{{ $user->email }}" placeholder="邮箱">
                            </div>

                            <div class="form-group">
                                <label>权限</label>
                                <select class="form-control" name="power">
                                    <option value="0" {{$user->power==0 ? 'selected' : ''}}>普通用户</option>
                                    <option value="1" {{$user->power==1 ? 'selected' : ''}}>商家</option>
                                    <option value="2" {{$user->power==2 ? 'selected' : ''}}>管理员</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>性别</label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline1" value="0" {{$user->userinfo->sex==0 ? 'checked' : ''}}>女
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline2" value="1" {{$user->userinfo->sex==1 ? 'checked' : ''}}>男
                                </label>
                            </div>

                            <div class="form-group">
                                <label>状态</label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" id="optionsRadiosInline1" value="0" {{$user->status==0 ? 'checked' : ''}}>禁用
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" id="optionsRadiosInline2" value="1" {{$user->status==1 ? 'checked' : ''}}>开启
                                </label>
                            </div>

                            <input type="hidden" name="old_photo" value="{{$user->userinfo->photo}}">
                            <div class="form-group">
                                <label>头像</label>
                                <img style="width:200px;height:200px;" class="img-circle" src="/uploads/{{$user->userinfo->photo}}" alt="">
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