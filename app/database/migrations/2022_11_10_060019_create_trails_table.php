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
        Schema::dropIfExists('trails');
        Schema::create('trails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_name');
            $table->string('name')->unique();
            $table->text('description', 200);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('trails');
    }
};