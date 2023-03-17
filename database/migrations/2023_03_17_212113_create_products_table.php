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
            $table->string('name');		//名前
            $table->string('copy');		//コピー
            $table->text('detail');		//詳細
            $table->text('spec');		//スペック
        
            $table->unsignedBigInteger('category_id');	//商品カテゴリーID
            $table->foreign('category_id')->references('id')->on('product_categories');
        
            $table->unsignedBigInteger('class_id');		//レンタルクラスID
            $table->foreign('class_id')->references('id')->on('rental_classes');
            
            $table->integer('order');	//表示順
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
