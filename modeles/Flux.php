<?php

class Flux
{
    private $titre;
    private $description;
    private $link;
    private $pubDate;
    private $lang;

    /**
     * @param $titre
     * @param $description
     * @param $link
     * @param $pubDate
     * @param $lang
     */
    public function __construct($titre, $description, $link, $pubDate, $lang)
    {
        $this->titre = $titre;
        $this->description = $description;
        $this->link = $link;
        $this->pubDate = $pubDate;
        $this->lang = $lang;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param mixed $pubDate
     */
    public function setPubDate($pubDate): void
    {
        $this->pubDate = $pubDate;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang): void
    {
        $this->lang = $lang;
    }


}