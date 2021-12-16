<?php

class NewsModel
{
    private $gwNews;

    public function __construct(){
        $this->gwNews = new NewsGateway();
    }

    public function get_News(): array
    {
        return $this->gwNews->selectAll();
    }



}