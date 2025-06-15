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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('major_id');        
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('teach_id');
            $table->unsignedBigInteger('sub_id');
            $table->date('date');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->enum('status', ['open', 'closed']);
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('teach_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('sub_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
