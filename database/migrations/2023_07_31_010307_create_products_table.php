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
            $table->bigInteger('cat_id');
            $table->String('prod_name');
            $table->mediumText('prod_small_description');
            $table->longText('prod_long_description');
            $table->String('original_price');
            $table->String('selling_price');
            $table->String('prod_image');
            $table->String('prod_qty');
            $table->String('prod_tax');
            $table->tinyInteger('prod_status');
            $table->tinyInteger('prod_trending');
            $table->String('prod_meta_title');
            $table->String('prod_meta_keywords');
            $table->String('prod_meta_description');
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
