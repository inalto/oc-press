<?php namespace MartiniMultimedia\Press;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function registerComponents()
    {
    	return [
                'MartiniMultimedia\Press\Components\Reviews' => 'reviews',
                'MartiniMultimedia\Press\Components\Review' => 'review',
                'MartiniMultimedia\Press\Components\Releases' => 'releases',
                'MartiniMultimedia\Press\Components\Release' => 'release'
    	];
    }

    public function registerSettings()
    {
    }
}
