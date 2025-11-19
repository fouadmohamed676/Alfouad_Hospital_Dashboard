<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('forwords', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement(); 
            $table->string('name', 200);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('forwords');
    }
};
