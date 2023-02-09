<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBoekhouding2 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->renameColumn('boekhouding_id', 'id');
            $table->dropColumn('boekhouding_factuur_created_at');
            $table->dropColumn('boekhouding_factuur_updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->renameColumn('id', 'boekhouding_id');
            $table->dateTime('boekhouding_factuur_created_at')->nullable();
            $table->dateTime('boekhouding_factuur_updated_at')->nullable();
        });
    }
}
