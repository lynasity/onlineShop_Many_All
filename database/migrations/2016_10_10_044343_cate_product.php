<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('cate_product')){
         Schema::create('cate_product', function (Blueprint $table) {
              $table->integer('product_id');
              $table->integer('category_id');
               $table->primary(['product_id', 'category_id']);
          });
        }else{
            Schema::table('cate_product',function($table){
                 $table->integer('cate_id')->change; 
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('cate_product');
    }
}
