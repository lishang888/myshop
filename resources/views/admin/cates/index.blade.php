@extends('admin.layout.index')

@section('content')

<h1 class="page-header">分类管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                用户列表
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <table class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;" width="100%">
                    <thead>
                        <tr style="height: 55px;">
                        	<th>ID</th>
                        	<th>分类名称</th>
                        	<th>父级ID</th>
                        	<th>分类路径</th>
                        	<th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($cates as $k=>$v)
						<tr style="height: 50px;">
							<td>{{ $v->id }}</td>
							<td>{{ $v->cname }}</td>
							<td>{{ $v->pid }}</td>
							<td>{{ $v->path }}</td>
							<td>
								@if( substr_count($v->path,',') == 1 )
								<a class="btn btn-info" href="/admin/cates/create?id={{ $v->id }}">添加三级分类</a>
								@endif
								@if( substr_count($v->path,',') == 0 )
								<a class="btn btn-success" href="/admin/cates/create?id={{ $v->id }}">添加二级分类</a>
								@endif
							</td>
						</tr>
						@endforeach
                    </tbody>
                </table>
           		</div>
       		 </div>
                <!-- 分页 开始 -->
                <div></div>
                <!-- 分页 结束 -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@endsection