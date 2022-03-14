<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chain_t_s', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->timestamps();
            $table->date('date');
            $table->string('editor')->default('unknown');
            $table->string('word');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chain_t_s');
    }
};
