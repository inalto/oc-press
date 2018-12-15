<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMartinimultimediaPressReleases extends Migration
{
    public function up()
    {
        Schema::dropIfExists('martinimultimedia_press_releases');
    }
    
    public function down()
    {
        Schema::create('martinimultimedia_press_releases', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slug', 191)->nullable();
            $table->string('title', 191)->nullable();
            $table->text('content')->nullable();
            $table->date('date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('gallery', 191)->nullable();
        });
    }
}
