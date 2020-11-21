<?php


class SupervisorModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }
}