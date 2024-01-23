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
            $table->uuid()->primary();
            $table->string('name');
            $table->string('vendor', 50);
            $table->string('size', 25);
            $table->decimal('average_weight');
            $table->string('insert', 50);
            $table->string('sample', 10);
            $table->string('picture_path');
            $table->foreignUlid('catalog_uuid')->constrained('catalogs', 'uuid');
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
