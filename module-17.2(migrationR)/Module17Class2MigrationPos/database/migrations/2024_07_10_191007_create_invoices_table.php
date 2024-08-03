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
    // ***********************INVOICES TABLE CREATION******************
// php artisan make:migrate create_invoices_table
// জাজা লাগবে ঃ id , total, discount, vat, payable, user_id, customer_id, created_at, updated_at

// invoice kineche customer so customer er sathe relation lagbe(CUSTOMER_ID) abong kar theke kineche
//  users er theke so user er satheo somporko thakbe(USER_ID) koto takar kineche ta lagbe total koto
//  discount hobe DISCOUNT koto tk vat katbe VAT sobmiliye koto ditehobe PAYABLE

// akhaneo meye 2ta user_id o customer_id so relatoin ba biye o 2ta

// $table->id();
// $table->decimale('total',10,2);
// $table->decimale('discount',10,2);
// $table->decimale('vat',10,2);
// $table->decimale('payable',10,2);
// %table->unsignesBitInteger('user_id');
// $table->unsignesBitInteger('customer_id');

// প্রথম মেয়ের বিয়ে ঃ(user_id)
// $table->foreign('user_id')->refrences('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();

//  দিতিঅ মেয়ের বিয়ে ঃ
// $table->foreign('customer_id')->refrences('id')->on('customers')->cascadeOnUpdate()->restrictOnDelete();
// $table->timestamp('created_at')->useCurrent();
// $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
// php artisan migrate
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->decimal('total',10,2);
            $table->decimal('discount',10,2);
            $table->decimal('vat',10,2);
            $table->decimal('payable',10,2);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
