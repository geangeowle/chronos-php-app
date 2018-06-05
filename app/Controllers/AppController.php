<?php

namespace App\Controllers;

use Chronos\Controllers\BaseController;

abstract class AppController extends BaseController
{
    public $pageTitle = 'App 1.x';

    public function __construct()
    {
        parent::__construct();
        $this->initialize();
    }
}
