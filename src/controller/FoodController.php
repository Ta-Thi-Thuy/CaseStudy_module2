<?php

namespace App\controller;

use App\model\FoodLinesModel;
use App\model\FoodModel;

class FoodController
{
    protected $foodModel;
    protected $foodLinesModel;

    public function __construct()
    {
        $this->foodModel = new FoodModel();
        $this->foodLinesModel = new FoodLinesModel();
    }

    public function index()
    {
        $foods = $this->foodModel->getAll();
        include 'src/view/list.php';

    }

    public function delete($foodCode)
    {
        if ($_REQUEST['foodCode']) {
            $this->foodModel->deleteFood($foodCode);
        }
        header("location:index.php?page=food-list");

    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $foodCode = $_REQUEST['foodCode'];
            $foodlines = $this->foodLinesModel->getFoodLines();
            $foods = $this->foodModel->getFoodById($foodCode);
            include_once "src/view/edit.php";
        } else {
            $foodCode = $_REQUEST['foodCode'];
            $foodName = $_POST['foodName'];
            $foodLine = $_POST['foodLine'];
            $buyPrice = $_POST['buyPrice'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);

            $this->foodModel->edit($foodCode, $foodName, $foodLine, $buyPrice, $img);

            header("location:index.php?page=food-list");
        }
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $foodlines = $this->foodLinesModel->getFoodLines();
            include_once "src/view/add.php";
        } else {
            $foodName = $_POST['foodName'];
            $foodLine = $_POST['foodLine'];
            $buyPrice = $_POST['buyPrice'];
            $img = $_FILES['img']['name'];
            $img_tmp = $_FILES['img']['tmp_name'];
            move_uploaded_file($img_tmp, 'img/' . $img);

            $this->foodModel->add($foodName, $foodLine, $buyPrice, $img);

            header("location:index.php?page=food-list");
        }
    }

    public function show()
    {
        $foodCode = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $showDetails = $this->foodModel->findById($foodCode);
            include "src/view/fooddetails.php";
        } else {
            $foodCode = $_GET['id'];
            $foodName = $_POST['food'];
            $foodVendor = $_POST['vendor'];
            $foodDescription = $_POST['desc'];
            $quantityInStock = $_POST['amount'];

            $this->foodModel->addDetails($foodCode, $foodName, $foodVendor, $foodDescription, $quantityInStock);

            header("location:index.php?page=show-details&id={$_REQUEST['id']}");


        }
    }
}