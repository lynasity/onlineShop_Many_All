@extends('common.home')
@section('title')
首页
@stop
@section('header')
 <div class="logo-search">
        <div class="wrap">
          <div class="logo"><a href="">Many&All</a></div>
         <div class="search">
            <input type="text"/>
            <input type="button" value="搜索"/>
          </div>
        </div>
      </div>         
@stop
@section('mainContent')
      <nav class="nav">
        <div class="wrap">
          <div class="nav-container">		
            <div class="dropdown-allgoods"> <a href="javascript:;">全部商品分类<span class="fa fa-angle-down icon-dropdown"></span></a></div>
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