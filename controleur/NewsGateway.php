<?php

class NewsGateway
{
    private $con;

    /**
     * @param $con
     */
    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function insert(News $new): int
    {
        $query = 'INSERT INTO News VALUES(:id, :titre, :pubDate, :description, :link)';
        $this->con->executeQuery($query, array(':id' => array($new->getId(),PDO::PARAM_INT), ':titre' => array($new->getTitre(),PDO::PARAM_STR), ':pubDate' => array($new->getDate(), PDO::PARAM_STR), ':description' => array($new->getDescription(), PDO::PARAM_STR), ':link' => array($new->getLink(), PDO::PARAM_STR)));
        return $this->con->lastInsertId();
    }

    public function selectAll() :array{
        $query = 'SELECT * FROM News';
        $this->con->executeQuery($query);

        $resultats = $this->con->getResults();
        foreach ($resultats as $row){
            $Tab_All[] = new News($row['id'], $row['titre'], $row['pubDate'], $row['description'], $row['link']);
        }
        return  $Tab_All;
    }


    public function update(int $id, string $titre, string $article, string $ref, string $signature)
    {

    }
    public function delete(int $id): int
    {
        $query = 'DELETE FROM News WHERE id=:id';
        $this->con->executeQuery($query, array(':id' => array($id, PDO::PARAM_INT)));
        return $this->con->lastInsertId();
    }
    public function FindByTitle(string $title): array
    {
        //preparation et execution de la requete sql (A APPRENDRE)
        $query='SELECT * FROM News WHERE titre=:title';
        $this->con->executeQuery($query, array(':title' => array($title,PDO::PARAM_STR)));

        //conversion en objets
        $resultats = $this->con->getResults();
        foreach ($resultats as $row)
        {
            $Table_De_News[] = new News($row['id'], $row['date'], $row['titre'], $row['description'], $row['link']);
        }
        return $Table_De_News;

    }
}