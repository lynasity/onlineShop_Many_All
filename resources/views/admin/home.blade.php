<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('./customer/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('./customer/css/bootstrap.min.css')}}" media="screen" title="no title">
    <link rel="stylesheet" href="{{asset('./admin/css/admin.css')}}">
    <title>Admin</title>
</head>
<body>
    <div class="container-fluid full-height">

        <div class="row">
            <div class="col-left">
                <div class="user">
                    <div class="face">
                        <img src="http://www.fillmurray.com/100/100" />
                    </div>
                    <div class="name">
                        Many Hong
                    </div>
                </div>
            </div>

            <div class="col-right">
                <div class="title-bar">
                    <span>
                        <span class="logo">Many&All</span>后台管理系统
                    </span>
                    <span class="divider"></span>
                    <span class="item-name" id="itemName">itemName</span>
                    <a class="sign-out" href="{{url('admin/logout')}}">
                        <i class="fa fa-sign-out"></i>
                        登出
                    </a>
                </div>
            </div>

        </div>

        <div class="row fix-height">

            <div class="col-left nav-wrap">
                    <ul id="nav" class="nav-v">
                        <li>
                            <a href="#/dashboard">
                                <i class="fa fa-tachometer"></i>
                                仪表盘
                            </a>
                        </li>
                        <li>
                            <a href="#/edit">
                                <i class="fa fa-pencil"></i>
                                商品录入
                            </a>
                        </li>
                        <li>
                            <a href="#/product">
                                <i class="fa fa-server"></i>
                                商品管理
                            </a>
                        </li>
                        <li>
                            <a href="#/cate">
                                <i class="fa fa-hashtag"></i>
                                品类管理
                            </a>
                        </li>
                        <li>
                            <a href="#/message">
                                <i class="fa fa-bell"></i>
                                消息推送
                            </a>
                        </li>
                        <li>
                            <a href="#/orders">
                                <i class="fa fa-bar-chart"></i>
                                订单管理
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="col-right full-height">
                <div class="view" id="view">
                    <form action=""></form>
                </div>
            </div>

        </div>
        <!--end container-->
    </div>
    <script src="{{asset('./admin/js/fetch.js')}}"></script>
    <script src="{{asset('./admin/js/director.js')}}"></script>
    <script src="{{asset('./admin/js/route.js')}}"></script>
    <script src="{{asset('./admin/js/admin.js')}}"></script>
</body>
</html>
