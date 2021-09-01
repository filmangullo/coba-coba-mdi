<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMandarinContentToNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('title_cn')->after('title_en')->nullable();
            $table->text('brief_description_cn')->after('brief_description_en')->nullable();
            $table->text('content_cn')->after('content_en')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('title_cn');
            $table->dropColumn('brief_description_cn');
            $table->dropColumn('content_cn');
        });
    }
}
