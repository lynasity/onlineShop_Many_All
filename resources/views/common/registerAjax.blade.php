 <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
<!-- 引入封装了failback的接口initGeetest -->
<script src="http://static.geetest.com/static/tools/gt.js"></script>
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
              <!-- <form action="{{url('customer/register')}}" method="post" id="signup-form">
                       {{ csrf_field() }} -->
                  <ul>
                    <li>
                      <label for="user">账户名</label>
                      <input required="required" name='username' type="text" id="username" placeholder="邮箱/用户名/手机号"/>
                    </li>
                    <li>
                      <label for="pwd">设置密码</label>
                      <input required="required" type="password" name='password' id="password" />
                    </li>
                    <li>
                      <label for="pwd-repeat">确认密码</label>
                      <input required="required" type="password" id="pwd-repeat" name='password_confirmation'/>
                    </li>
                    <li>
                      <label for="email">邮箱</label>
                      <input required="required" type="text" id="email"  name='email' placeholder="example@example.com"/>
                    </li>
                    <li class="btn-signup">
                      <input id="popup-submit" type="submit" value="提交">
                    </li>          
                     <div id="popup-captcha"></div>
                    <li class="link-to-login">已有账户,去<a href="{{url('login')}}">登录</a></li>
                  </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
<script>
    var handlerPopup = function (captchaObj) {
        captchaObj.onSuccess(function () {
            var validate = captchaObj.getValidate();
            $.ajax({
                 headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
                url:"{{url('customer/register')}}", // 进行二次验证
                type: "post",
                dataType: "json",
                data: {
                    type: "pc",
                    username: $('#username').val(),
                    password: $('#password').val(),
                    password_confirmation: $('#pwd-repeat').val(),
                    email: $('#email').val(),
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
                },
                success: function (data) {
                    if (data && (data.status === "success")) {
                        $(document.body).html('<a href="{{url("login")}}">恭喜!您已注册成功,点击登录</a>');
                    } else {
                          // location.href="http://www.test.manyhong:8081/laravel-shop/customer/";
                    }
                }
            });
        });
        $("#popup-submit").click(function () {
            captchaObj.show();
        });
        captchaObj.appendTo("#popup-captcha");
    }; 
    $.ajax({
        url: "{{url('getCaptcha')}}?type=pc&t=" + (new Date()).getTime(),
        type: "get",
        dataType: "json",
        success: function (data) {
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                product: "popup", 
                offline: !data.success
            }, handlerPopup);
        }
    });
</script>