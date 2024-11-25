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
        Schema::table('tbl_product', function (Blueprint $table) {
            $table->double('product_price')->change();
            $table->double('product_price_old')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_product', function (Blueprint $table) {
            $table->double('product_price')->change();
            $table->double('product_price_old')->change();
        });
    }
};
