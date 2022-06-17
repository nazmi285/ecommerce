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
            $table->string('order_no',20)->nullable()->unique();
            $table->double('amount')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('total_amount')->nullable();
            $table->string('status',20)->nullable();
            $table->timestamps();
            $table->softDeletes();
            // foreign keys
            $table->foreign('merchant_id')->references('id')->on('merchants');
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
