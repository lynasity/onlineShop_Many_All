<?php

 namespace App\Http\Controllers\Admin;

 use Illuminate\Http\Request;

 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\customer;
 use Illuminate\Support\Facades\Notification;
 use App\Notifications\salePromotion;
 class ManagerController extends Controller
 {
       public function sendNotification(){
       //发送给所有用户推送信息
       $customers=customer::all();
       //$customer->notify(new salePromotion());
       Notification::send($customers, new salePromotion());
   }
 }
