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
        //

        Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['male', 'female']);
            $table->string('national_id')->unique()->nullable();
            $table->decimal('salary', 8, 2);
            $table->date('birth_date')->nullable();
            $table->string('phone_number');
            $table->string('address');
            $table->string('userImage')->nullable();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //

    }
};
