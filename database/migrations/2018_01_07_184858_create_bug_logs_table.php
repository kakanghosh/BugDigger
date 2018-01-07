<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bug_logs', function (Blueprint $table) {
            $table->increments('bug_log_id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('project_id')->on('projects');
            $table->integer('software_tester_id')->unsigned();
            $table->foreign('software_tester_id')->references('user_id')->on('users');
            $table->string('bug_title');
            $table->integer('bug_severity_id')->unsigned();
            $table->foreign('bug_severity_id')
                    ->references('bug_severity_id')
                    ->on('bug_severities');
            $table->integer('bug_priority_id')->unsigned();
            $table->foreign('bug_priority_id')
                    ->references('bug_priority_id')
                    ->on('bug_priorities');
            $table->integer('bug_status_id')->unsigned();
            $table->foreign('bug_status_id')
                    ->references('bug_status_id')
                    ->on('bug_status');
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
        Schema::dropIfExists('bug_logs');
    }
}
