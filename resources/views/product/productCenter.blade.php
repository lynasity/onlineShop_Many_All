<div class="product">

    <table class="table table-bordered  table-striped product-table table-hover table-responsive table-condensed" id="productTable">
        <thead class="product-head">
            <tr>
                <th>
                    Id
                </th>
                <th>
                    产品名
                </th>
                <th>
                    序列号
                </th>
                <th>
                    库存
                </th>
                <th>
                    删除权限级别
                </th>
                <th>
                    市场价
                </th>
                <th>
                    独家价
                </th>
                <th>
                    产品描述
                </th>
                <th>
                    产品相册
                </th>
                <th>
                    产品类型
                </th>
                <th>
                    是否上架
                </th>
                {{-- <th>
                是否爆款
            </th> --}}
            <th>
                操作
            </th>
        </tr>
    </thead>
    <tbody >

        @foreach($products as $product)
            <tr>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->id}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->proName}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->proSn}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->deletePermission}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->marketPrice}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->webPrice}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->id}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->proDescription}}">
                </td>
                <td>
                    <input class="table-input" type="text" name="name" value="{{$product->proImg}}">
                </td>
                {{-- <td>
                <input type="text" name="name" value="{{$product->cate->cName}}">
            </td> --}}

            {{-- <td>{{$product->id}}</td>
            <td>{{$product->proName}}</td>
            <td>{{$product->proSn}}</td>
            <td>{{$product->proNum}}</td>
            <td>{{$product->deletePermission}}</td>
            <td>{{$product->marketPrice}}</td>
            <td>{{$product->webPrice}}</td>
            <td>{{$product->proDescription}}</td>
            <td>{{$product->proImg}}</td> --}}
            {{-- <td>{{$product->cate->cName}}</td> --}}
            <td>
                @if($product->isShow==1)
                    是
                @else
                    否
                @endif
            </td>
            <td>
                @if($product->isHot==1)
                    是
                @else
                    否
                @endif
            </td>
            <td>
                <button type="button" class="btn btn-danger deleteBtn">
                    删除<i class="fa fa-close"></i>
                </button>
                <button type="button" class="btn btn-primary modifyBtn">
                    修改<i class="fa fa-pencil"></i>
                </button>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
    <div align='right'>{{ $products->links() }}</div>

    {{-- <button type="button" class="btn btn-danger goto-edit"> --}}
    {{-- <a href="{{url('products/create')}}">添加商品信息</a> <i class="fa fa-crosshairs"></i> --}}
    {{-- <a href="{{url('products/create')}}">去添加商品信息</a> <i class="fa fa-signout"></i> --}}
{{-- </button> --}}
    {{-- <div class="alert alert-success"></div>
    <div class="alert alert-success"></div> --}}
</div>
