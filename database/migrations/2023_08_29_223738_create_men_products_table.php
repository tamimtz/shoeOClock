<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('men_products', function (Blueprint $table) {
            $table->id();
            $table->integer('googleProductId');
            $table->string('category');
            $table->string('subCategory');
            $table->string('productName');
            $table->float('price');
            $table->string('color');
            $table->integer('sizeUk');
            $table->integer('sizeUs');
            $table->string('descriptionTitle');
            $table->string('description');
            $table->string('specification');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('men_products');
    }
};
