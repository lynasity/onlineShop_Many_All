<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('admins')){
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20)->unique();
            $table->string('password',255);
            $table->rememberToken();
            $table->string('email',50)->unique();
            $table->enum('level',['A','B','C'])->default('C');
            $table->timestamps();
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
        // Schema::drop('admins');
    }
}
