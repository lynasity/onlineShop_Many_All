<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    @section('meta')
    @show
    <link rel="stylesheet" href="{{asset('./customer/css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('./customer/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('./customer/css/font-awesome.min.css')}}"/>
    <title>@yield('title','title')</title>
  </head>
  <body>
    <div class="page-index">
      <nav class="status-bar">
        <div class="wrap">
          <div class="profile"> <a href="{{route('customerCenter')}}"> <span class="fa fa-user icon-user"></span>个人中心</a></div>
          <div class="signup"><a href="{{url('login')}}">登录</a></div>
          <div class="login"><a href="{{url('customer/registerForm')}}">注册</a></div>
          <div class="shoppingcart"> <a href="{{url('customer/indexShopCart')}}"> <span class="fa fa-shopping-cart icon-shopping-cart"></span>购物车</a></div>
        </div>
      </nav>
        @section('header')
        @show

        @section('mainContent')
        @show
      <footer>
        <ul>
          <li><span class="copyright">Copyright &copy; 2016-2016 </span><span class="powerd">Powerd By <a href="#">Larvel,</a>Host on <a href="#"><span class="fa fa-github"></span> Github</a></span></li>
          <li>
            <div class="author">Authors:<a href="" title="BackEnd">Many Hong </a>& <a href="" title="FrontEnd">Quill Jou</a></div>
          </li>
        </ul>
      </footer>
    </div>
    <script src="{{asset('./customer/js/main.js')}}"></script>
    <script src="{{asset('./customer/js/jquery-3.1.0.js')}}"></script>
  </body>
</html>
