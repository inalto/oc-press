<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaPressTagsReleases extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_press_releases_tags', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('tag_id');
            $table->bigInteger('release_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_press_releases_tags');
    }
}
