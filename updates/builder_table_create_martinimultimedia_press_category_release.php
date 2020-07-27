<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaPressCategoryRelease extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_press_category_release', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('release_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['post_id', 'category_id'],'mm_press_categories');
        });

    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_press_category_release');
    }
}
