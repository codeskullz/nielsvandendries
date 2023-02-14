<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesNielsvandendriesWiki extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_nielsvandendries_wiki');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_nielsvandendries_wiki', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('naam', 255);
            $table->string('project', 255)->nullable();
            $table->string('bug', 255);
            $table->text('opmerkingen');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
