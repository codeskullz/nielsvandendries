<?php namespace NielsVanDenDries\NielsVanDenDries\Models;

use Model;

/**
 * Model
 */
class Boekhouding extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_nielsvandendries_boekhouding';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'invoices' => [\System\Models\File::class, 'public' => true]
    ];
}
