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
        Schema::create('public_t_s', function (Blueprint $table) {
            $table->increments('id')->unique();
            // $table->primary('id'); //Automatic
            $table->timestamps();
            $table->date('date');
            $table->string('editor')->default('unknown');
            $table->string('word1');
            $table->string('word2');
            $table->string('word3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public_t');
    }
};
