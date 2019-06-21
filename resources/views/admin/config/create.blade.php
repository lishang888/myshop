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
<h1 class="page-header">网站配置管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                网站配置添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/config"  enctype="multipart/form-data">
						{{csrf_field()}}
                            <div class="form-group">
                                <label>网站配置标题</label>
                                <input class="form-control" type="text" name="cname" value="{{ old('cname') }}" placeholder="标题">
                            </div>


                            <div class="form-group">
                                <label>网站配置URL</label>
                                <input class="form-control" type="text" name="url" value="{{ old('url') }}" placeholder="配置URL">
                            </div>


                           <!--  <div class="form-group">
                                <label>网站配置状态</label>
                                <br>
                              	未开启<input type="radio" name="status" value="0" checked>
						      	&nbsp;&nbsp;&nbsp;
						      	开启<input type="radio" name="status" value="1">
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