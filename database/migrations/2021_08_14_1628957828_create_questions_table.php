<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

		$table->increments('id',);
		$table->string('question');
        $table->string('gender');
		$table->timestamp('created_at');
        $table->date('updated_at');


        });
    }

    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
