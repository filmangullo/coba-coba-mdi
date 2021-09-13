<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnualGeneralMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annual_general_meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('year_id')->nullable();
            $table->string('title_id');
            $table->string('title_en');
            $table->string('title_cn');
            $table->text('file');
            $table->timestamps();

            $table->foreign('year_id')->references('id')->on('annual_general_meeting_years')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annual_general_meetings');
    }
}
