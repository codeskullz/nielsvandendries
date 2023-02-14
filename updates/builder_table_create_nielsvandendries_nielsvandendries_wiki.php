<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesNielsvandendriesWiki extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_nielsvandendries_wiki', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('naam');
            $table->string('project')->nullable();
            $table->string('bug');
            $table->text('opmerkingen');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_nielsvandendries_wiki');
    }
}
