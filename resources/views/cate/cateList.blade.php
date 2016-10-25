 <table>
   	<tr>
   		<!-- <th>品类id</th> -->
        <th>品类名称</th>
        <th>操作</th>
   	</tr>
    @foreach($cates as $cate)
    <tr>
     <!-- <td>{{$cate->id}}</td> -->
     <td>{{$cate->cName}}</td>
     <td><a href="{{route('cates.edit',['cate'=>$cate->id])}}">修改</a>|<a href="{{route('cate.delete',['cate'=>$cate->id])}}">删除</a></td>
     </tr>
    @endforeach

   </table>
{{$cates->links()}}
