<?php

class FluxGateway extends Connection
{
    public function insert(string $titre, string $description, string $link, string $date, string $lang): int
    {
        $query = 'INSERT INTO flux VALUES(:titre, :description, :link, :pubDate, :lang)';
        $this->executeQuery($query, array(':titre' => array($titre,PDO::PARAM_STR), ':description' => array($description, PDO::PARAM_STR), ':link' => array($link, PDO::PARAM_STR), ':pubDate' => array($date, PDO::PARAM_STR), ':lang' => array($lang, PDO::PARAM_STR)));
        return $this->lastInsertId();
    }

    public function selectAll() :array{
        $query = 'SELECT * FROM Flux';
        $this->executeQuery($query);

        $resultats = $this->getResults();
        if ($resultats == NULL){ //Si on n'as aucun flux dans la base de données
            $Tab_All[] = NULL;
            return $Tab_All;
        }
        foreach ($resultats as $row){
            $Tab_All[] = new Flux($row['titre'], $row['description'], $row['link'], $row['pubDate'],  $row['lang']);
        }
        return $Tab_All;
    }


    public function update(int $id, string $titre, string $article, string $ref, string $signature)
    {

    }

    public function delete(string $titre): int
    {
        $query = 'DELETE FROM Flux WHERE titre=:titre';
        $this->executeQuery($query, array(':id' => array($titre, PDO::PARAM_STR)));
        return $this->lastInsertId();
    }


    public function FindByTitle(string $title): array
    {
        //preparation et execution de la requete sql (A APPRENDRE)
        $query='SELECT * FROM Flux WHERE titre=:title';
        $this->executeQuery($query, array(':title' => array($title,PDO::PARAM_STR)));

        //conversion en objets
        $resultats = $this->getResults();
        foreach ($resultats as $row)
        {
            $Table_De_Flux[] = new News($row['date'], $row['titre'], $row['description'], $row['link'], $row['lang']);
        }
        return $Table_De_Flux;

    }
}