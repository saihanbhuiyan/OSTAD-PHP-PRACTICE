<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Module17Class2Controller extends Controller
{
    function index(){
        return 1;
    }
    
    // টেবিল রিলেসনআল পদ্দতি
    // মেয়ে + ছেলে + কোথাকার ছেলে = বিয়ে
    // কন্ডিশন আপডেট হলে একসাথে হতেহবে(বিদেশ গেলে একসাথে জেতে হবে) + মরলে একসাথে মরতে হবে(ডিলিট
    // হলে একসাথে হতে হবে 

    //*****************Migration in laravel***********Important****
    // *************POS POIN OF SELL DATABSE MIGRATION IN LARAVEL***********

    //1)importand of database & migration in laravel, manually crata laravel er rules
    //  mantain hoina eta laravel er features gulu paina thik moto kaj korena ect ect
    //  so laravel er rules mantainkore database creat kortehobe migration use kore kortehobe

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
    
    // ***********CAREGORIES TABLE CREATION***********
    // categories tabler maddome amra users tabil er somporko sthapon korbo(********ONE TO MANY totha
    // ekti user onekguli category toiri korte parbe ba biye korte parbe 2ti sorto sapekkhe 
    // 1)update hole chele meye uvoi update hobe(cascadeOnUpdate) abong 2)jotokkhnna user er ekti category
    //  o thakbe totokkhn users table k delete korajabena onno kothai jotokkhn users er ekti
    //  bow o beche thakbe totokkhn users k delete korajabena(restrictOnDelete()) so bowder age martehobe trpr samike)
    //  ***akhn biyedibo jekhane : category er id thakbe name thakbe abong users_id thakbe
    // (jar chele ba references hobe id cheler address hobe table hobe (on) users shorto)
    // timestamp('created_at')->useCurrent();
    // timestamp('updated_at')->useCurrent()->useCurrentOnUpdate(); ai 2ta common
    // so CATEGORUES TABLE :(id name user_id(onek kichu ache upore porenaw),created_at,updated_at)

    // $table->id();
    // $table->string('name',20);
    // $table->unsignedBigInteger('user_id');  //age user_id assign korenitehobe trpr somporker condition
    // $table->foreign('user_id')->refrences('id')->on('users')->cascadeOnUpdate()->restrictOnDelete();
    
    // unsignedBigInteger--->akhane unsignedBigIntegere use korahoyeche karon laravele id unsignedBigInteger a 
    // --->add hoi tai akhane unsignedBigInteger boledisi that's it
    // refrences('id')->refrences diye users table er id k eneche
    // on('users')--->on diye boledise j ata users tabiler
    // cascadeOnDelete()hoini kno? : karon cascadedile ekti category delete korle sokol 
    // category soho users delete hoyejeto
 
    // $table->timestamp('created_at')->useCurrent();
    // $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
// Now run it : php artisan migrate


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




}
