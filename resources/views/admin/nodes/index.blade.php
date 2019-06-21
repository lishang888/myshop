@extends('admin.layout.index')

@section('content')


<h1 class="page-header">管理员</h1>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            管理员列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                    	<th tabindex="0" rowspan="1" colspan="1" style="width: 170px; text-align: center;">
                                    		ID
                                    	</th>
                                    	<th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 206px;  text-align: center;">
                                    		权限名称
                                    	</th>

                                        <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 206px;  text-align: center;">
                                            控制器名称
                                        </th>

                                        <th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 206px;  text-align: center;">
                                            方法名称
                                        </th>
                                    	
                                    	<th tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 147px;  text-align: center;">
                                    		操作
                                    	</th>
                                    	
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    @foreach($data as $k=>$v) 
                                    <tr class="gradeA odd" role="row" style="text-align: center;">
                                        <td class="sorting_1">{{ $v->id }}</td>
                                        <td>{{ $v->desc }}</td>
                                        <td>{{ $v->cname }}</td>
                                        <td>{{ $v->aname }}</td>
                                       
                                       
                                        <td class="center">
                                            <form action="/admin/nodes/{{ $v->id }}" method="post" style="display: inline-block;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input type="submit" value="删除" class="btn btn-danger">
                                            </form>
                                            <a href="" class="btn btn-info">修改</a>
                                        </td>
                                     </tr>
                                    @endforeach
								
                                </tbody>
                            </table></div></div></div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

@endsection