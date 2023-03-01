<?php namespace Nielsvandendries\Nielsvandendries\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Nielsvandendries\Models\Boekhouding;

/**
 * Invoices Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Invoices extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'invoices Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'boekhouding_kwartaal' => [
                'title'             => 'Periode',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getboekhouding_kwartaalOptions()
    {
        return Boekhouding::get()->lists('boekhouding_kwartaal', 'boekhouding_kwartaal');
    }

    public function onRun()
    {
        // $this->item = Boekhouding::get()->toArray();
        $this->item = Boekhouding::where('boekhouding_kwartaal', $this->property('boekhouding_kwartaal'))->get()->toArray();
    }
}
