@inject('shoppingCart','\shoppingCart')
@inject('productModel','App\product')
<html>
  <head>
    <meta charset="utf-8"/>
    <title>订单</title>
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
            <th>
              数量
            </th>
            <th>
              价格
            </th>
            <th>
              操作
            </th>
          </tr>
            @foreach($allItem as $item)
            <tr>
              <td>{{($productModel::find($item->pro_Id))->proName}}</td>
              <td>{{($productModel::find($item->pro_Id))->proDescription}}</td>
              <td>{{($productModel::find($item->pro_Id))->webPrice}}</td>
              <td>
                {{($productModel::find($item->pro_Id))->proImg}}
              </td>
              <td>
                {{$item->itemNum}}
              </td>
              <td>
                {{$item->itemPrice}}
              </td>
              <td>
                 <a href="{{url('customer/addToShopCart',[$item->pro_Id])}}">加1</a>
                |<a href="{{url('customer/cutFromShopCart',[$item->pro_Id])}}">减1</a>
                |<a href="{{url('customer/removeFromShopCart',[$item->pro_Id])}}">移除</a>
               <td>
            </tr>
            @endforeach
       </table>
       <p>
         <select>
           @foreach()
           <option></option>
           @endforeach
         </select>
       </p>
       <p>
         <a href="">提交订单</a>
       </p>
     </body>
</html>
