<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBugtracker extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_bugtracker', function($table)
        {
            $table->binary('screenshots')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_bugtracker', function($table)
        {
            $table->bigInteger('screenshots')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
