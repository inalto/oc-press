<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReviewsCategories extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_reviews_categories', function($table)
        {
            $table->primary(['review_id','category_id'],'releases_categories');
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_reviews_categories', function($table)
        {
            $table->dropPrimary(['review_id','category_id']);
        });
    }
}
