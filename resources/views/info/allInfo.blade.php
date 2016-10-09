@extends('info.infoCenter')
@section('menu')
       <div>
       <label>所有信息</label>
     <ul> 
   	  @foreach($customer->notifications as $info)
           <ul>
           <li>
            @foreach($info->data as $item=>$value)               
                 {{$item}}:{{$value}}       
             @endforeach     
                  --收到时间:{{$info->created_at}}
                  @if($info->read_at)  
                    --阅读时间:{{$info->read_at}}
                  @endif
             </li>
           </ul>
      @endforeach
   </ul>
   </div>   
@stop