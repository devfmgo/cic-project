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
        Schema::create('products_detail', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('slug')->unique();
            $table->string('product_code')->unique();
            $table->longText('image')->nullable();
            $table->decimal('price', 10, 2);
            $table->longText('description')->nullable();
            $table->longText('indikasi')->nullable();
            $table->longText('komposisi')->nullable();
            $table->longText('dosis')->nullable();
            $table->longText('aturan_pakai')->nullable();
            $table->longText('perhatian')->nullable();
            $table->longText('kontra_indikasi')->nullable();
            $table->longText('efek_samping')->nullable();
            $table->string('kemasan')->nullable();
            $table->string('nomer_registrasi')->nullable();
            $table->string('manufaktur')->nullable();
            $table->string('url_website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_detail');
    }
};
