<?php

class AdminGateway extends Connection
{
    public function insert(Admin $admin): int
    {
        $query = 'INSERT INTO adminn VALUES(:pseudo, :mdp)';
        $this->executeQuery($query, array(':pseudo' => array($admin->getPseudo(), PDO::PARAM_STR), ':mdp' => array($admin->getMdp(), PDO::PARAM_STR)));
        return $this->lastInsertId();
    }

/*    public function selectAll(): array
    {
        $query = 'SELECT * FROM news';
        $this->executeQuery($query);

        $resultats = $this->getResults();
        if ($resultats == NULL) { //Si on n'as aucun news dans la base de données
            $Tab_All[] = NULL;
            return $Tab_All;
        }
        foreach ($resultats as $row) {
            $Tab_All[] = new News($row['id'], $row['titre'], $row['pubDate'], $row['description'], $row['link']);
        }
        return $Tab_All;
    }*/


    public function update(int $id, string $titre, string $article, string $ref, string $signature)
    {

    }

    public function delete(int $id): int
    {
        $query = 'DELETE FROM adminn WHERE pseudo=:pseudo';
        $this->executeQuery($query, array(':pseudo' => array($id, PDO::PARAM_STR)));
        return $this->lastInsertId();
    }

    public function FindByPseudo(string $pseudo): Admin
    {
        //preparation et execution de la requete sql (A APPRENDRE)
        $query = 'SELECT * FROM adminn WHERE pseudo=:pseudo';
        $this->executeQuery($query, array(':pseudo' => array($pseudo, PDO::PARAM_STR)));

        //conversion en objets
        $resultats = $this->getResults();

        $admin = new Admin($resultats[0]['pseudo'], $resultats[0]['mdp']);
        return $admin;

    }
}