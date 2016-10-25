window.onload = function(){
    var view = document.getElementById('view');
    // var baseURL = 'http://www.test.manyhong.cn/';
    var baseURL = 'http://www.test.manyhong.cn/';
    var admin = "admin"
    var loading = document.getElementById('loading')

    var product = function(){
        showName('商品管理')
        getView(baseURL + 'admin/productManagerCenter');
    };
    // var profile = function(){
    //     getView(baseURL + 'admin/messageManagerCenter');
    // }
    var orders = function(){
        showName('订单管理')
        getView(baseURL + 'admin/orderFormManagerCenter');
    }
    var dashboard = function(){
        // var formdata = new FormData();
        showName('仪表盘')
    }

    var cate = function(){
        getView(baseURL + 'admin/cateManagerCenter')
        showName('品类管理')
    }

    // var updateProduct = function(){
    //     getView(baseURL + 'admin/messageManagerCenter');
    //     showName('产品更新');
    // }
    var message = function(){
        getView(baseURL + 'admin/messageForm');
        showName('信息推送');
    }

    function getView(url){
        return fetch(url).then(function(response){
            view.innerHTML = loading.innerHTML;
            return response.text();
        }).then(function(err,body){
            if(err) return view.innerHTML = err;;
            view.innerHTML = body;
        })
    }

    var edit = function(){
        getView('http://www.test.manyhong.cn/products/create');
        showName('商品录入')
    }

    function showName(item){
        var itemName = document.getElementById('itemName');
        itemName.innerHTML = item;
    }


    var routes = {
        '/message': message,
        '/edit': edit,
        '/cate': cate,
        '/product': product,
        // '/profile': profile,
        '/orders': orders,
        '/dashboard': dashboard,
        // '/': dashboard
    }

    var router = Router(routes);
    router.init();
}
// {{--
// <a href="{{route('messageCenter')}}">消息推送中心</a>
// <br>
// <a href="{{route('productsCenter')}}">商品管理中心</a>
// <br>
// <a href="{{route('cateCenter')}}">品类管理中心</a>
// <br>
// <!-- 查看用户提交的订单，审核，确认(并发送通知)，订单打印-->
// <a href="{{route('orderFormCenter')}}">订单管理中心</a>
// <br>
// <a href="">退出登录</a> --}}
