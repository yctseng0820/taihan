<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentToCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->text('content_tw')->comment('繁中內容');
            $table->text('content_cn')->comment('簡中內容');
            $table->text('content_en')->comment('英文內容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('content_tw');
            $table->dropColumn('content_cn');
            $table->dropColumn('content_en');
        });
    }
}
