<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('specialization', function (Blueprint $table) {
            $table->integer('id')->primaryKey()->autoIncrement(); 
            $table->string('name', 100);
            $table->integer('status')->default(1);
            $table->timestamp('created_at')->default(DB::raw('current_timestamp()'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialization');
    }
};

?>
