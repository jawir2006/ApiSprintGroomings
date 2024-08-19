<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSprintGroomingsTable extends Migration
{
    public function up()
    {
        Schema::create('sprint_groomings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('meeting_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sprint_groomings');
    }
}
