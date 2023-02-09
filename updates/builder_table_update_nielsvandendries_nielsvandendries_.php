<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendries extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_', function($table)
        {
            $table->dateTime('boekhouding_factuur_created_at')->nullable();
            $table->dateTime('boekhouding_factuur_updated_at')->nullable();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_', function($table)
        {
            $table->dropColumn('boekhouding_factuur_created_at');
            $table->dropColumn('boekhouding_factuur_updated_at');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
