<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->integer('interview_id');
            $table->integer('is_deleted')->default(0);
            $table->timestamp('created_at')->default(DB::raw('current_timestamp()'));
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp()'))->useCurrentOnUpdate();

            // FK
            // $table->foreign('interview_id')->references('id')->on('doctor_interviews')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
