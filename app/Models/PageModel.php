<?php

namespace App\Models;

class PageModel extends AppModel
{
    public $name = 'Page';
    public $namespace = 'app';
    protected $useTable = 'tb_page';
    protected $pk = 'id';

    public function initialize()
    {
    }

    public function read()
    {
        // pr($this->getConfig());
        pr(__NAMESPACE__.'..PageModel..');
    }
}
