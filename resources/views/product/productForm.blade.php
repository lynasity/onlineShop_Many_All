<!DOCTYPE html>
<html>
<head>
 <title>添加商品</title>
</head>
<body>
	<form method="post" action="{{url('products')}}" enctype="multipart/form-data">
	  <ul>
		{{csrf_field()}}
		<li>
		商品名称
		<input type="text" name="proName" required>
		</li>
		<li>
      	商品序列号
        <input type="text" name="proSn" required>
        </li>
        <li>
     	商品数量
     	<input type="text" name="proNum" required>
     	</li>
     	<li>
     	市场价
     	<input type="text" name="marketPrice" required>
     	</li>
     	独家价格
     	<input type="text" name="webPrice" required>
     	<li>
     	商品描述
     	<textarea name="proDescription" placeholder="添加商品描述"></textarea>
     	</li>
     	<li>
     	商品图片
     	<!-- 暂时模拟 -->
     	<input type="text" name="proImg">
     	<!-- <input type="file" name="proImg"> -->
     	</li>
     	<li>
     	商品品类
     	<select name='cateId' >
     	@foreach($cates as $cate)
     	    <option value="{{$cate->id}}" >{{$cate->cName}}</option>
     	@endforeach
     	</select>
     	</li>
     	<li>
     	是否上架:
     	<select name='isShow' >
     		<option value="1" selected>是</option>
     		<option value="0">否</option>
     	</select>
     	</li>
     	<li>
     	是否热款
     	<select name="isHot">
     		<option value="1">是</option>
     		<option value="0" selected>否</option>
     	</select>
     	</li>
      <!-- <botton type='button'>添加</botton> -->
       <input type="submit" value ="添加">
       </ul>
	</form>
</body>
</html>
