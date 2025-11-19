<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('clinic_docotrs', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->integer('clinic_id');
            $table->integer('doctor_id');
            $table->timestamps();
            // FK
            // $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
            // $table->foreign('doctor_id')->references('id')->on('docotrs')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinic_docotrs');
    }
};
