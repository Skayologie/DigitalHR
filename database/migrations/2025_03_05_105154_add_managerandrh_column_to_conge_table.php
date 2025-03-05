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
        Schema::table('conge', function (Blueprint $table) {
            //
            $table->boolean("ManagerAccept")->nullable();
            $table->boolean("RhAccept")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('conge', function (Blueprint $table) {
            //
        });
    }
};
