@extends('common.layouts')
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('title')
注册
@stop

@section('style')
<style>
        body {
            margin: 50px 0;
            text-align: center;
        }
        .inp {
            border: 1px solid gray;
            padding: 0 10px;
            width: 200px;
            height: 30px;
            font-size: 18px;
        }
        .btn {
            border: 1px solid gray;
            width: 100px;
            height: 30px;
            font-size: 18px;
            cursor: pointer;
        }
        #embed-captcha {
            width: 300px;
            margin: 0 auto;
        }
        .show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
        /* 以下遮罩层为demo.用户可自行设计实现 */
        #mask {
            display: none;
            position: fixed;
            text-align: center;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            overflow: auto;
        }
    </style>
@stop

@section('maincontent')
  @include('common.registerAjax')
@stop

@section('script')
<!-- <script src="http://code.jquery.com/jquery-1.12.3.min.js"></script>
引入封装了failback的接口initGeetest
<script src="http://static.geetest.com/static/tools/gt.js"></script> -->

@stop

