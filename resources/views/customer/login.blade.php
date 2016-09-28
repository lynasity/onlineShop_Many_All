@extends('common.layouts')

@section('meta')
  @stop

@section('title')
登录
@stop

@section('style')
@stop

@section('maincontent')
   <div class="page-login">
      <div class="banner">
        <div class="wrap">
          <div class="banner-container">
            <div class="logo"><a href="#">Many&All</a></div>
            <div class="welcome">欢迎登录</div>
          </div>
        </div>
      </div>
      <div class="login-form">
        <div class="wrap">
          <div class="login-form-container">
            <div class="left-img"></div>
            <div class="right-form">
              <div class="form-header">账户登录</div>
              <form action="{{url('customer/login')}}" method="post" id="login-form">
                {{ csrf_field() }}
                <!-- <ul></ul> -->
                <li class="user">
                  <label for="user"> <span class="fa fa-user icon"></span></label>
                  <input type="text" id="user" name="username" placeholder="邮箱/用户名/已验证手机" required="required"/>
                </li>
                <li class="pwd">                       
                  <label for="pwd"> <span class="fa fa-lock icon"></span></label>
                  <input type="password" name="password" id="pwd" placeholder="密码" required="required"/>
                </li>
                <li class="login-options">
                  <ul>
                    <li>
                      <input type="checkbox" name="remember" id="auto-login"/>
                      <label for="auto-login">自动登录</label>
                    </li>
                    <li><a href="forget-pwd">忘记密码?</a></li>
                  </ul>
                </li>
                <li class="btn-login">
                  <input type="submit" value="登录"/>
                </li>
                <li>
                  <div class="other-login">
                    <p>使用合作网站账号登录:</p>
                    <ul>
                      <li><span class="fa fa-qq icon-qq"> </span><a href="">QQ</a></li>
                      <li><span class="fa fa-weibo icon-weibo"> </span><a href="{{url('customer/weibo')}}">微博</a></li>
                      <li><span class="fa fa-wechat icon-wechat"> </span><a href="">微信</a></li>
                    </ul>
                  </div>
                  <div class="link-to-signup"><a href="{{url('customer/registerForm')}}">免费注册</a></div>
                </li>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop

@section('script')
@stop