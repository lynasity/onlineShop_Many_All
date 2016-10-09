<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('cates')){
          Schema::create('cates', function (Blueprint $table) {
            $table->increments('id');      
            $table->timestamps();
            $table->index('id');
          });
        }else{
            Schema::table('cates', function ($table){
               $table->integer('parent_id')->nullable()->index();
               $table->integer('lft')->nullable()->index();
               $table->integer('rgt')->nullable()->index();
               $table->integer('depth')->nullable();
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
        // Schema::dropIfExists('cates');
    }
}
