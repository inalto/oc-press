<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaPressReviews extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_press_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->date('date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_press_reviews');
    }
}
