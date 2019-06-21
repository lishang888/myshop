@extends('admin.layout.index')

@section('content')

<h1 class="page-header">广告管理</h1>
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
                        	<th>广告标题</th>
                        	<th>广告图片</th>
                        	<th>商品ID</th>
                        	<th>创建时间</th>
                        	<th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
						@foreach($advers as $k=>$v)
						<tr style="height: 50px;">
							<td>{{ $v->id }}</td>
							<td>{{ $v->aname }}</td>
							<td>
								<img style="width: 80px; height: 80px;" src="/uploads/{{ $v->photo }}"/>
							</td>
							<td>{{ $v->url }}</td>
							<td>{{ $v->created_at }}</td>
							<td>
								<a class="btn btn-success" href="/admin/advers/{{ $v->id }}/edit">修改</a>
								<a class="btn btn-danger" href="javascript:;" url="{{ $v->photo }}" onclick="del({{ $v->id }},this)">删除</a>
								@if($v->status == 0)
								<a class="btn btn-warning" href="javascript:;" stu="{{ $v->status }}" onclick="off({{ $v->id }},this)">关闭</a>
								@else
								<a class="btn btn-primary" href="javascript:;" stu="{{ $v->status }}" onclick="off({{ $v->id }},this)">激活</a>
								@endif
							</td>
						</tr>
						@endforeach
                    </tbody>
                </table>
           		</div>
           		<script>
					// 删除
					function del(id,obj)
					{
		        		let photo=$(obj).attr('url');
		        		// return false;
						if(!window.confirm('你确定要删除吗?')){
							return false;
						}

						$.get('/admin/advers/del',{id,photo},function(res){
							if(res == 'ok'){
								// 删除tr节点(
								$(obj).parent().parent().remove();
								alert('删除成功');
							}else{
								alert('删除失败');
							}
						},'html');
					}

					// 打开关闭状态
					function off(id,obj)
					{
		        		let status=$(obj).attr('stu');
						$.get('/admin/advers/statu',{id,status},function(res){
							if(res == '0'){
								alert('激活成功');
								location.reload()
							}else if(res == '1'){
								alert('关闭成功');
								location.reload()
							}
						},'html');
					}
				</script>
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