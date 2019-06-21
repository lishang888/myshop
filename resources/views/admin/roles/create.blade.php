@extends('admin.layout.index')

@section('content')


<!-- 显示错误信息 结束 -->
<h1 class="page-header">角色管理</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                角色添加
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/admin/roles"  enctype="multipart/form-data">
						{{csrf_field()}}
                            <div class="form-group">
                                <label>角色名称</label>
                                <input class="form-control" type="text" name="rname" value="{{ old('rname') }}" placeholder="角色名称">
                            </div>
                            
                            <div class="form-group">
                            <label>角色权限</label>

                            @foreach($list as $k=>$v)
                            <h3>{{ $conall[$k] }} <small>{{ $k }}</small></h3>
                                @foreach($v as $kk=>$vv)
                                <li style="list-style: none;"><input type="checkbox" name="nids[]" value="{{ $vv['id'] }}"><span>{{ $vv['desc'] }}</span></li>
                                @endforeach
                            @endforeach
                            
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