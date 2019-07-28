<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('main_type')->comment('半導體-1, 磁性材料-2');
            $table->string('title_tw', 255)->comment('標題-繁中');
            $table->string('title_cn', 255)->comment('標題-簡中');
            $table->string('title_en', 255)->comment('標題-英文');
            $table->string('img', 255)->comment('圖片');
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
        Schema::dropIfExists('categories');
    }
}
