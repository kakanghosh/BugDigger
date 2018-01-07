<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_developers', function (Blueprint $table) {
            $table->increments('project_developer_id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('project_id')->on('projects');
            $table->integer('developer_id')->unsigned();
            $table->foreign('developer_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('project_developers');
    }
}
