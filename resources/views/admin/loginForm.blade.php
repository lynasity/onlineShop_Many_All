<form action="{{url('admin/login')}}" method="post">
     {{ csrf_field() }}
	<label>用户</label>
	<input type="text" name="username">
	<br>
	<label>密码</label>
	<input type="password" name="password">
    <br>
    <label>记住我</label>
    <input type="radio" name="remember">
	<input type="submit" value="login">
</form>