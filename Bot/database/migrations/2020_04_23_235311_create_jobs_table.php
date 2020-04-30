<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('department');
            $table->boolean('status')->default(true);
            $table->date('in')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('time')->nullable();
            $table->string('days')->nullable();
            $table->string('type');
            $table->integer('msgstatus');
            $table->integer('user_id');
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
        Schema::dropIfExists('jobs');
    }
}
