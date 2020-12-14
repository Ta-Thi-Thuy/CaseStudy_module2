<?php

namespace App\model;

class  DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=case_study';
        $this->username = 'root';
        $this->password = 'G*[pBm%h[5YnYY$Z';

    }

    public function connect()
    {
        try {
            return new  \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}