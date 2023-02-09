<?php namespace NielsVanDenDries\NielsVanDenDries\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesNielsvandendriesBoekhouding extends Migration
{
    public function up()
    {
        Schema::rename('nielsvandendries_nielsvandendries_', 'nielsvandendries_nielsvandendries_boekhouding');
    }
    
    public function down()
    {
        Schema::rename('nielsvandendries_nielsvandendries_boekhouding', 'nielsvandendries_nielsvandendries_');
    }
}
