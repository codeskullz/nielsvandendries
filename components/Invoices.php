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
            'boekhouding_uitofin' => [
                'title'             => 'Credit or Debit',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getBoekhouding_uitofinOptions()
    {
        return Boekhouding::get()->lists('boekhouding_uitofin', 'boekhouding_uitofin');
    }

    public function onRun()
    {
        $this->item = Boekhouding::get()->toArray();
        $this->item = Boekhouding::where('boekhouding_uitofin', $this->property('boekhouding_uitofin'))->get()->toArray();
    }
}
