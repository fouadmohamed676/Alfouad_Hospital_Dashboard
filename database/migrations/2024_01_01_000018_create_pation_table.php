<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pation', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement(); 
            $table->string('name', 100);
            $table->string('phone', 70);
            $table->string('email', 100);
            $table->string('sick', 255);
            $table->integer('status')->default(1);
            $table->integer('doctor_id')->unsigned();
            $table->integer('hospital_id')->unsigned();
            $table->integer('nationality_id')->default(1);
            $table->integer('local_id');
            $table->timestamp('created_at')->nullable()->default(DB::raw('current_timestamp()'));
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp()'))->useCurrentOnUpdate();

            // FK
            // $table->foreign('doctor_id')->references('id')->on('docotrs')->onDelete('cascade');
            // $table->foreign('hospital_id')->references('id')->on('hospital')->onDelete('cascade');
            // $table->foreign('nationality_id')->references('id')->on('nationality');
            // $table->foreign('local_id')->references('id')->on('local');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pation');
    }
};
