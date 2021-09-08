<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // スレッドテーブルを定義
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            // idは連番で自動決定
            $table->increments('id');
            // レス数はデフォルトで０（スレッドのidと紐づいたレスポンスの数に更新する予定）
            $table->integer('num_res')->default('0');
            $table->string('title', 30);
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
        Schema::dropIfExists('threads');
    }
}
