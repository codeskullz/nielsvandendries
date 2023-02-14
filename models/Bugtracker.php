<?php namespace NielsVanDenDries\NielsVanDenDries\Models;

use Model;

/**
 * Model
 */
class Bugtracker extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_nielsvandendries_bugtracker';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'screenshots' => 'System\Models\File'
    ];

    
}
