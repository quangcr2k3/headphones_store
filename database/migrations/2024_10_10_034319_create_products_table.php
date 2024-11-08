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
            $table->string('name'); // Tên sản phẩm
            $table->text('description')->nullable(); // Mô tả (cho phép null)
            $table->decimal('price', 8, 0); // Giá sản phẩm (8 chữ số, 0 chữ số thập phân)
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade'); // Khóa phụ liên kết với bảng categories
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
