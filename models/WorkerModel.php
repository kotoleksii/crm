<?php

require_once(ROOT . '/models/BaseModel.php');
require_once(ROOT . '/models/Worker.php');

class WorkerModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('workers');
    }

    public function get()
    {
        return array_map(fn($warr) => new Worker($warr), $this->getAll()->fetchAll());
    }

    public function add($fields)
    {        
        $this->addRow($fields);
    }

}