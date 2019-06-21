@extends('shoper_admin.layout.index')

@section('content')


<div class="col-lg-6">
    <form role="form" action="/shoper_admin/shops/store" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
        <div class="form-group">
            <label>商品名称</label>
            <input type="text" class="form-control" placeholder="商品名称" name="shopname">
        </div>
        <div class="form-group">
            <label>商品图片</label>
            <input type="file" name="profile">
        </div>
        <div class="form-group">
            <label>商品介绍</label>
            <textarea class="form-control" rows="3" name="desc"></textarea>
        </div>


        <div class="form-group">
            <label for="pid">所属栏目</label>
			<select class="form-control" name="cid" id="cid">
				<option value="">请选择</option>
				@foreach($cates as $k=>$v)
				<option value="{{ $v->id }}" {{ substr_count($v->path,',') < 2 ? 'disabled' : '' }}>{{ $v->cname }}</option>
				@endforeach
			</select>
        </div>

        <div class="form-group">
            <label>商品库存</label>
            <input type="text" class="form-control" placeholder="库存" name="num">
        </div>

		<div class="form-group">
            <label>单品价格</label>
            <input type="text" class="form-control" placeholder="价格" name="price">
        </div>

        <div class="form-group">
            <label>尺寸</label>
            <input type="text" class="form-control" placeholder="尺寸" name="size">
        </div>

        <div class="form-group">
            <label>颜色</label>
            <input type="text" class="form-control" placeholder="颜色" name="color">
        </div>

        <div class="form-group">
            <label>手机规格</label>
            <input type="text" class="form-control" placeholder="手机规格" name="phone">
        </div>

        <button type="submit" class="btn btn-success">提交</button>
        <button type="reset" class="btn btn-danger">重置</button>
    </form>
</div>

@endsection