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
        Schema::table('products', function (Blueprint $table) {
            $table->string('sizeUk')->change(); // Change sizeUk to a string (VARCHAR).
            $table->string('sizeEu')->change(); // Change sizeEu to a string (VARCHAR).
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('sizeUk', 8, 2)->change(); // Revert sizeUk to a float.
            $table->integer('sizeEu')->change(); // Revert sizeEu to an integer.
        });
    }
};
