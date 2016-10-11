@extends('info.infoCenter')
@section('menu')
   <div>
   <label>未读信息</label>
   <ul> 
    @foreach($customer->unreadNotifications as $info)
           <ul>
           <li>
            @foreach($info->data as $item=>$value)               
                 {{$item}}:{{$value}}       
               
                  --收到时间:{{$info->created_at}}
                  @if($info->read_at)  
                    --阅读时间:{{$info->read_at}}
                  @endif
             @endforeach   
             </li>
             @if($info->update(['read_at' => Carbon\Carbon::now()]))
             @endif
           </ul>
          @endforeach                 
      {{--一次性标记，也可以在循环种标记--}}
      {{ $customer->unreadNotifications->markAsRead()}}
   </ul>
   </div>  
@stop