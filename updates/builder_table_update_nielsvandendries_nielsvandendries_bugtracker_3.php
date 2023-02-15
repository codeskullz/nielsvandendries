<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBugtracker3 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_bugtracker', function($table)
        {
            $table->string('archive');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_bugtracker', function($table)
        {
            $table->dropColumn('archive');
        });
    }
}
