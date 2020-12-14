<?php


namespace App\model;

use App\model\FoodModel;


class FoodLinesModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getFoodLines()
    {
        $sql = "SELECT * FROM foodlines";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function details($foodLine){
        $sql = "SELECT * FROM `foodlines` WHERE foodLine =:foodLine";
        $stmt= $this->database->prepare($sql);
        $stmt->bindParam(':foodLine',$foodLine);
       $stmt->execute();
        return $stmt->fetchAll();
    }

}