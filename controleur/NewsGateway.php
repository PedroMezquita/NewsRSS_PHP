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
        $query = 'INSERT INTO News VALUES(:id, :titre, :article, :ref, :signature)';
        $this->con->executeQuery($query, array(':id' => array($new->getId(),PDO::PARAM_INT), ':titre' => array($new->getTitre(),PDO::PARAM_STR), ':article' => array($new->getArticle(), PDO::PARAM_STR), ':ref' => array($new->getRef(), PDO::PARAM_STR), ':signature' => array($new->getSignature(), PDO::PARAM_STR)));
        return $this->con->lastInsertId();
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
            $Table_De_News[] = new News($row['id'], $row['titre'], $row['article'], $row['ref'], $row['signature']);
        }
        return $Table_De_News;

    }
}