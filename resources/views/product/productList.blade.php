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
     	</tr>
        @foreach($products as $product)
          <tr>
          	 <td>$product->proName</td>  
          	  <td>$product->proSn</td> 
          	   <td>$product->proNum</td> 
          	    <td>$product->maketPrice</td> 
          	     <td>$product->webPrice</td> 
          	      <td>$product->proDescripetion</td> 
          	       <td>$product->proImg</td> 
          	        <td>$product->cateId</td> 
          	         <td>$product->isShow</td> 
          	         <td>$product->isHost</td>          
          </tr>   
        @endforeach
     </table>

   </ul>
</body>
</html>