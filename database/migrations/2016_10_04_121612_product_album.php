<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductAlbum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('proAlbums')){
         Schema::create('proAlbums', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('proId')->unsigned();
           $table->string('album',50);
           $table->timestamps();
           $table->index('proId');

         });
       }else{
         $table->foreign('proId')->references('id')->on('products');
       }
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('proAlbums');
    }
}
