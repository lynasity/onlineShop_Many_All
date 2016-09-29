<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
</head>
<body>
<h1>{{$customer->username}} have loged in</h1>
<br>
<a href="{{url('customer/logout')}}">退出登录</a>
</body>
</html>


