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
        Schema::create('spot_tag', function (Blueprint $table) {
            //spot_idとtag_idを外部キーに設定
            $table->foreignId('spot_id')->constrained('spots');
            $table->foreignId('tag_id')->constrained('tags'); //参照先のテーブル名をconstrainedに記載
            $table->primary(['spot_id', 'tag_id']);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_tag');
    }
};
