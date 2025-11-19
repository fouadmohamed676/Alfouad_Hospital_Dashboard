<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pharmacy', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('name', 50);
            $table->string('title', 100);
            $table->string('phone', 100);
            $table->integer('status')->default(1);
            $table->string('time_work', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacy');
    }
};
