<?php namespace MartiniMultimedia\Press\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'martinimultimedia_press_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'releases' => ['MartiniMultimedia\Press\Models\Release',
            'table' => 'martinimultimedia_press_releases_categories',
            'order' => 'published_at desc',
//            'scope' => 'isPublished'
        ],
        'reviews' => ['MartiniMultimedia\Press\Models\Review',
            'table' => 'martinimultimedia_press_reviews_categories',
            'order' => 'created_at desc',
//            'scope' => 'isPublished'
        ],
    ];
    
}
