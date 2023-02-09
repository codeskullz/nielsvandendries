<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBoekhouding3 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->string('boekhouding_uitofin', 10)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_nielsvandendries_boekhouding', function($table)
        {
            $table->integer('boekhouding_uitofin')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
