<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('staff_pharmacy', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->integer('staff_id')->unsigned();
            $table->integer('pharmacy_id')->unsigned();
            $table->timestamp('created_at')->default(DB::raw('current_timestamp()'));
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp()'))->useCurrentOnUpdate();

            // علاقات
            // $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
            // $table->foreign('pharmacy_id')->references('id')->on('pharmacy')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff_pharmacy');
    }
};
?>
