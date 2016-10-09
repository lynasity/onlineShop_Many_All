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
                 // 父品类id
             $table->integer('pid')->default(0)->change();
            // 当层级一样适合的排列优先顺序
             $table->integer('cateorder')->default(0)->change();
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
