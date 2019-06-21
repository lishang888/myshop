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
<h1 class="page-header">广告管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/advers" enctype="multipart/form-data">
							{{csrf_field()}}
                            <div class="form-group">
                                <label for="aname">广告标题</label>
                                <input class="form-control" type="text" name="aname" id="aname" value="{{ old('cname') }}" placeholder="商品广告标题">
                            </div>
                            <div class="form-group">
                                <label for="desc">广告描述</label>
                                <input class="form-control" type="text" name="desc" id="desc" value="{{ old('cname') }}" placeholder="商品广告描述">
                            </div>
                            <div class="form-group">
                                <label for="url">广告跳转</label>
                                <input class="form-control" type="text" name="url" id="url" value="{{ old('cname') }}" placeholder="商品ID号">
                            </div>
                            <div class="form-group">
                                <label for="photo">广告图片</label>
                                <input class="form-control" type="file" name="photo" id="photo" value="{{ old('cname') }}" placeholder="商品广告主图">
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