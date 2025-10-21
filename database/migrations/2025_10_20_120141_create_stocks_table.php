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
        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('unit');
            // foreign key
            $table->unsignedbigInteger('warehouse_id');
            $table->foreign('warehouse_id')->references('id')->on('warehouse')->onDelete('cascade');

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->integer('current_stock')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock');
    }
};
