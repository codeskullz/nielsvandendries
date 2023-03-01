<?php namespace NielsVanDenDries\NielsVanDenDries\Models;

use Model;

/**
 * Model
 */
class Btw extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_nielsvandendries_btw';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'taxes' => \System\Models\File::class
    ];
}
