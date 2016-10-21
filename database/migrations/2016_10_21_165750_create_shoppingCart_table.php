<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingCart',function(Blueprint $table){
               $table->increments('id');
                // 选择的产品
                $table->integer('pro_Id')->unsigned();
                // 所属的客户
                $table->integer('customer_Id')->unsigned();
                // 数量
                $table->integer('itemNum')->unsigned();
                 $table->integer('itemPrice')->unsigned();
                  $table->index('pro_Id');
                  $table->index('customer_Id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppingCart');
    }
}
