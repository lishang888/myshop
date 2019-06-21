@extends('admin.layout.index')

@section('content')


<!-- 显示错误信息 结束 -->
<h1 class="page-header">权限管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                权限添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/nodes"  enctype="multipart/form-data">
						{{csrf_field()}}
                            <div class="form-group">
                                <label>权限名称</label>
                                <input class="form-control" type="text" name="desc" value="{{ old('desc') }}" placeholder="权限名称">
                            </div>

                            <div class="form-group">
                                <label>控制器名称</label>
                                <input class="form-control" type="text" name="cname" value="{{ old('cname') }}" placeholder="控制器名称">
                            </div>

                             <div class="form-group">
                                <label>方法名称</label>
                                <input class="form-control" type="text" name="aname" value="{{ old('aname') }}" placeholder="方法名称">
                            </div>

                           <!--  <div class="form-group">
                                <label>轮播图状态</label>
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