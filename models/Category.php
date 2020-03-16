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
}
