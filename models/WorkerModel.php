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

    public function getSortedList(string $field, int $direction)
    {
        return array_map(fn($warr) => new Worker($warr), $this->getAllSorted($field, $direction)->fetchAll());
    }

    public function getById($id)
    {
        return new Worker($this->getSome(['id' => $id])->fetch());
    }

    public function add($fields)
    {        
        $this->addRow($fields);
    }

    public function update($id, $fields)
    {
        $this->updateRow($id, $fields);
    }

    public function delete($id)
    {
        $this->deleteRow($id);
    }

    

}