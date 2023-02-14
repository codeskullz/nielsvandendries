<?php namespace NielsVanDenDries\NielsVanDenDries\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Bug extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'bugmanager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('NielsVanDenDries.NielsVanDenDries', 'main-menu-item', 'side-menu-item2');
    }
}
