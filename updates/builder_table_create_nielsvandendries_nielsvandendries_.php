<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesNielsvandendries extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_nielsvandendries_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->date('boekhouding_factuurdatum');
            $table->string('boekhouding_factuurnummer');
            $table->string('boekhouding_bedrag');
            $table->string('boekhouding_exbtw');
            $table->string('boekhouding_incbtw');
            $table->string('boekhouding_btwtarief');
            $table->string('boekhouding_bedrijf');
            $table->integer('boekhouding_uitofin');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_nielsvandendries_');
    }
}
