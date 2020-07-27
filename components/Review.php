<?php namespace Martinimultimedia\Press\Components;

use Redirect;
use BackendAuth;
use Cms\Classes\ComponentBase;
use MartiniMultimedia\Press\Models\Review as R;


class Review extends ComponentBase
{
    public $review;

    public function componentDetails()
    {
        return [
            'name'        => 'martinimultimedia.press::lang.components.review.title',
            'description' => 'martinimultimedia.press::lang.components.review.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'martinimultimedia.press::lang.settings.slug',
                'description' => 'martinimultimedia.press::lang.settings.slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $review = $this->loadReview();
        if (!$review || !$review->exists) {
            $this->setStatusCode(404);
            return $this->controller->run('404');
           }
    
        $this->review = $this->page['review'] = $review;
        $this->page['title'] = $review->title;
    }

    protected function loadReview()
    {
        $slug = $this->property('slug');
        $review = new R;


        $review = $review->isClassExtendedWith('RainLab.Translate.Behaviors.TranslatableModel')
            ? $review->transWhere('slug', $slug)
            : $review->where('slug', $slug);
        
        if (!$this->checkEditor()) {
            $review = $review->isPublished();
        }
       
        $review = $review->first();
            
        return $review;
    }

    protected function checkEditor()
    {
        $backendUser = BackendAuth::getUser();
        return $backendUser && $backendUser->hasAccess('martinimultimedia.press.access_reviews');
    }


}
