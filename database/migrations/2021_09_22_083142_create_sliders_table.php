<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title_id');
            $table->string('title_en');
            $table->string('title_cn');
            $table->text('description_id')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_cn')->nullable();
            $table->text('button_id')->nullable();
            $table->text('button_en')->nullable();
            $table->text('button_cn')->nullable();
            $table->text('button1_id')->nullable();
            $table->text('button1_en')->nullable();
            $table->text('button1_cn')->nullable();
            $table->text('url')->nullable();
            $table->text('url1')->nullable();
            $table->text('file')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
