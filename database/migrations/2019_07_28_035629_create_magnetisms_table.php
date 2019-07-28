<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagnetismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magnetisms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tw', 255)->comment('標題-繁中');
            $table->string('title_cn', 255)->comment('標題-簡中');
            $table->string('title_en', 255)->comment('標題-英文');
            $table->text('content_tw')->comment('繁中內容');
            $table->text('content_cn')->comment('簡中內容');
            $table->text('content_en')->comment('英文內容');
            $table->integer('category_id')->length(10)->comment('分類ID');
            $table->integer('sort')->length(10)->unsignd()->comment('排序');
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
        Schema::dropIfExists('magnetisms');
    }
}
