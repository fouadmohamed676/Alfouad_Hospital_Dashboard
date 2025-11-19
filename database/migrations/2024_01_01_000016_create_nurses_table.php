<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 60);
            $table->integer('nationality_id')->default(1);
            $table->tinyInteger('gender_id');
            $table->string('title', 50);
            $table->integer('status')->default(1);
            $table->integer('hospital_id')->unsigned()->nullable();
            $table->integer('created_at')->default(DB::raw('current_timestamp()'));
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();

            // FK
            // $table->foreign('nationality_id')->references('id')->on('nationality');
            // $table->foreign('hospital_id')->references('id')->on('hospital');
        });
    }

    public function down()
    {
        Schema::dropIfExists('nurses');
    }
};
