<?php

class NewsModel
{
    private $gwNews;

    public function __construct(){
        $this->gwNews = new NewsGateway();
    }

    public function get_News($max, $min): array
    {
        return $this->gwNews->selectAll($max, $min);
    }

    public function set_News($news): int
    {
        return $this->gwNews->insert($news);
    }



}