<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMartinimultimediaPressReviewsCategories extends Migration
{
    public function up()
    {
        Schema::create('martinimultimedia_press_reviews_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('review_id');
            $table->bigInteger('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('martinimultimedia_press_reviews_categories');
    }
}
