<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaPressNewspapers extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_press_newspapers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('web')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_press_newspapers');
    }
}
