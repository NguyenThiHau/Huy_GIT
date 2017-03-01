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
            $table->string('name')->nullable();
            $table->float('price')->nullable();
            $table->string('thumbnail')->nullable();
            $table->integer('category_id');
            $table->integer('discount')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->string('author')->nullable();
            $table->dateTime('publishing_date')->nullable();
            $table->string('publishing_company')->nullable();
            $table->integer('number_of_pages')->nullable();
            $table->string('size')->nullable();
            $table->tinyInteger('is_deleted');
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
        Schema::dropIfExists('product');
    }
}
