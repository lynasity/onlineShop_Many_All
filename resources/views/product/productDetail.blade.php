
<html>
  <head>
    <meta charset="utf-8"/>
    <title>前台产品展示页</title>
    <style media="screen">
      .product-detail-form input[type="text"] {
        background: inherit;
        border: none;
        width: 100%;
        height: 100%;
      }
    </style>
  </head>
     <body>
       <form method="post" action="" class="product-detail-form">
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
                操作
              </th>
            </tr>
              <tr>
                <td>
                  <input type="text" name="proName" value="{{$product->proName}}">
                </td>
                <td>
                  <input type="text" name="proName" value="{{$product->proDescription}}">
                </td>
                <td>
                    <input type="text" name="proName" value="{{$product->webPrice}}">
                </td>
                <td>
                    <input type="text" name="proName" value="{{$product->proImg}}">
                </td>
                <td>
                  <a href="{{url('customer/addToShopCart',[$product->id])}}">加入购物车</a>
                </td>
              </tr>
              </table>
              <!-- <input type="submit" name="addToCart" value="加入购物车"> -->
       </form>

      </table>
      <!-- <script type="text/javascript">
        var form = document.getElementsByTagName('form')[0];
        // var field = form.elements[0];
        // console.log(field);
        for(var i = 0; i < form.elements.length; i++){
          if(form.elements[i].type == 'text') {
            form.elements[i].disabled = true;
          }
        }
      </script> -->
     </body>
</html>
