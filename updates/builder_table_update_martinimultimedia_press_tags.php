<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressTags extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_tags', function($table)
        {
            $table->string('slug');
          
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_tags', function($table)
        {
            $table->dropColumn('slug');
            
        });
    }
}
