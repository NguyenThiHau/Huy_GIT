<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('images');
            $table->float('price_in');
            $table->float('price_out');
            $table->float('price_sale');
            $table->integer('color');
            $table->integer('hot');
            $table->integer('featured');
            $table->integer('popular');
            $table->text('description');
            $table->string('brand');
            $table->string('meta_title');
            $table->string('meta_keywords');
            $table->integer('view_count');
            $table->integer('category_id');
            $table->integer('product_id');
            $table->integer('status');
            $table->string('video');
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
