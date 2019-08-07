<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tw', 255)->comment('標體-繁中');
            $table->string('title_cn', 255)->comment('標體-簡中');
            $table->string('title_en', 255)->comment('標體-英文');
            $table->text('content_tw', 255)->comment('繁中內容');
            $table->text('content_cn', 255)->comment('簡中內容');
            $table->text('content_en', 255)->comment('英文內容');
            $table->integer('sort')->length(10)->comment('排序');
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
        Schema::dropIfExists('announces');
    }
}
