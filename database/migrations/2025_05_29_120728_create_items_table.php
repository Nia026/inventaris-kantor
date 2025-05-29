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
        Schema::create('items', function (Blueprint $table) {
            $table->id('id_item');
            $table->string('item_name');
            $table->unsignedBigInteger('id_category');
            $table->integer('quantity');
            $table->enum('condition', ['baik', 'rusak']);
            $table->timestamps();

            $table->foreign('id_category')->references('id_category')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};