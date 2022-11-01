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
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->double('box_width')->nullable();
            $table->double('box_height')->nullable();
            $table->double('x_distance')->nullable();
            $table->double('y_distance')->nullable();
            $table->double('time')->nullable();
            $table->integer('distracted')->nullable();
            $table->integer('distract_type')->nullable();
            $table->integer('misclick')->nullable();
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
        Schema::dropIfExists('logs');
    }
};
