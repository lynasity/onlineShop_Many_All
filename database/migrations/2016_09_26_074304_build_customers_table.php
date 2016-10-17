<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('customers')){
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20)->unique();
            $table->string('password',255);
              // 添加remember me要用到的字段
            $table->rememberToken();
             $table->string('email',50)->unique();
            $table->enum('gender',['male','female','secret'])->default('secret');
            $table->string('face',255)->nullable();
            $table->enum('level',['A','B','C','D','E'])->default('E');
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
        // Schema::drop('customers');
    }
}
