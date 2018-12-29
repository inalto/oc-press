<?php namespace Martinimultimedia\Press\Components;

use Cms\Classes\ComponentBase;

class Reviews extends ComponentBase
{
    public function componentDetails()
    {

            return [
                'name'        => 'martinimultimedia.press::lang.components.reviews.title',
                'description' => 'martinimultimedia.press::lang.components.reviews.description'

        ];
    }

    public function defineProperties()
    {
        return [];
    }
}
