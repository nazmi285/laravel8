<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('merchant_id')->nullable()->unsigned();
            $table->integer('product_id')->nullable()->unsigned();
            $table->string('order_no',20)->nullable()->unique();
            $table->string('buyer_name')->nullable();
            $table->string('buyer_phone')->nullable();
            $table->string('buyer_email')->nullable();
            $table->double('total_amount')->nullable();
            $table->double('gateway_fee')->nullable();
            $table->double('services_fee')->nullable();
            $table->double('actual_amount')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('status',20)->nullable();
            $table->string('courier')->nullable();
            $table->string('tracking_no')->nullable();
            $table->datetime('shipped_at')->nullable();
            $table->datetime('disbursed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
