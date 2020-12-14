<?php


namespace App\model;


class FoodModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT food.foodCode,food.foodName,foodlines.foodLine,food.buyPrice,food.img FROM food JOIN foodlines ON food.foodLine = foodlines.foodLine ORDER BY food.foodCode";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function deleteFood($foodCode)
    {
        $sql = "DELETE FROM fooddetails WHERE foodCode =:foodCode  ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':foodCode', $foodCode);
        $stmt->execute();


        $sql = "DELETE FROM food WHERE foodCode =:foodCode ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':foodCode', $foodCode);
        $stmt->execute();

    }

//    public function searchFood($search)
//    {
//        $sql = "SELECT * FROM `food` WHERE `foodLine` OR `foodName` LIKE '$search'";
//        $stmt = $this->database->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }

    public function getFoodById($foodCode){
        $sql = 'SELECT * FROM `food` WHERE foodCode = :foodCode';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':foodCode', $foodCode);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function edit($foodCode,$foodName,$foodLine,$buyPrice,$img)
    {
        $sql = 'UPDATE food SET foodName=:foodName, foodLine=:foodLine, buyPrice=:buyPrice,img=:img WHERE foodCode =:foodCode';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':foodName', $foodName);
        $stmt->bindParam(':foodLine', $foodLine);
        $stmt->bindParam(':buyPrice', $buyPrice);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':foodCode', $foodCode);
        $stmt->execute();

    }
    public function add($foodName,$foodLine,$buyPrice,$img)
    {
        $sql = "INSERT INTO `food`( `foodName`, `foodLine`, `buyPrice`, `img`) VALUES (?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $foodName);
        $stmt->bindParam(2, $foodLine);
        $stmt->bindParam(3, $buyPrice);
        $stmt->bindParam(4, $img);
        $stmt->execute();

        $LastInsertID = $this->database->lastInsertId();
        $foodVendor = "";
        $foodDescriptions = "";
        $quantityInStock = 0;
        $foodName = "";

        $sql2 = "INSERT INTO `fooddetails`(`foodCode`, `foodVendor`, `foodDescriptions`, `quantityInStock`, `img`, `foodName`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt2 = $this->database->prepare($sql2);
        $stmt2->bindParam(1, $LastInsertID);
        $stmt2->bindParam(2, $foodVendor);
        $stmt2->bindParam(3, $foodDescriptions);
        $stmt2->bindParam(4, $quantityInStock);
        $stmt2->bindParam(5, $img);
        $stmt2->bindParam(6, $foodName);
        $stmt2->execute();
    }

    public function findById($foodCode)
    {
        $sql = "SELECT foodCode, foodVendor, foodDescriptions, quantityInStock, img, foodName FROM fooddetails WHERE foodCode=:foodCode";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':foodCode', $foodCode);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addDetails($foodCode,$foodName,$foodVendor, $foodDescriptions, $quantityInStock)
    {
        $sql = "UPDATE `fooddetails` SET `foodName`=:foodName,`foodVendor`=:foodVendor,`foodDescriptions`=:foodDescriptions,`quantityInStock`=:quantityInStock WHERE `foodCode`=:foodCode";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':foodCode', $foodCode);
        $stmt->bindParam(':foodName', $foodName);
        $stmt->bindParam(':foodVendor', $foodVendor);
        $stmt->bindParam(':foodDescriptions', $foodDescriptions);
        $stmt->bindParam(':quantityInStock', $quantityInStock);
        $stmt->execute();
    }

}

?>