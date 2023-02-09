<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBoekhouding4 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->renameColumn('boekhouding_incbtw', 'boekhouding_btwbedrag');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->renameColumn('boekhouding_btwbedrag', 'boekhouding_incbtw');
        });
    }
}
