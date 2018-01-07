<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersSoftwareTestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers_software_testers', function (Blueprint $table) {
            $table->increments('developers_software_tester_id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('project_id')->on('projects');
            $table->integer('developer_id')->unsigned();
            $table->foreign('developer_id')->references('user_id')->on('users');
            $table->integer('software_tester_id')->unsigned();
            $table->foreign('software_tester_id')->references('user_id')->on('users');
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
        Schema::dropIfExists('developers_software_testers');
    }
}
