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
              <form action="{{url('customer/register')}}" method="post" id="signup-form">
                       {{ csrf_field() }}
                  <ul>
                    <li>
                      <label for="user">账户名</label>
                      <input required="required" name='username' type="text" id="user" placeholder="邮箱/用户名/手机号"/>
                    </li>
                    <li>
                      <label for="pwd">设置密码</label>
                      <input required="required" type="password" name='password' id="pwd" />
                    </li>
                    <li>
                      <label for="pwd-repeat">确认密码</label>
                      <input required="required" type="password" id="pwd-repeat" name='password_confirmation'/>
                    </li>
                    <li>
                      <label for="email">邮箱</label>
                      <input required="required" type="text" id="email"  name='email' placeholder="example@example.com"/>
                    </li>
                    <!-- 留在登录限流用 -->
                    <!--  <li>
                      <label for='captcha'>请输入验证码</label>
                      <input type="text" id='captcha' name="captcha">
                    </li> -->
                   <!--  <li>
                      <img src="{{Captcha::src()}}">
                      </li> -->
                    <li class="btn-signup">
                      <input type="submit" value="提交"/>
                    </li>
                    <li class="link-to-login">已有账户,去<a href="{{url('login')}}">登录</a></li>
                  </ul>
            </form>
            </div>
          </div>
        </div>
      </div>
    </nav>