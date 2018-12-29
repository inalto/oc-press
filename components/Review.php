<?php namespace Martinimultimedia\Press\Components;

use Cms\Classes\ComponentBase;

class Review extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'martinimultimedia.press::lang.components.review.title',
            'description' => 'martinimultimedia.press::lang.components.review.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
