<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge
     <link rel="stylesheet" href="{{asset('./customer/css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('./customer/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('./customer/css/font-awesome.min.css')}}"/>
    <title>title</title>
  </head>
  <body>
    <nav class="page-signup">
      <div class="banner">
        <div class="wrap">
          <div class="banner-container">
            <div class="logo"><a href="#">Many&All</a></div>
            <div class="welcome">欢迎注册</div>
          </div>
        </div>
      </div>
      <div class="signup-form">
        <div class="wrap">
          <div class="signup-form-container">
            <div class="left-img"></div>
            <div class="right-form">
              <div class="form-header">账户注册</div>
              <form action="{{url('admin/register')}}" id="login-form"></form>
              <ul>
                <li>
                  <label for="user">账户名</label>
                  <input required="required" type="text" id="user" placeholder="邮箱/用户名/手机号"/>
                </li>
                <li>
                  <label for="pwd">设置密码</label>
                  <input required="required" type="text" id="pwd" placeholder="*******"/>
                </li>
                <li>
                  <label for="pwd-repeat">确认密码</label>
                  <input required="required" type="text" id="pwd-repeat" placeholder="*******"/>
                </li>
                <li>
                  <label for="email">邮箱</label>
                  <input required="required" type="text" id="email" placeholder="example@example.com"/>
                </li>
                <li class="btn-signup">
                  <input type="submit" value="提交"/>
                </li>
                <li class="link-to-login">已有账户,去<a href="{{url('admin/login')}}">登录</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    @if(count($errors)>0)
<div class="alert alert-danger" role="alert">
          <ul>
          {{--all方法获取所有错误--}}
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
          </ul>
</div>
@endif
    <footer>
      <ul> 
        <li><span class="copyright">Copyright &copy; 2016-2016 </span><span class="powerd">Powerd By <a href="#">Larvel,</a>Host on <a href="#"><span class="fa fa-github"></span> Github</a></span></li>
        <li>
          <div class="author">Authors:<a href="" title="BackEnd">Many Hong </a>& <a href="" title="FrontEnd">Quill Jou</a></div>
        </li>
      </ul>
    </footer>
  </body>
</html>