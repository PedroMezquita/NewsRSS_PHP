<?php

class NewsModel
{
    private $gwNews;

    public function __construct(){
        $this->gwNews = new NewsGateway();
    }





}