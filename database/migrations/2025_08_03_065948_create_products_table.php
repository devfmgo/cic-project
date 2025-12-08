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
            $table->id('id');
            $table->foreignId('product_category_id')->constrained('product_categories');
            $table->foreignId('obat_category_id')->constrained('obat_categories');
            $table->foreignId('uom_id')->constrained('uoms');
            $table->string('product_name');
            $table->string('slug')->unique();
            $table->string('product_code')->unique();
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
