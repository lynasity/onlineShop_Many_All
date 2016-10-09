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
    <div class="page-shoppingcart">
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
          {{--   <span class="info">{{ }}</span></div> --}} 
            <span class="info"></span></div>
          <div class="steps fr"> 
            <div class="step-1">1</div>
            <div class="step-2">2</div>
            <div class="step-3">3</div>
            <p><span>我的购物车</span><span>填写核对订单	</span><span>订单提交成功</span></p>
          </div>
        </div>
      </div>
      <div class="wrap">
        <div class="shopping-cart-container">
          <div class="cart-header">
            <div class="col-select">
              <input type="checkbox" id="allSelect"/>
              <label for="allSelect">全选</label>
            </div>
            <div class="col-goods">商品</div>
            <div class="col-unit-price">单价(元)</div>
            <div class="col-number"> 数量</div>
            <div class="col-subtotal">小计</div>
            <div class="col-opreation">操作</div>
          </div>
          <div class="cart-list">
            <ul>
              <li>
                <div class="col-select">
                  <input type="checkbox"/>
                </div>
                <div class="col-goods"><a href=""><img src="http://placehold.it/80x80"/></a>
                  <div class="goods-msg">八星八箭镶钻大菜刀 128g</div>
                </div>
                <div class="col-unit-price">9999</div>
                <div class="col-number"> 1</div>
                <div class="col-subtotal">9999</div>
                <div class="col-opreation"> <a href="">删除</a></div>
              </li>
            </ul>
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
    </div>
  </body>
</html>