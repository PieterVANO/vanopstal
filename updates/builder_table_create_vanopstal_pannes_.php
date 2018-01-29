<?php namespace Vanopstal\Pannes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVanopstalPannes extends Migration
{
    public function up()
    {
        Schema::create('vanopstal_pannes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date');
            $table->time('debut');
            $table->time('depanne');
            $table->time('remarche');
            $table->string('type');
            $table->string('raison');
            $table->string('solution');
            $table->text('information')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vanopstal_pannes_');
    }
}
