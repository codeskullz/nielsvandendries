<?php namespace NielsVanDenDries\NielsVanDenDries\Models;

use Model;

/**
 * Model
 */
class Wiki extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_nielsvandendries_wiki';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
