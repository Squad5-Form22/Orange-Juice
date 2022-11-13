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
        Schema::dropIfExists('content_users');
        Schema::create('content_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedInteger('content_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
        Schema::table('content_users', function (Blueprint $table) {
            $table->foreign('content_id')->references('id')->on('contents');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_users');
    }
};
