<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsOnefourfive extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_onefourfive', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->string('category');
            $table->text('content');
            $table->string('email');
            $table->datetime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_onefourfive');
    }
}
