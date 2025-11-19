<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pation_sicks', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->integer('pation_id');
            $table->integer('sick_id');
            $table->timestamp('created_at')->default(DB::raw('current_timestamp()'));
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp()'))->useCurrentOnUpdate();

            // FK
            // $table->foreign('pation_id')->references('id')->on('pation')->onDelete('cascade');
            // $table->foreign('sick_id')->references('id')->on('sick')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pation_sicks');
    }
};
