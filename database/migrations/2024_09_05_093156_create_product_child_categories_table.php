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
        Schema::create('product_child_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subCategory_id');
            $table->string('title');
            $table->text('main_img');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->integer('status')->default(1)->comment('1=active, 0=inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_child_categories');
    }
};
