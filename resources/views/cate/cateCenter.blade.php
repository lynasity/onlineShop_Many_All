<div class="cate">
    <div class="row">

        <div class="col-md-6">

            <div class="panel panel-primary">

                  <div class="panel-heading">
                      <a href="{{url('cates')}}">已有品类</a>
                  </div>

                  <div class="panel-body">
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

                  </div>
            </div>

        </div>

        <div class="col-md-6">

            <div class="panel panel-primary">

              <div class="panel-heading">
                  <a href="{{url('cates/create')}}">添加品类</a>
              </div>

              <div class="panel-body">
                  <form method="post" action="{{route('cates.update',['cate'=>$cate->id])}}">
                     {{csrf_field()}}
                     {{ method_field('PUT') }}
                  	<!-- <input type="text" name="id" value="{{$cate->id}}"> -->
                  	<input type="text" name="cName" value="{{$cate->cName}}">
                    <input type="submit" name="修改">
                  </form>
              </div>

            </div>

        </div>
    </div>
</div>
