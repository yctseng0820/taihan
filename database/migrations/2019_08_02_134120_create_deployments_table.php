<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deployments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_tw', 255)->comment('標題-繁中');
            $table->string('title_cn', 255)->comment('標題-簡中');
            $table->string('title_en', 255)->comment('標題-英文');
            $table->string('content_tw', 255)->comment('繁中內容');
            $table->string('content_cn', 255)->comment('簡單中內容');
            $table->string('content_en', 255)->comment('英文內容');
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
        Schema::dropIfExists('deployments');
    }
}
