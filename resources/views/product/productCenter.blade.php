
<button type="button" class="btn btn-danger">
  <a href="{{url('products/create')}}">添加商品信息</a> <i class="fa fa-crosshairs"></i>
</button>
<table class="table table-bordered table-hover table-condensed">
    <thead>
        <tr>
            <td>
                id
            </td>
            <td>
                产品名
            </td>
            <td>
                序列号
            </td>
            <td>
                库存
            </td>
            <td>
                删除权限级别
            </td>
            <td>
              市场价
            </td>
            <td>
              独家价
            </td>
            <td>
              产品描述
            </td>
            <td>
              产品相册
            </td>
            <td>
              产品类型
            </td>
            <td>
              是否上架
            </td>
            <td>
              是否爆款
            </td>
            <td>
                操作
            </td>
        </tr>
    </thead>
    <tbody >
      @foreach($products as $product)
        <tr class="table-striped">
      <td>{{$product->id}}</td>
      <td>{{$product->proName}}</td>
       <td>{{$product->proSn}}</td>
        <td>{{$product->proNum}}</td>
        <td>{{$product->deletePermission}}</td>
         <td>{{$product->marketPrice}}</td>
          <td>{{$product->webPrice}}</td>
           <td>{{$product->proDescription}}</td>
            <td>{{$product->proImg}}</td>
             <td>{{$product->cate->cName}}</td>
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
                  <button type="button" class="btn btn-danger">
                  <a href="{{route('product.delete',['product'=>$product->id])}}">删除</a> <i class="fa fa-crosshairs"></i>
                  </button>
                  <button type="button" class="btn btn-primary">
                  <a href="{{route('products.edit',['product'=>$product->id])}}">修改</a> <i class="fa fa-pencil"></i>
                  </button>
              </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div align='right'>{{ $products->links() }}</div>



<!-- <ul>
    <li><a href="{{url('products')}}">查看所有商品信息</a></li>
	<li><a href="{{url('products/create')}}">添加商品信息</a></li>
</ul> -->
