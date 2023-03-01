<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBtw extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_btw', function($table)
        {
            $table->string('period');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_btw', function($table)
        {
            $table->dropColumn('period');
        });
    }
}
