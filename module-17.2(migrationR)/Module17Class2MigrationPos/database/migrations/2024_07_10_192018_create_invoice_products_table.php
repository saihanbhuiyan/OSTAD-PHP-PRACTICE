<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
       //টেবিল রিলেসনআল পদ্দতি
    // মেয়ে + ছেলে + কোথাকার ছেলে = বিয়ে
    // কন্ডিশন আপডেট হলে একসাথে হতেহবে(বিদেশ গেলে একসাথে জেতে হবে) + মরলে একসাথে মরতে হবে(ডিলিট
    // হলে একসাথে হতে হবে 
    // **********************INVOICE_PRODUCTS TABLE CREATION****************
// php artisan make:migrate create_invoice_PRODUCTS_table

// জাজা লাগবে ঃ id , quantity, sale_price , invoice_id, product_id, user_id, created_at, updated_at

// akhaneo somporko ba relation creat hobe 3ti bailer sathe user_id o product_id o invoice_id

// $table->id();
// $table->integer('quantity');
// $table->decimale('sale_price',10,2);
// $table->unsignedBigInteger('invoice_id');
// $table->unsignedBigInteger('product_id');
// $table->unsignedBigInteger('user_id');
// $table->foreign('invoice_id')->refrences('id')->on('invoices')->cascadeOnUpdate()->restrictOnDelete();
// $table->foreign('product_id')->refrences('id')->on('products')->cascadeOnUpdate()->restrictOnDelete();
// $table->foreign('user_id')->refrences('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
// $table->timestamp('created_at')->useCurrent();
// $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
// php artisan migrate
    public function up(): void
    {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->decimal('quantity')->index();
            $table->decimal('sale_price',10,2)->index();
            $table->unsignedBigInteger('invoice_id');
            $table->foreign('invoice_id')->references('id')->on('invoices')->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};
