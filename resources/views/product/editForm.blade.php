<!DOCTYPE html>
<html>
<head>
	<title>修改商品信息</title>
</head>
<body>
    <form method="post" action="{{route('products.update',['product'=>$product->id])}}">
        	 {{csrf_field()}}
        {{ method_field('PUT') }}
        <ul>
		<li>
		商品名称
		<input type="text" name="proName" value="{{$product->proName}}" required>
		</li>
		<li>
      	商品序列号
        <input type="text" name="proSn" required value="{{$product->proSn}}">
        </li>
        <li>
     	商品数量
     	<input type="text" name="proNum" required value="{{$product->proNum}}">
     	</li>
     	<li>
     	市场价
     	<input type="text" name="marketPrice" required value="{{$product->marketPrice}}">
     	</li>
     	独家价格
     	<input type="text" name="webPrice" required value="{{$product->webPrice}}">
     	<li>
     	商品描述
     	<textarea name="proDescription">{{$product->proDescription}}</textarea>
     	</li>
     	<li>
     	商品图片
     	<!-- 暂时模拟 -->
     	<input type="text" name="proImg" value="{{$product->proImg}}">
     	<!-- <input type="file" name="proImg"> -->
     	</li>
     	<li>
     	商品品类
     	<select name='cateId' >
     	@foreach($cates as $cate)
     	    <option value="{{$cate->id}}" @if($cate->id==$product->cateId)selected @endif>{{$cate->cName}}</option>
     	@endforeach
     	</select>
     	</li>
     	<li>
     	是否上架:
     	<select name='isShow' >
     		<option value="1" @if($product->isShow==1)selected @endif>是</option>
     		<option value="0" @if($product->isShow==0)selected @endif>否</option>
     	</select>
     	</li>
     	<li>
     	是否热款
     	<select name="isHot">
     		<option value="1" @if($product->isHot==1)selected @endif>是</option>
     		<option value="0" @if($product->isHot==0)selected @endif>否</option>
     	</select>
     	</li>
       <input type="submit" value ="修改">
       </ul>
    </form>
</body>
</html>