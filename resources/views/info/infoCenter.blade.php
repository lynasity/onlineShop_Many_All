<!DOCTYPE html>
 <html>
 <head>
 	<title>消息中心</title>
 </head>
 <body>
       @section('menu')
       <a href="{{url('customer/allInfo',['customer'=>$customer])}}">所有信息</a>
       <br>
       <a href="{{url('customer/unreadInfo',['customer'=>$customer])}}">未读消息({{count($customer->
       unreadNotifications)}})</a>
       <br>
       <a href="{{route('deleteInfo')}}">删除消息</a>
       @show
 </body>
 </html>