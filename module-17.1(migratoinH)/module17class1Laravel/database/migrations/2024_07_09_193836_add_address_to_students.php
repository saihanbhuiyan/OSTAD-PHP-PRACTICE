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
        Schema::table('students', function (Blueprint $table) {
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
// ***************************UP & DOWM METHOD*************************
    //   up methode ja dibo down methodeo tai dibo
Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('address');
        });
    }
};
