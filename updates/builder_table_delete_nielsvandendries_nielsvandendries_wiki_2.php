<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesNielsvandendriesWiki2 extends Migration
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
            $table->string('name', 255);
            $table->string('section', 255);
            $table->string('category', 255);
            $table->string('archive', 255);
            $table->string('content', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
