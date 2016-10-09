<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="{{asset('./customer/css/reset.css')}}"/>
    <link rel="stylesheet" href="{{asset('./customer/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('./customer/css/font-awesome.min.css')}}"/>
    <title>title</title>
  </head>
  <body>
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
              <form action="{{url('admin/login')}}" id="login-form">
                <ul></ul>
                <li class="user">
                  <label for="user"> <span class="fa fa-user icon"></span></label>
                  <input type="text" id="user" placeholder="邮箱/用户名/已验证手机" required="required"/>
                </li>
                <li class="pwd">                       
                  <label for="pwd"> <span class="fa fa-lock icon"></span></label>
                  <input type="text" id="pwd" placeholder="密码" required="required"/>
                </li>
                <li class="login-options">
                  <ul>
                    <li>
                      <input type="checkbox" id="auto-login" name='remember' value='true' />
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
                      <li><span class="fa fa-weibo icon-weibo"> </span><a href="">微博</a></li>
                      <li><span class="fa fa-wechat icon-wechat"> </span><a href="">微信</a></li>
                    </ul>
                  </div>
                  <div class="link-to-signup"><a href="{{url('admin/register')}}">免费注册</a></div>
                </li>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
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