<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReleasesTags2 extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_releases_tags', function($table)
        {
            $table->primary(['tag_id','release_id']);
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_releases_tags', function($table)
        {
            $table->dropPrimary(['tag_id','release_id']);
        });
    }
}
