<?php


class ArticleController
{

    function render()
    {

        $connection = new Connection();
        $db = $connection->openConnection();


        $articleLoader = new ArticleLoader($db);
        $articles = $articleLoader->allArticles();

        require "View/articles.php";
    }


}
