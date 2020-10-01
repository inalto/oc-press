<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReleasesTags extends Migration
{
    public function up()
    {
        Schema::rename('martinimultimedia_press_tags_releases', 'martinimultimedia_press_releases_tags');
    }
    
    public function down()
    {
        Schema::rename('martinimultimedia_press_releases_tags', 'martinimultimedia_press_tags_releases');
    }
}
