<?php namespace Vanopstal\Pannes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVanopstalPannes3 extends Migration
{
    public function up()
    {
        Schema::table('vanopstal_pannes_', function($table)
        {
            $table->integer('date')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('debut')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('depanne')->nullable(false)->unsigned(false)->default(null)->change();
            $table->integer('remarche')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('vanopstal_pannes_', function($table)
        {
            $table->date('date')->nullable(false)->unsigned(false)->default(null)->change();
            $table->time('debut')->nullable(false)->unsigned(false)->default(null)->change();
            $table->time('depanne')->nullable(false)->unsigned(false)->default(null)->change();
            $table->time('remarche')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
