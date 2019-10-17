<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_log', function (Blueprint $table) {
		$table->engine = 'InnoDB';
		$table->charset = 'utf8';
		$table->collation = 'utf8_unicode_ci';
		$table->increments('id');
		$table->dateTime('crnt_date');
		$table->string('todohuken', 50);
		$table->string('fname', 10);
		$table->string('lname', 15);
		$table->integer('viewcnt');
		$table->string('ip_addr', 30);
		$table->string('referer', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_log');
    }
}
