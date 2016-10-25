<div class="cate">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-primary" >

                  <div class="panel-heading">
                      <i class="fa fa-bars"></i>已有品类
                  </div>

                  <div class="panel-body" id="cateList">
                      <table>
                      	<tr>
                      		<!-- <th>品类id</th> -->
                           <th>品类名称</th>
                           <th>操作</th>
                      	</tr>
                       @foreach($cates as $cate)
                       <tr>
                        <!-- <td>{{$cate->id}}</td> -->
                        <td><input type="text" name="name" class="changable" value="{{$cate->cName}}"></td>
                        <td><a href="{{route('cates.edit',['cate'=>$cate->id])}}">修改</a>|<a href="{{route('cate.delete',['cate'=>$cate->id])}}">删除</a></td>
                        </tr>
                       @endforeach
                      </table>
                        {{$cates->links()}}
                  </div>
            </div>

        </div>

    </div>
    <!--end row-1-->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-primary">

              <div class="panel-heading">
                  <i class="fa fa-bars"></i>添加品类
              </div>

              <div class="panel-body">
                  <form  id="addCate">
                          {{ csrf_field()  }}
                     <!-- 这里需要判断是否是子品类 -->
                     <label>是否全新品类</label>
                     <select name="isNew">
                      <option value=1>是</option>
                      <option value=0>否</option>
                     </select>
                     <br>
                     <label>如果不是，请选择父品类</label>
                      <select name="parentCate">
                         @foreach($cates as $cate)
                          <option value="{{$cate->id}}">{{$cate->cName}}</option>
                         @endforeach
                     </select>
                     <br>
                        <input type="text" name="cName">
                        <input type="submit" value="添加">
                  </form>

              </div>

            </div>

        </div>

    </div>
</div>
