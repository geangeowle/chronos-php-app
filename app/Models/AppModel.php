<?php

namespace App\Models;

use Chronos\Models\BaseModel;

abstract class AppModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->initialize();
    }
}
