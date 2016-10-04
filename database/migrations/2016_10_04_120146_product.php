<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('products')){
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proName',50);
            $table->string('proSn',50);
            $table->smallInteger('proNum')->unsigned()->default(0);
            $table->decimal('marketPrice',10,2);
            $table->decimal('webPrice',10,2);
            $table->text('proDescription')->default(NULL);
            $table->string('proImg',255);
            $table->integer('cateId')->unsigned();
            $table->smallInteger('isShow')->unsigned();
            $table->smallInteger('isHot')->unsigned();          
            $table->timestamps();  
            //！！！要建立外键索引的字段必须有索引！！ 
            $table->index('cateId');    
         });          
      }else{
             Schema::table('products', function ($table) {       
                $table->foreign('cateId')->references('id')->on('cates');
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
        // Schema::dropIfExists('products');
    }
}
