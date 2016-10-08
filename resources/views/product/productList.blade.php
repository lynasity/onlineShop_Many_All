<!DOCTYPE html>
<html>
<head>
	<title>商品列表</title>
</head>
<body>
   <ul>
   <h4>商品详情表</h4>
     <table  border="1">
     	<tr>
     		<th>商品名称</th>
     		<th>商品序列号</th>
     		<th>商品数量</th>
     		<th>市场价</th>
     		<th>独家价格</th>
     		<th>商品描述</th>
     		<th>商品图片</th>
     		<th>商品品类</th>
     		<th>是否上架</th>
     		<th>是否热款</th>
        <th>操作</th>
     	</tr>
        @foreach($products as $product)
          <tr>
          	 <td>{{$product->proName}}</td>  
          	  <td>{{$product->proSn}}</td> 
          	   <td>{{$product->proNum}}</td> 
          	    <td>{{$product->marketPrice}}</td> 
          	     <td>{{$product->webPrice}}</td> 
          	      <td>{{$product->proDescription}}</td> 
          	       <td>{{$product->proImg}}</td> 
          	        <td>{{App\cate::find($product->cateId)->cName}}</td> 
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
             <td><a href="{{route('products.edit',['product'=>$product->id])}}">修改</a>|<a href="{{route('product.delete',['product'=>$product->id])}}">删除</a></td>       
          </tr>   
        @endforeach
     </table>

   </ul>
</body>
</html>