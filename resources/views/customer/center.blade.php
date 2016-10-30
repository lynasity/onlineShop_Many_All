@extends('common.home')



@section('mainContent')
<div class="page-user">

    <div class="wrap">

        <aside class="side-nav">
            <h3>我的交易</h3>
            <ul>
                <li>
                    <a href="##">
                        我的购物车
                    </a>
                </li>
                <li>
                    <a href="##">
                        我的消息
                    </a>
                </li>
                <li>
                    <a href="##">
                        高级功能
                    </a>
                </li>
                {{-- <li>
                    <a href="##">

                    </a>
                </li> --}}
                {{-- <li><a href="##"></a></li>
                <li><a href="##"></a></li>
                <li><a href="##"></a></li> --}}
            </ul>
        </aside>

        <main class="order">
            <div class="order-header">
                <ul>
                    <li>
                        <a href="#" class＝"selected">
                            所有订单
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            待付款
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            待评价
                        </a>
                    </li>
                </ul>
            </div>
            <div class="order-search">
                <input type="text" name="name" value="" placeholder="输入商品标题或订单号进行搜索">
                <button type="sumbit">订单搜索</button>
            </div>
            <div class="order-table">
                <div class="table-header">
                    <div class="item">
                        宝贝
                    </div>
                    <div class="single-price">
                        单价
                    </div>
                    <div class="number">
                        数量
                    </div>
                    <div class="payment">
                        实付款
                    </div>
                    <div class="opreation">
                        操作
                    </div>
                </div>
                <!--end table header-->

                <ul class="list">
                    <li>
                        <div class="list-header">
                            <div class="fl item order-id">
                                <span class="date">2016-10-29</span>
                                <span>订单号:<span>230023802380230</span></span>
                            </div>
                            <div class="fl store">M&A自营</div>
                            <div class="fr del">
                                <a href="javascript:void;" title="删除订单"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                        <div class="list-content">
                            <div class="item fix-text">
                                <img class="item-img" src="http://www.fillmurray.com/80/80" alt="" />
                                <div class="item-msg">
                                    Macbook Pro 2016新款2T带touch barafafafafafafa
                                </div>
                            </div>
                            <div class="single-price">
                                ￥909999
                            </div>
                            <div class="number">
                                10
                            </div>
                            <div class="payment">
                                ￥９.900000
                            </div>
                            <div class="opreation">
                                <a href="#" class="rate">评价</a>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-header">
                            <div class="fl item order-id">
                            <span class="date">2016-10-29</span>
                                <span>订单号:<span>230023802380230</span></span>
                            </div>
                            <div class="fl store">M&A自营</div>
                            <div class="fr del">
                                <a href="javascript:void;" title="删除订单"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </div>
                        <div class="list-content">
                            <div class="item fix-text">
                                <img class="item-img" src="http://www.fillmurray.com/80/80" alt="" />
                                <div class="item-msg">
                                    Macbook Pro 2016新款2T带touch barafafafafafafa
                                </div>
                            </div>
                            <div class="single-price">
                                ￥909999
                            </div>
                            <div class="number">
                                10
                            </div>
                            <div class="payment">
                                ￥９.900000
                            </div>
                            <div class="opreation">
                                <a href="#" class="rate">评价</a>
                            </div>
                        </div>
                    </li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <!--end order list-->
            </div>
            <!--end order table-->
    </div><!--end wrap-->

    </main>

</div>
<!--end page user-->

@endsection
{{-- <html>
   <head>
       <meta charset="UTF-8"/>
       <title>个人中心</title>

   </head>
    <body>
       <p><a href="{{route('infoCenter')}}">消息中心</a> </p>
       <p><a href="{{route('HighLevel')}}">高级功能</a> </p>
       <p><a href="{{url('customer/logout')}}">退出登录</a> </p>
    </body>


</html> --}}
