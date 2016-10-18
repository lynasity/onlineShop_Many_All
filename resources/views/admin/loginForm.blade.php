{{-- <form action="{{url('admin/login')}}" method="post">
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
	<a href="{{url('admin/register')}}">注册</a>
</form>
 --}}
@extends('common.layouts')
    <div id="admin" class="page-admin">
      <div id="overlay" class="overlay"></div>
      <div class="form-container">
          <div class="form-header"><span>Many&All</span>后台管理系统</div>
          <div id="face" class="face"><img src="http://www.fillmurray.com/100/100"/></div>
          <form action="{{url('admin/login')}}" method="post" class="login-form">
          {{ csrf_field() }}
            <ul>
              <li>
                <label class="tip" for="admin-username">用户</label>
                <input type="text" name="username" id="adminUsername" placeholder="ususername"/>
              </li>
              <li>
                <label class="tip" for="admin-pwd">密码</label>
                <input type="password" name="password" id="pwd" placeholder="papassword"/>
              </li>
              <li class="remember">
                  <label for="remember" class="text-left">
                      记住我
                  </label>
                  <input type="checkbox" name="remember" id="remember" class="remember-box" checked>
                  <label for="remember" class="remember-toggle"></label>
              </li>
              <li>
                  <input type="submit" value="登录"/>
              </li>
            </ul>
          </form>
        </div>
    </div>
