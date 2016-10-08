<?php

namespace App\Policies;

use App\admin;
use App\cate;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
class catePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the cate.
     *
     * @param  App\User  $user
     * @param  App\cate  $cate
     * @return mixed
     */
    public function view(admin $user, cate $cate)
    {
        //
    }

    /**
     * Determine whether the user can create cates.
     *
     * @param  App\User  $user
     * @return mixed
     */
    public function create(admin $user)
    {
        return strcmp($user->level,'C')==0?true:false;
    }

    /**
     * Determine whether the user can update the cate.
     *
     * @param  App\User  $user
     * @param  App\cate  $cate
     * @return mixed
     */
    public function update(admin $user, cate $cate)
    {
         return strcmp($user->level,'B')<=0?true:false;
    }

    /**
     * Determine whether the user can delete the cate.
     *
     * @param  App\User  $user
     * @param  App\cate  $cate
     * @return mixed
     */
    public function delete(admin $user, cate $cate)
    {
        // 只有权限是A的管理员才能删除品类和增加品类
        return strcmp($user->level,'A')==0?true:false;
    }
    // public function before($user, $ability)
    // {
    //    return Auth::check()?true:false;
    // }
}
