<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
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

    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',20)->index();
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
        Schema::dropIfExists('categories');
    }
};
