@extends('admin.layout.index')

@section('content')
<h1 class="page-header">订单管理</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                订单列表
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                        <form action="/admin/users" method="get">
                            <div id="dataTables-example_filter" class="dataTables_filter">
                                <label>
                                订单号:<input type="text" name="search_uname" class="form-control input-sm" placeholder="用户名" value="" aria-controls="dataTables-example">
                                </label>&nbsp;
                                <label>
                                商品名:<input type="text" name="search_email" class="form-control input-sm" placeholder="邮箱" value="" aria-controls="dataTables-example">
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
                        	<th>订单号</th>
                        	<th>邮箱</th>
                        	<th>手机号</th>
                            <th>头像</th>
                            <th>创建时间</th>
                        	<th>操作</th>
                        </tr>
                    </thead>
                    <tbody>

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