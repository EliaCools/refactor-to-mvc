<?php


class ArticleLoader
{

    private PDO $db;


    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    /** @return Article[] */
    public function AllArticles(): array
    {

        $articlesRaw = $this->db->query('select * from articles');


        foreach ($articlesRaw as $article) {

            $articleArray[] = new Article($article['id'], $article['title'], $article['slug'], $article['content'] ?? null);

        }

        return $articleArray;

    }


}
