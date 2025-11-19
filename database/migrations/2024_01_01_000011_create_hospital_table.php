<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hospital', function (Blueprint $table) {

            $table->integer('id')->primaryKey()->autoIncrement(); 
            $table->string('name', 200);
            $table->string('phone', 200);
            $table->string('email', 200);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospital');
    }
};
