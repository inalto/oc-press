<?php namespace MartiniMultimedia\Press\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Releases extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'martinimultimedia.press.access_releases',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('MartiniMultimedia.Press', 'main-menu-item', 'side-menu-item');
    }
}
