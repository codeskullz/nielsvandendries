<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBoekhouding7 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->string('boekhouding_kwartaal');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->dropColumn('boekhouding_kwartaal');
        });
    }
}
