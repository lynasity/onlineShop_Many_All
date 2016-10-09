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
    <div class="page-checkout">
      <nav class="status-bar">
        <div class="wrap">
          <div class="profile"> <a href=""> <span class="fa fa-user icon-user"></span>个人中心</a></div>
          <div class="signup"><a href="">登录</a></div>
          <div class="login"><a href="">注册</a></div>
          <div class="shoppingcart"> <a href=""> <span class="fa fa-shopping-cart icon-shopping-cart"></span>购物车</a></div>
        </div>
      </nav>
      <div class="process">
        <div class="wrap">
          <div class="main-info fl"><span class="logo"> <a href="">Many&All</a></span><span class="divider"></span>
          {{--<span class="info">{{ }}</span></div>--}}
          <div class="steps fr"> 
            <div class="step-1">1</div>
            <div class="step-2">2</div>
            <div class="step-3">3</div>
            <p><span>我的购物车</span><span>填写核对订单	</span><span>订单提交成功</span></p>
          </div>
        </div>
      </div>
      <div class="wrap">
        <div class="order-form">
          <div class="order-address">
            <div class="order-header">收货地址</div>
            <form action="" id="form-address">
              <ul>
                <li>
                  <label for="district">选择地区</label>
                  <input type="text" id="district"/>
                </li>
                <li>
                  <label for="detail-address">详细地址</label>
                  <input type="text" id="detail-address"/>
                </li>
                <li>
                  <label for="owner">收货人</label>
                  <input type="text" id="owner"/>
                </li>
                <li class="contact">
                  <label for="mobile">手机号码</label>
                  <input type="text" id="mobile"/>
                  <label for="fixed">或固定电话</label>
                  <input type="text" id="fixed"/>
                </li>
                <li>
                  <input type="submit" value="确认收货地址"/>
                </li>
              </ul>
            </form>
          </div>
          <div class="order-payment">
            <div class="order-header">支付方式</div>
            <form action="">
              <ul>
                <li> <span class="fa fa-wechat"></span>微信支付</li>
                <li><span class="fa fa-alipay"></span>支付宝支付</li>
              </ul>
            </form>
          </div>
          <div class="order-list">
            <div class="order-header">订单详情<a href="" class="back-to-cart">返回购物车修改</a></div>
            <div class="list-header"> 
              <div class="col-name">商品名称</div>
              <div class="col-single-price">单价</div>
              <div class="col-return">返现</div>
              <div class="col-number">数量</div>
              <div class="col-subtotal">小计</div>
            </div>
            <ul> 
              <li>
                <div class="col-name"> 
                  <div class="item-img"><img src="http://placehold.it/80x80"/></div>
                  <div class="item-msg">iPhone 8s 土豪金 128G 大容量</div>
                </div>
                <div class="col-single-price">$999</div>
                <div class="col-return">$0</div>
                <div class="col-number">1</div>
                <div class="col-subtotal">$999</div>
              </li>
            </ul>
          </div>
          <div class="order-checkout"> 
            <div class="order-header">订单结算</div>
            <div class="total">
              <div class="total-number">总计:<span>$999</span></div><a href="href">提交订单</a>
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