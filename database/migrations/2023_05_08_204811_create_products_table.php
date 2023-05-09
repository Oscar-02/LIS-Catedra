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
            $table->string('SKU', 8)->primary()->autoIncrement(false);
            $table->string("productName", 50);
            $table->string('description', 150)->nullable(true);
            $table->float("price");
            $table->string("imageCode", 16)->nullable(false);
            $table->foreignId('categoryID')->constrained('categories', 'id');
            $table->foreignId('offerID')->constrained('offers', 'id');
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
