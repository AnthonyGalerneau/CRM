<?php

namespace AnthonyGalerneau\CRM\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=CRM;charset=utf8', 'root', 'root');
        return $db;
    }
}