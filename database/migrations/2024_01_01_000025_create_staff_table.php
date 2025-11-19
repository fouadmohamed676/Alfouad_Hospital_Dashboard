<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement();
            $table->string('name', 100);
            $table->string('title', 100);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->integer('is_deleted')->default(1);
            $table->timestamp('created_at')->default(DB::raw('current_timestamp()'));
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp()'))->useCurrentOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
?>
