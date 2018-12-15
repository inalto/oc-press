<?php namespace MartiniMultimedia\Press\Models;

use Model;

/**
 * Model
 */
class Release extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'martinimultimedia_press_releases';

    public $attachMany = [
        'images' => ['System\Models\File', 'order' => 'sort_order']
   ];

}
