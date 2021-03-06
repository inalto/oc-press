<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReviews2 extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_reviews', function($table)
        {
            $table->boolean('show_attachments')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_reviews', function($table)
        {
            $table->dropColumn('show_attachments');
     
        });
    }
}
