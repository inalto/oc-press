<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReviews extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_reviews', function($table)
        {
            $table->renameColumn('date', 'published_at');
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_reviews', function($table)
        {
            $table->renameColumn('published_at', 'date');
        });
    }
}
