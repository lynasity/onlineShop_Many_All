<div class="edit">
	<form id="editProduct" class="form-horizontal">
		{{csrf_field()}}

		<div class="form-group">
		  <label class="col-md-2 control-label" for="">商品名称</label>
		    <div class="col-md-10">
		      <input type="text" name="proName" required autofocus>
		    </div>
	  	</div>

		<div class="form-group">
		    <label class="col-md-2 control-label" for="">商品序列号</label>
			  <div class="col-md-10">
			    <input type="text" name="proSn" required>
			  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-2 control-label" for="">商品数量</label>
		    <div class="col-md-10">
		      <input type="text" name="proNum" required>
		    </div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label" for="">市场价</label>
			  <div class="col-md-10">
			    <input type="text" name="marketPrice" required>
			  </div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label" for="">独家价格</label>
			  <div class="col-md-10">
			    <input type="text" name="webPrice" required>
			  </div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label" for="">商品描述</label>
			<div class="col-md-10">
				<textarea name="proDescription" placeholder="添加商品描述"></textarea>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label" for="">商品图片</label>
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-2">
						<input type="text" name="proImg" value="">
						{{-- <img src="http://placehold.it/100x100/240923" alt="" /> --}}
					</div>
					<div class="col-md-10">
						{{-- <input type="file" name="proImg"> --}}
					</div>
				</div>
			 </div>
		</div>

		<div class="form-group">
		  <label class="col-md-2 control-label" for="">商品品类</label>
		  <div class="col-md-10">
			  <select name='cateId' >
				  @foreach($cates as $cate)
					  <option value="{{$cate->id}}" >{{$cate->cName}}</option>
				  @endforeach
			  </select>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-2 control-label" for="">是否上架:</label>
		  <div class="col-md-10">
			  <select name='isShow'>
				  <option value="1" selected>是</option>
				  <option value="0">否</option>
			  </select>
		  </div>
		</div>

		<div class="form-group">
			<label class="col-md-2 control-label" for="">是否热款</label>
			<div class="col-md-10">
				<select name="isHot">
					<option value="0" selected>否</option>
					<option value="1">是</option>
				</select>
			</div>
		</div>

		<div class="edit-submit">
			  <input type="submit" class="btn btn-success btn-lg btn"  value ="添加">
		</div>

	</form>
	<div class="alert alert-position alert-success col-md-2" id="alertSuccess" role="alert">商品信息录入成功</div>
	<div class="alert alert-danger col-md-2 alert-position" id="alertDanger" role="alert">商品信息录入失败</div>
</div>
