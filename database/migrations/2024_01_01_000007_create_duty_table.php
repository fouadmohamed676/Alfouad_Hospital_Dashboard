<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('duty', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('started', 100);
            $table->string('end', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('duty');
    }
};
