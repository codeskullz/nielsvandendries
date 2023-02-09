<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendries2 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_', function($table)
        {
            $table->renameColumn('id', 'boekhouding_id');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_', function($table)
        {
            $table->renameColumn('boekhouding_id', 'id');
        });
    }
}
