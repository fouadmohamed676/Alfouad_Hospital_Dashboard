<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('clinics', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('name', 255);
            $table->integer('local_id')->default(1);
            $table->string('phone', 100);
            $table->integer('status')->default(1);
            $table->timestamps();
            // FK
            // $table->foreign('local_id')->references('id')->on('local')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};

