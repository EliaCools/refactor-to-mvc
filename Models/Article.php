<?php


class Article
{

    private int $id;
    private string $title;
    private string $slug;
    private string|null $content;


    public function __construct(int $id, string $title, string $slug, string|null $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->content = $content;
    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    public function getSlug(): string
    {
        return $this->slug;
    }


    public function getContent(): string|null
    {
        return $this->content;
    }


}
