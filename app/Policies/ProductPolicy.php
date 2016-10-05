<?php

namespace App\Policies;

use App\admin;
use App\product;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
// 可以是权限管理，也可以是操作控制
// 这里的例子是对资源管理的认证
class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product.
     *
     * @param  App\admin $user
     * @param  App\product  $product
     * @return mixed
     */
    public function view(admin $user, product $product)
    {
        //
    }

    /**
     * Determine whether the user can create products.
     *
     * @param  App\admin  $user
     * @return mixed
     */
    // 通常我们只需要验证该用户是否是已经登录了的，如同发表博客(create)的时候账号必须是登录状态一样
    public function create(admin $user)
    {
        //这样假设只要是认证了的管理员就可以添加信息
        if(Auth::check()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Determine whether the user can update the product.
     *
     * @param  App\admin  $user
     * @param  App\product  $product
     * @return mixed
     */
    public function update(admin $user, product $product)
    {
            if(strcmp($user->level, $product->updatePermission) >= 0){
                return true;
            }else{
                return false;
            }
    }

    /**
     * Determine whether the user can delete the product.
     *
     * @param  App\admin  $user
     * @param  App\product  $product
     * @return mixed
     */
    public function delete(admin $user, product $product)
    {
        //
    }
     // before会在所有方法执行前执行,经常用于管理员操作前的认证
    public function before($user, $ability)
    {
        // 伪代码
         if ($user->isSuperAdmin()) {
                return true;
         }
    }
}