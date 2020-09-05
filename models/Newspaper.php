<?php namespace MartiniMultimedia\Press\Models;

use Model;

/**
 * Model
 */
class Newspaper extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'martinimultimedia_press_newspapers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'review' => [
            'MartiniMultimedia\Press\Models\Review',
            'key' => 'newspaper_id'
        ]
    ];
}
