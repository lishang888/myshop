@extends('admin.layout.index')

@section('content')
<h1 class="page-header">商品管理</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                商品列表
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                        <form action="/admin/shops" method="get">
                            <div id="dataTables-example_filter" class="dataTables_filter">
                                <label>
                                商品名:<input type="text" name="search_shopname" class="form-control input-sm" placeholder="商品名" value="{{$search_shopname}}" aria-controls="dataTables-example">
                                </label>&nbsp;
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
                        	<th>商家</th>
                        	<th>栏目</th>
                        	<th>商品名</th>
                            <th>库存</th>
                            <th>价格</th>
                            <th>规格</th>
                            <th>图片</th>
                            <th>上架时间</th>
                            <!-- <th>置顶</th> -->
                        	<th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($shops as $k=>$v)
                        <tr class="gradeA odd" role="row">
                            <td class="sorting_1">{{$v->id}}</td>
                            <td>{{$v->user->uname}}</td>
                            <td class="">{{$v->cid}}</td>
                            <td class="center">{{$v->shopname}}</td>
                            <td class="center">{{$v->num}}</td>
                            <td class="center">{{$v->price}}</td>
                            <td class="center">{{$v->attr->size}}.{{$v->attr->color}}.{{$v->attr->phone}}</td>
                            <!-- <td class="center"></td> -->
                            <!-- <td class="center"></td> -->
                            <td class="center">
                                <img class="img-thumbnail" src="/uploads/{{$v->profile}}" alt="图片加载失败" style="width:80px;height:80px;">
                            </td>
                            <td class="center">{{$v->created_at}}</td>
                            <!-- <td class="center"><kbd style="background:{{$v->top == 0 ? 'red' : 'green'}}">{{$v->top == 0 ? '未置顶' : '已置顶'}}</kbd></td> -->
                            <td class="center">
                                    <button class="btn btn-danger"><a href="/admin/shops/delete/{{$v->id}}">下架</a></button>
                                    <form action="/admin/shops/{{$v->id}}" method="post" style="display:inline-block;">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger">删除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
                <!-- 分页 开始 -->
                <div>{{ $shops->appends(['search_shopname'=>$search_shopname])->links() }}</div>
                <!-- 分页 结束 -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

@endsection