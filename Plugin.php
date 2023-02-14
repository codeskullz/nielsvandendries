<?php namespace NielsVanDenDries\NielsVanDenDries;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Nielsvandendries\Nielsvandendries\Components\Invoices' => 'Invoices',
        ];
    }
}
