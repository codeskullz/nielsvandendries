<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesNielsvandendriesBtw extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_nielsvandendries_btw', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('aangiftedatum');
            $table->string('uitgevoerd');
            $table->bigInteger('bestanden')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_nielsvandendries_btw');
    }
}
