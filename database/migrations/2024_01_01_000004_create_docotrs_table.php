<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('docotrs', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('name', 100);
            $table->string('title', 100);
            $table->date('barth_date')->nullable();
            $table->string('phone', 70);
            $table->string('email', 60);
            $table->string('gender_id', 15);
            $table->integer('local_id')->default(1);
            $table->string('specialization_id', 50)->nullable();
            $table->integer('clinic_id')->nullable();
            $table->string('price_interview', 100)->default('15000');
            $table->unsignedInteger('nationality_id')->default(1);
            $table->integer('status')->default(1);
            $table->timestamps();

            // العلاقات
            // $table->foreign('local_id')->references('id')->on('local');
            // $table->foreign('clinic_id')->references('id')->on('clinics');
            // $table->foreign('nationality_id')->references('id')->on('nationality');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('docotrs');
    }
};
