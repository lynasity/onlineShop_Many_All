
<html>
  <head>
    <meta charset="utf-8"/>
    <title>前台产品展示页</title>
  </head>
     <body>
      <table border="1">
         <tr>
           <th>
             商品名称
           </th>
           <th>
             商品描述
           </th>
           <th>
             价格
           </th>
           <th>
             商品图片
           </th>

         </tr>
           @foreach($products as $product)
           <tr>
             <td>{{$product->proName}}</td>
             <td>{{$product->proDescription}}</td>
             <td>{{$product->webPrice}}</td>
             <td><a href="{{url('products/detail',['id'=>$product->id])}}">{{$product->proImg}}</a></td>
           </tr>
           @endforeach
      </table>
     </body>
</html>
