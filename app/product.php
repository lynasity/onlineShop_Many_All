<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	// 管理员要修改产品信息所需要的最低权限,后期可根据不同的修改
    public $updatePermission='B';
}
