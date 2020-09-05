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

    public function registerPermissions()
    {
        return [
            'martinimultimedia.press.access_releases' => [
                'label' => 'Access all releases',
                'tab' => 'Press',
                'order' => 200,
            ],
            'martinimultimedia.press.access_own_releases' => [
                'label' => 'Access own releases',
                'tab' => 'Press',
                'order' => 210,
            ],
            'martinimultimedia.press.access_group_releases' => [
                'label' => 'Access group releases',
                'tab' => 'Press',
                'order' => 220,
            ],
            'martinimultimedia.press.edit_releases' => [
                'label' => 'Edit the release',
                'tab' => 'Press',
                'order' => 230,
            ],
            'martinimultimedia.press.edit_own_releases' => [
                'label' => 'Edit own releases',
                'tab' => 'Press',
                'order' => 240,
            ],
            'martinimultimedia.press.edit_group_releases' => [
                'label' => 'Edit group releases',
                'tab' => 'Press',
                'order' => 250,
            ],

            'martinimultimedia.press.access_reviews' => [
                'label' => 'Access all reviews',
                'tab' => 'Press',
                'order' => 260,
            ],
            'martinimultimedia.press.access_own_reviews' => [
                'label' => 'Access own reviews',
                'tab' => 'Press',
                'order' => 270,
            ],
            'martinimultimedia.press.access_group_reviews' => [
                'label' => 'Access group reviews',
                'tab' => 'Press',
                'order' => 280,
            ],
            'martinimultimedia.press.edit_reviews' => [
                'label' => 'Edit the reviews',
                'tab' => 'Press',
                'order' => 290,
            ],
            'martinimultimedia.press.edit_own_reviews' => [
                'label' => 'Edit own reviews',
                'tab' => 'Press',
                'order' => 300,
            ],
            'martinimultimedia.press.edit_group_reviews' => [
                'label' => 'Edit group reviews',
                'tab' => 'Press',
                'order' => 310,
            ],
            
        ];
    }
}
