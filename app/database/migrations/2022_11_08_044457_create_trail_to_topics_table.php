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
        Schema::create('trail_to_topics', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('trail_id');
            $table->foreign('trail_id')->references('id')->on('trails')->onDelete('cascade');

            $table->unsignedBigInteger('topic_id');
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trail_to_topic');
    }
};
