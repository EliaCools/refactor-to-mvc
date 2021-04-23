<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require 'Models/Connection.php';

require 'View/shared/header.php';
require 'Models/ArticleLoader.php';
require 'Models/ProductLoader.php';

require 'Controllers/ArticleController.php';
require 'Controllers/ArticleDetailedController.php';
require 'Controllers/HomeController.php';
require 'Controllers/ProductController.php';
require 'Models/Article.php';
require 'Models/Product.php';
require 'Services/Calculator.php';


$controller = new HomeController();


if (isset($_GET['page']) && $_GET['page'] === 'articles') {

    $controller = new ArticleController();

}

if (isset($_GET['page']) && $_GET['page'] === 'article-detail' && !empty($_GET['article_slug'])) {

    $controller = new ArticleDetailedController();

}

if (isset($_GET['page']) && $_GET['page'] === 'products') {

    $controller = new ProductController();

}


$controller->render($_GET, $_POST);


?>
