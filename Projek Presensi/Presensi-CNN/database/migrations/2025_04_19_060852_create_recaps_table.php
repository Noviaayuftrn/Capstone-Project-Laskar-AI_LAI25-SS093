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
        Schema::create('recaps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('sub_id');
            $table->integer('jumlah_hadir');
            $table->integer('jumlah_alpha');
            $table->integer('jumlah_sakit');
            $table->integer('jumlah_izin');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('sub_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recaps');
    }
};
