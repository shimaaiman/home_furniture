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
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->integer('code')->unique()->nullable();
            $table->string('description');
            $table->integer('Measurments')->nullable();
            $table->string('Wire')->nullable();
            $table->string('Comdition')->nullable();
            $table->integer('SKU number')->nullable();
            $table->string('Shipping')->nullable();
            $table->integer('Warranty')->nullable();
            $table->string('Material')->nullable();
            $table->string('feature_image')->default('products/feature_images/img.jpg');
            $table->string('large_image')->default('products/large_image/img.jpg');
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
