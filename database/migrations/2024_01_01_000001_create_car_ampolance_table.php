<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('car_ampolance', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();  // بدون primary key كما هو في SQL
            $table->integer('staff_id')->unsigned();
            $table->string('model', 100);
            $table->string('number', 100);
            $table->string('status', 100);
            // العلاقات
            // $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_ampolance');
    }
};
