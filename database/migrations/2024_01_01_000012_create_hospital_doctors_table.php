<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hospital_doctors', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('hospital_id');
            $table->timestamps();
            // علاقات
            // $table->foreign('doctor_id')->references('id')->on('docotrs')->onDelete('cascade');
            // $table->foreign('hospital_id')->references('id')->on('hospital')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospital_doctors');
    }
};
