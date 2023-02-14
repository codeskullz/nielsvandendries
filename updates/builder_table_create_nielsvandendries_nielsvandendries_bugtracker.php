<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesNielsvandendriesBugtracker extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_nielsvandendries_bugtracker', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('summary');
            $table->string('environment');
            $table->text('logs');
            $table->text('sourceurl');
            $table->bigInteger('screenshots');
            $table->text('reproduce');
            $table->string('expectation');
            $table->string('severity');
            $table->string('priority');
            $table->string('reportername');
            $table->string('assignee');
            $table->date('duedate');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_nielsvandendries_bugtracker');
    }
}
