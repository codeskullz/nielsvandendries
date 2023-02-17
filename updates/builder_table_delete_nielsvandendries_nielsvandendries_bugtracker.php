<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesNielsvandendriesBugtracker extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_nielsvandendries_bugtracker');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_nielsvandendries_bugtracker', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->text('summary');
            $table->string('environment', 255);
            $table->text('logs');
            $table->text('sourceurl');
            $table->binary('screenshots')->nullable();
            $table->text('reproduce');
            $table->string('expectation', 255);
            $table->string('severity', 255);
            $table->string('priority', 255);
            $table->string('reportername', 255);
            $table->string('assignee', 255);
            $table->date('duedate');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('labels')->nullable();
            $table->string('archive', 255);
        });
    }
}
