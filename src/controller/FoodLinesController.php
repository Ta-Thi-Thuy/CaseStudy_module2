<?php


namespace App\controller;


class FoodLinesController
{
    protected $foodlinemodel;
    public function __construct()
    {
        $this->foodlinemodel = new \App\model\FoodLinesModel();
    }

    public function getFoodLines()
    {
        return $this->foodlinemodel->getFoodLines();

    }

    public function details($foodLine){
            $data = $this->foodlinemodel->details($foodLine);
            include_once 'src/view/foodLine/detail.php';

    }

}