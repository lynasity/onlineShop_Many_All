<!DOCTYPE html>
<html>
<head>
	<title>品类添加</title>
</head>
<body>
   <form method="post" action="{{url('cates')}}">
           {{ csrf_field()  }}
      <!-- 这里需要判断是否是子品类 -->
      <label>是否全新品类</label>
      <select name="isNew">
      	<option value=1>是</option>
      	<option value=0>否</option>
      </select>
      <br>
      <label>如果不是，请选择父品类</label>
       <select name="parentCate">
       @foreach($cates as $cate)
      	<option value="{{$cate->id}}">{{$cate->cName}}</option>
       @endforeach
      </select>
      <br>
   	  <input type="text" name="cName">
   	  <input type="submit" value="添加">
   </form>
</body>
</html>