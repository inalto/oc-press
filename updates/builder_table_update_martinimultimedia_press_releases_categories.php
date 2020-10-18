<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReleasesCategories extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_releases_categories', function($table)
        {
            $table->dropPrimary(['release_id','category_id']);
            $table->primary(['release_id','category_id'],'releases_categories');
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_releases_categories', function($table)
        {
            $table->dropPrimary(['release_id','category_id']);
        });
    }
}
