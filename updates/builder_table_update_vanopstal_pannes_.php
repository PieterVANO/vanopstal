<?php namespace Vanopstal\Pannes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVanopstalPannes extends Migration
{
    public function up()
    {
        Schema::table('vanopstal_pannes_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vanopstal_pannes_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
