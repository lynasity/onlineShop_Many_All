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
              $table->integer('cate_id');
               $table->primary(['product_id', 'cate_id']);
          });
        }else{

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
