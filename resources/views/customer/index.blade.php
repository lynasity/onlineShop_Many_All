@extends('common.home')
@section('title')
首页
@stop
@inject('cateModel', 'App\cate')
@section('header')
 <div class="logo-search">
        <div class="wrap">
          <div class="logo"><a href="">Many&All</a></div>
         <div class="search">
            <form action="{{route('customer.search')}}" method="post">
               {{csrf_field()}}
              <input type="text" name='content'/>
              <button type="submit">搜索</button>
            </form>
          </div>
        </div>
      </div>
@stop
@section('mainContent')
    <nav class="nav">
      <div class="bg-bar"></div>
      <div class="wrap">
        <div class="nav-container">
          <div class="allgoods"><a href="" class="dt">全部商品分类</a>
            <div class="dd">
              @foreach($cateModel::where('parent_id',1)->get() as $cate)
              <div data-index="{{$loop->iteration}}" class="item"><a href="{{url('products/content',['content'=>$cate->cName])}}">{{$cate->cName}}<i class="fa fa-angle-right"></i></a></div>
              @endforeach
            </div>
          </div>
          <div class="sub-items">
          @foreach($cateModel::where('parent_id',1)->get() as $cate)
                <div class="sub hidden">
                @foreach($cate->descendants()->limitDepth(1)->get() as $sub1)
                 <dl class="sub-catagory">
                     <dt><a href="{{url('products/content',['content'=>$sub1->cName])}}">{{$sub1->cName}}</a><i class="fa fa-angle-right"></i></dt>
                     <dd>
                       @if($sub1->children()->get())
                         @foreach($sub1->descendants()->limitDepth(1)->get() as $sub2)
                            <a href="{{url('products/content',['content'=>$sub2->cName])}}">{{$sub2->cName}}</a>
                         @endforeach
                       @endif
                     </dd>
                </dl>
              @endforeach
              </div>
          @endforeach
          </div>
          <div id="indexBigSlider" class="slider">
            <div class="view">
              <ul>
                <li><a href=""><img src="http://www.fillmurray.com/800/400" alt=""/></a></li>
                <li><a href=""><img src="http://www.fillmurray.com/800/500" alt=""/></a></li>
                <li><a href=""><img src="http://www.fillmurray.com/800/600" alt=""/></a></li>
                <li><a href=""><img src="http://www.fillmurray.com/800/550" alt=""/></a></li>
                <li><a href=""><img src="http://www.fillmurray.com/800/650" alt=""/></a></li>
              </ul>
            </div>
            <div class="dir-control">
              <div class="left"><i class="fa fa-angle-left"></i></div>
              <div class="right"><i class="fa fa-angle-right"></i></div>
            </div>
            <div class="btn-control"></div>
        </div><!--end index slider-->
          <ul class="navitems">
            <li><a href="">数码城</a></li>
            <li><a href="">天黑黑</a></li>
            <li><a href="">团购</a></li>
            <li><a href="">发现</a></li>
            <li><a href="">二手特卖</a></li>
            <li><a href="">名品会</a></li>
          </ul>
        </div>
      </div>
    </nav>
@stop
