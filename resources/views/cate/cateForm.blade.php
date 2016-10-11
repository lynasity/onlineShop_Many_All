<!DOCTYPE html>
<html>
<head>
	<title>品类添加</title>
</head>
<body>
   <form method="post" action="{{url('cates')}}">
           {{ csrf_field()  }}
   	  <input type="text" name="cName">
   	  <input type="submit" value="添加">
   </form>
</body>
</html>