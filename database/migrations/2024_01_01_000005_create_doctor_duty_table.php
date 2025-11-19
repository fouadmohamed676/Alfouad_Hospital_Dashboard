<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('doctor_duty', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->unsignedInteger('doctor_id');
            $table->unsignedInteger('time_id');
            $table->timestamp('created_at')->default(DB::raw('current_timestamp()'));

            // FK
            // $table->foreign('doctor_id')->references('id')->on('docotrs')->onDelete('cascade');
            // $table->foreign('time_id')->references('id')->on('time_work')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_duty');
    }
};
