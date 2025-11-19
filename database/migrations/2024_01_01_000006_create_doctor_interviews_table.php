<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('doctor_interviews', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->unsignedInteger('doctor_id');
            $table->string('day', 50);
            $table->string('from_time', 50);
            $table->string('to_time', 50);

            // علاقات
            // $table->foreign('doctor_id')->references('id')->on('docotrs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_interviews');
    }
};
