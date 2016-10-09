<!DOCTYPE html>
<html>
<head>
  <title>注册</title>
  <form method="post" action="{{route('adminRegister')}}">
     {{ csrf_field() }}
    <label>账号</label>
    <input type="text" required name="username">
    <br>
     <label>密码</label>
    <input type="password" required name="password">
    <br>
     <label>确认密码</label>
    <input required="required" type="password" name='password_confirmation'>
      <br>
      <label>email</label>
      <input type="text" name="email">
      <br>
    <input type="submit" value="注册">
  </form>
    
</head>
<body>

</body>
</html>