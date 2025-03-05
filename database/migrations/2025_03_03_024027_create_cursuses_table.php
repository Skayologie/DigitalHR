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
        Schema::create('cursus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
//            $table->unsignedBigInteger('grade_id')->nullable()->change();
//            $table->foreign('grade_id')->references('id')->on('users')->cascadeOnDelete();
//            $table->foreignId('grade_id')->constrained();
//            $table->unsignedBigInteger('post_id')->nullable()->change();
//            $table->foreign('post_id')->references('id')->on('jobs')->cascadeOnDelete();
            $table->unsignedBigInteger('formation_id')->nullable();
            $table->foreign('formation_id')->references("id")->on("formations");
//            $table->foreignId('contract_id')->constrained();
//            $table->foreignId('post_id')->constrained();
            $table->date('date_debut');
            $table->date('date_fin')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursus');
    }
};
