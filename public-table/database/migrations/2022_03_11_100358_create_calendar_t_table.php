<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_t', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('editor');
            $table->boolean('mo');
            $table->boolean('tu');
            $table->boolean('we');
            $table->boolean('th');
            $table->boolean('fr');
            $table->boolean('sa');
            $table->boolean('su');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_t');
    }
};
