<?php

class Worker
{
    public int $id;
    public string $firstName;
    public string $lastName;
    public string $phone;
    public bool $status;
    public float $salary;

    public function __construct($fields)
    {
        $this->id = $fields['id'];
        $this->firstName = $fields['first_name'];
        $this->lastName = $fields['last_name'];
        $this->phone = $fields['phone'];
        $this->status = $fields['status'];
        $this->salary = $fields['salary'];
    }  
}