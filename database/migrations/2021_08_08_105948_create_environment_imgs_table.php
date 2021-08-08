<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvironmentImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('environment_imgs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('environment_id');
            $table->text('img');
            $table->timestamps();

            $table->foreign('environment_id')->references('id')->on('environments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('environment_imgs');
    }
}
