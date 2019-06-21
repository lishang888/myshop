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
<h1 class="page-header">分类管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/cates">
							{{csrf_field()}}
                            <div class="form-group">
                                <label for="cname">分类名称</label>
                                <input class="form-control" type="text" name="cname" value="{{ old('cname') }}" placeholder="用户名">
                            </div>
                            <div class="form-group">
                                <label for="pid">所属栏目</label>
								<select class="form-control" name="pid" id="pid">
									<option value="0">--请选择--</option>
									@foreach($cates as $k=>$v)
									<option value="{{ $v->id }}" {{ substr_count($v->path,',') >= 2 ? 'disabled' : '' }} {{ $v->id == $id ? 'selected' : '' }}>{{ $v->cname }}</option>
									@endforeach
								</select>
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