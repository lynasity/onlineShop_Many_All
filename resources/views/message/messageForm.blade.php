<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            <i class="fa fa-mail-forward"></i>消息
          </div>
          <div class="panel-body">

              <form method="post" action="{{route('sendNotification')}}">
                  {{ csrf_field()}}
                  <textarea rows="3" cols="20" name="content" placeholder="请输入推送消息"></textarea>
                  <br>
                  <label>请选择要发送的对象:</label>
                  <br>
                  @foreach($customers as $customer)
                      <input type="checkbox" name="selected[]" value={{$customer->id}}>
                      <label>{{$customer->username}}</label>
                      <br>
                  @endforeach
                  <input type="submit" value='推送'>
              </form>

          </div>
        </div>

    </div>
</div>
