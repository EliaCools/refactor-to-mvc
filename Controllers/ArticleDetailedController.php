<?php


class ArticleDetailedController
{

    public function render()
    {
        $connection = new Connection();
        $db = $connection->openConnection();

        $articleLoader = new ArticleLoader($db);
        $articles = $articleLoader->allArticles();

        $article = null;

        foreach ($articles as $articleToCheck) {

            if ($articleToCheck->getSlug() === $_GET['article_slug']) {
                $article = $articleToCheck;

                if (is_null($article->getContent())) {

                    require "View/pageNotFound.php";

                }
            }
        }

        require "View/articleDetailed.php";

    }

}
