<?php

class FluxGateway
{
    private $con;

    /**
     * @param $con
     */
    public function __construct(Connection $con)
    {
        $this->con = $con;
    }

    public function insert(Flux $flux): int
    {
        $query = 'INSERT INTO News VALUES(:titre, :pubDate, :description, :link, :lang)';
        $this->con->executeQuery($query, array(':titre' => array($flux->getTitre(),PDO::PARAM_STR), ':pubDate' => array($flux->getDate(), PDO::PARAM_STR), ':description' => array($flux->getDescription(), PDO::PARAM_STR), ':link' => array($flux->getLink(), PDO::PARAM_STR), ':lang' => array($flux->getLang(), PDO::PARAM_STR)));
        return $this->con->lastInsertId();
    }

    public function selectAll() :array{
        $query = 'SELECT * FROM Flux';
        $this->con->executeQuery($query);

        $resultats = $this->con->getResults();
        foreach ($resultats as $row){
            $Tab_All[] = new News($row['titre'], $row['pubDate'], $row['description'], $row['link'], $row['lang']);
        }
        return  $Tab_All;
    }


    public function update(int $id, string $titre, string $article, string $ref, string $signature)
    {

    }

    /* Faut remplacer l'id par le titre
    public function delete(int $id): int
    {
        $query = 'DELETE FROM News WHERE id=:id';
        $this->con->executeQuery($query, array(':id' => array($id, PDO::PARAM_INT)));
        return $this->con->lastInsertId();
    }
    */

    public function FindByTitle(string $title): array
    {
        //preparation et execution de la requete sql (A APPRENDRE)
        $query='SELECT * FROM Flux WHERE titre=:title';
        $this->con->executeQuery($query, array(':title' => array($title,PDO::PARAM_STR)));

        //conversion en objets
        $resultats = $this->con->getResults();
        foreach ($resultats as $row)
        {
            $Table_De_Flux[] = new News($row['date'], $row['titre'], $row['description'], $row['link'], $row['lang']);
        }
        return $Table_De_Flux;

    }
}