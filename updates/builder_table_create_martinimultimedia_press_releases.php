<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaPressReleases extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_press_releases', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->date('date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('gallery')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_press_releases');
    }
}
