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



    <section class="floor-wrap">
        <div class="wrap">

            <div class="floor">
                <div class="header">

                    <div class="cate-name">
                        <i class="fa fa-barcode"></i>服装鞋包
                    </div>

                    <div class="tab">
                        <ul>
                            <li class="tab-active">男装</li>
                            <li>女装</li>
                            <li>谢靴</li>
                            <li>箱包</li>
                            <li>内衣配饰</li>
                        </ul>
                    </div>
                    <!--end tab cate-->
                </div>
                <!--end floor head-->

                <div class="main">

                    <div class="left-cate">
                        <img src="http://www.fillmurray.com/300/630" class="bg" alt="" />
                        <div class="link-to-cate">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        男装
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        女装
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        男装
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        谢靴
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        箱包
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-book"></i>
                                        内衣配饰
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end left cate-->

                    <div class="showcase">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="//img13.360buyimg.com/N3/jfs/t3556/303/453929247/161837/e43eb7ab/580d7252Nf2009d8e.jpg" alt="" />
                                </a>
                                <a href="#">
                                    班尼路休闲立领棉衣男 简约外套棉服短款修身
                                </a>
                                <div class="price">
                                    <span>￥</span>199.00
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end right showcase-->
                </div>
                <!--end floor main-->

            </div>

        </div>
        <!--end wrap-->
    </section>

@stop
