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
    // *******************PRODUCTS TABLE CREATION************
// php artisan make:migrate create_product_table

// জাজা লাগবে ঃ id , name , price, unit, user_id, category_id, created_at, updated_at
// akhane unsignedBigInteger 2ti user_id o category_id so akhane biye hobe 2meyer chele o 2ta users(id) o categoryes(id)
// tar mane akhane one to many relation hobe 2ta 2 chele one r 2maya hocche many

// $table->id();
// $table->string('name'20);
// $table->decimale('price',10,2);
// $table->string('unit',10);

// প্রথম মেয়ের বিয়ে(user_id)
// $table->unsignedBigInteger('user_id');
// $table->foreign('user_id')->refrences('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();

// দিতিও মেয়ের বিয়ে(category_id)
// $table->unsignedBigInteger('category_id');
// $table->foreign('category_id')->refrences('id')->on('categoryes')->cascadeOnUpdate()->cascadeOnDelete();

// $table->timestamp('created_at')->useCurrent();
// $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
// php artisan migrate

    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)->idex();
            $table->decimal('price', 10, 2)->index();
            $table->string('unit')->index();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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
