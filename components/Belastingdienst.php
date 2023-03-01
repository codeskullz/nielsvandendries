<?php namespace Nielsvandendries\Nielsvandendries\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Nielsvandendries\Models\Btw;

/**
 * Belastingdienst Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Belastingdienst extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Belastingdienst Aangifte',
            'description' => 'Aangifte Overzicht'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->item = Btw::get()->toArray();
    }
}
