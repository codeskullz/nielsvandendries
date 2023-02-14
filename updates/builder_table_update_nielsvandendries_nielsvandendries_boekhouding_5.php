<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBoekhouding5 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->string('boekhouding_btwtarief', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->integer('boekhouding_btwtarief')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
