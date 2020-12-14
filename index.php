<?php

use App\controller\FoodController;
use App\controller\FoodLinesController;

require_once __DIR__ . '/vendor/autoload.php';

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$foodController = new FoodController();

$foodlinesController = new FoodLinesController();

switch ($page) {
    case 'food-list':
        $foodController->index();
        break;

    case 'delete':
        $foodCode = $_REQUEST['foodCode'];
        $foodController->delete($foodCode);
        break;
    case 'edit':
        $foodController->edit();
        break;
    case 'add':
        $foodController->add();
        break;
    case "foodlines":
        $food = $_REQUEST['food'];
        $foodlinesController->details($food);
        break;
    case 'show-details':
        $foodController->show();
        break;
    default:
        include "src/view/home.php";
}

