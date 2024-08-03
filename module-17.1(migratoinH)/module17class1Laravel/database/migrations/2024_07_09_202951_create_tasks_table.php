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
// *******akhn ekti database relation toiri korbo tasks o users er modde***********
    // 1)php artisan make:migration create_tasks_table
    //previous kotha students tabile o modulle17class1 a hoyeche 
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->text('description');
            $table->date('due_date');
            $table->enum('status',['pending','loading','completed'])->default('pending');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
// **************************$table->id()->index();*******************************
//index() *****jesokol table ba field k amader  where diye khoja lagte pare like select all from 
    //-->where (id,due_date,name,ect)sesokol field a index() bosate hobe like $table->id()->index(); 
    //-->avabe tobe foreignId te use korte hobena karon er modde auto index() thake karon somporko
    //-->sthapon korbe relation korbe TOBE ATA DATABASE A TABLE MIGRATE KORAR AGE KORTE HOBE TOTHA 
    //-->DATABASE A TABLETI RUN KORARA AGE KORA LAGBE..rollback kore field gulute ->index(); bosaleo hobe but field er data gulu chole jabe so hoi age koro othoba pore ekti index er jonno migration kore tar modde data gulu bosiye daw

// JODI TABLE TI RUN KORE FELI TAHOLE JA KORTE HOBE :ata 2 ti wayte korajai
        // 1)migration run korar age ->index() bosiye jekhane jekhane proyojon
        // 2)2)add_index_to_tasks_table (up methode sokol field bosiye index korbo jgulu proyojon 
        // DOWN methode dropColumn korbo )=>baki details controller a module17.1







}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
