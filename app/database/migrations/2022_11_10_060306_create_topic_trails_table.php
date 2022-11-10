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
        Schema::dropIfExists('topic_trails');
        Schema::create('topic_trails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('topic_id');
            $table->unsignedInteger('trail_id');
            $table->timestamps();
        });

        Schema::table('topic_trails', function (Blueprint $table) {
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('trail_id')->references('id')->on('trails');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_trails');
    }
};