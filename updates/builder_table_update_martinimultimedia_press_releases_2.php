<?php namespace MartiniMultimedia\Press\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaPressReleases2 extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_press_releases', function($table)
        {
            $table->boolean('show_attachments')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_press_releases', function($table)
        {
            $table->dropColumn('show_attachments');
        });
    }
}
