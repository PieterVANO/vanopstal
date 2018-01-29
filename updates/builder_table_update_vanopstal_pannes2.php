<?php namespace Vanopstal\Pannes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVanopstalPannes2 extends Migration
{
    public function up()
    {
        Schema::table('vanopstal_pannes_', function($table)
        {
            $table->string('technicien');
        });
    }
    
    public function down()
    {
        Schema::table('vanopstal_pannes_', function($table)
        {
            $table->dropColumn('technicien');
        });
    }
}