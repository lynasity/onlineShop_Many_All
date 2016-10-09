<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('orderForms')){
        Schema::create('orderForms', function (Blueprint $table) {
            $table->increments('id');
            //付款状态，处理状态，异常状态
            $table->enum('payStatus',['未付款','已付款','交易关闭','待退款']);
            $table->enum('dealStatus',['已审核','已经财务审核','已作废']);
            $table->enum('exception',['订单缺货','快递不到订单','暂不发货订单','价格异常订单','黑名单订单'])->nullable()->default(NULL);
            // 默认非货到付款
            $table->smallInteger('isCOD')->default(0);
            // 默认不挂起订单，当订单有特殊状况时挂起
            $table->smallInteger('isHang-up')->default(0);
             //是否锁定状态，当已经有人来处理该订单的时候别人就不可以处理了 
            $table->smallInteger('isLocked')->default(0); 
            // 是否已经发货
            $table->smallInteger('hasDeliver')->default(0);
            //是否已经打印
            $table->smallInteger('hasPrint')->default(0);
              // 客户id
            $table->integer('customerId')->unsigned();
            // 快递商id
            $table->integer('expressId')->unsigned();
            // 订单生成时间
            $table->timestamps();
            $table->index('expressId');
            $table->index('customerId');
          });
        }else{
             // Schema::table('orderForms', function ($table) {       
             //    $table->foreign('expressId')->references('id')->on('expresses');
             //    $table->foreign('customerId')->references('id')->on('customers');
             // });  
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('orderForms');
    }
}
