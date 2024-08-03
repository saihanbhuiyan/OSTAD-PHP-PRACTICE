<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // 2)akhane ekti point of sells database creat okrbe totha ekti dokaner product sell er 
    // jonno abong tar hisab kitab mantainkorar jonno
    // ***ekti dokaner jonno jodi database creat kori tahole age tar sell prosedure ta
    //  jante hobe sekhane konti age asbe abong konti pore ta thik vabe bosate hobe tanahole
    // pech lagbe

    // JEMON***** : Ekti dokaner pprothom dhap hocche user totha dokandar registration korbe
    //  --->trpr se product sell korbe but product er kotha chinta korle ase kon category er
    // --> produt sell korbe then then ki product sell korbe kar kase korbe sell lint/invoice
    //  product_list/invoice
    // 1*buisness_registration table
    // 2*product_category table
    // 2*products table
    // 2*customer table  =kar kase bikti kobe customer er kase
    // 2*invoices table =jaha bikri korbe tahai invoice 
    // 2*invoice_products table  =jaja bikri korbe tar list

    // **********USERS TABLE CREATION**********
    // **akhn fact hocche amr users table a user er ki ki information rakhbo seta ami 
    // decite korbo
    // LIKE:(id, first_name, last_name, email, password, mobile, otp, created_at, updated_at)
    // lete's creat users table and set all fields in it
    // ****php artisan make:migration create_users_table 
    // ***akhn up methode field gulu bosabo with space(varchar,integer,decimal,boolean,timestamp)ect
    // $table->int(); 
    // $table->string('first_name',20);
    // $table->string('last_name',20);
    // $table->string('email',40)->unique();
    // $table->string('password',40);
    // $table->integer('mobile',15);
    // $table->integer('otp',10);
    // $table->timestamp('created_at')->useCurrent();
    // $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
// now run it : php artisan migrate
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',20)->index();
            $table->string('last_name',20)->index();
            $table->string('email',40)->unique()->index();
            $table->string('password',40);
            $table->string('mobile',15)->index();
            $table->string('otp',10);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
