<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hospital', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('dis', 200);
            $table->string('address', 200);
            $table->string('phone', 200);
            $table->string('specialization_id', 1);
            $table->string('is_deleted', 10)->default('0');
            $table->string('local_id', 10)->default('0');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hospital');
    }
};
