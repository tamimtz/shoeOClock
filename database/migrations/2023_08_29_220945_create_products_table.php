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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('googleProductId');
            $table->string('gender');
            $table->string('category');
            $table->string('subCategory');
            $table->string('productName');
            $table->float('price');
            $table->string('color');
            $table->float('sizeUk');
            $table->integer('sizeEu');
            $table->string('descriptionTitle');
            $table->text('description');
            $table->text('specification');
            $table->string('thumbnail');
            $table->string('allImages');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
