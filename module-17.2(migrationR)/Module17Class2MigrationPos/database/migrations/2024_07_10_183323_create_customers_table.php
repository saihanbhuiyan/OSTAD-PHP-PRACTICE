<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    //টেবিল রিলেসনআল পদ্দতি
    // মেয়ে + ছেলে + কোথাকার ছেলে = বিয়ে
    // কন্ডিশন আপডেট হলে একসাথে হতেহবে(বিদেশ গেলে একসাথে জেতে হবে) + মরলে একসাথে মরতে হবে(ডিলিট
    // হলে একসাথে হতে হবে 
    // ******************CUSTOMER TABLE CREATION************
// php artisan make:migrate creat_customers_table
// CUSTOMER table er o relatoin toiri hobe users table er sathe karon ekti user er dokandarer onekgulu customer thaktepare (ONE TO MANY RELATION) so akhane biye dite hobe with condition 
// *******************EXAMPLE OF RELATION & CONDITION:************
// MEYE(foreign(user_id)) + CHELE(on(id)) + KOTHATHEKE(ADDRESS)(refrence('users')) =BIYE 
// BIDESHGELEeksatheJETEHOBE(cascadeOnUpdate()) + MORLE MEYEKE AGE MORTEHOBE TRPR CHELE MORBE(restrictOnDelete())

// JA JA LAGBE : (id,name,email, mobile,user_id,created_at,updated_at)
// $table->id();
// $table->string('name',20);
// $table->string('email',40)->unique();
// $table->integer('mobile',15);
// $table->unsignedBigInteger('user_id');
// $table->foreign('user_id')->refrences('id')->in('users')->cascadeOnUpdate()->restrictOnDelete();
// $table->timestamp('created_at')->useCurrent();
// table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
// php artisan migrate
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',20)->index();
            $table->string('lastName',20)->index();
            $table->string('email',40)->unique()->index();
            $table->string('mobile',15)->index();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
