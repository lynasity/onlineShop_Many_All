<!DOCTYPE html>
<html>
<head>
	<title>修改信息</title>
</head>
<body>
  <form method="post" action="{{route('cates.update',['cate'=>$cate->id])}}">
     {{csrf_field()}}
     {{ method_field('PUT') }}
  	<!-- <input type="text" name="id" value="{{$cate->id}}"> -->
  	<input type="text" name="cName" value="{{$cate->cName}}">
    <input type="submit" name="修改">
  </form>
</body>
</html>
