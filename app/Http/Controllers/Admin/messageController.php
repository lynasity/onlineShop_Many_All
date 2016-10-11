<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\customer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 use Illuminate\Support\Facades\Notification;
  use App\Notifications\salePromotion;
class messageController extends Controller
{
     public function  messageForm(){
     	$customers=customer::all();
          return view('message.messageForm',[
          	'customers'=>$customers
          	]);
     }
     public function sendNotification(request $request){
 
       $data=$request->input('content');
       $Ids=$request->input('selected');
       // 得到一个目标用户colleciton
       $customers=customer::find($Ids);      
       //$customer->notify(new salePromotion());
       Notification::send($customers, new salePromotion($data));
       return redirect()->route('adminHome');
   }
}
