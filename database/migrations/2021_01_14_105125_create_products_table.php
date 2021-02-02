<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id() ->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('image',100)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->integer('user_id')->nullable();
            $table->integer('area')->nullable();
            $table->string('location',200)->nullable();
            $table->string('bathroom')->nullable();
            $table->string('balcony')->nullable();
            $table->string('garden')->nullable()->default('False');
            $table->string('garage')->nullable()->default('False');
            $table->text('detail')->nullable();
            $table->integer('floor')->nullable()->default('0');
            $table->integer('room')->nullable();
            $table->string('heating')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
