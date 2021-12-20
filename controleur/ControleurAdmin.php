<?php

class ControleurAdmin
{
    public function __construct()
    {
        global $rep,$vues;

        $TMessages = array();

        try{
            $action=$_REQUEST['action'];

            switch ($action){

                case NULL:
                    $this->Reinit();
                    break;


                case "ValidationFlux":
                    $this->ValidationFlux($TMessages);
                    break;

                case "SupprimmerFlux":
                    $this->SupprimmerFlux($TMessages);
                    break;


                default:
                    $TMessages[] = "Erreur d'appel php";
                    require($rep.$vues['erreur']);
                    break;
            }
        } catch(PDOException $e){
            $TMessages[] = "Erreur inattendue PDO!!! ";
            echo "$e";
            require ($rep.$vues['erreur']);
        } catch (Exception $e2){
            $TMessages[] = "Erreur inattendue!!! ";
            echo $e2;
            require ($rep.$vues['erreur']);
        }
        exit(0);
    }


    function SupprimmerFlux(array $TMessage){

        global $rep, $vues;

        $titre = $_REQUEST['flux'];
        $model = new FluxModel();
        $retour = $model->rem_flux($titre);
        var_dump($retour);

        require ($rep.$vues['vueFlux']);

    }

    function ValidationFlux(array $TMessage){
        global $rep,$vues;

        $titre=$_POST['titre'];
        $description=$_POST['description'];
        $link=$_POST['link'];
        $date=$_POST['date'];
        $lang=$_POST['lang'];
        $titre=Validation::CleanString($titre);
        $link=Validation::CleanString($link);
        $description=Validation::CleanString($description);
        $lang=Validation::CleanString($lang);
        $date=date('Y-m-d', Validation::ValidateDate($date));

        $model = new FluxModel();

        $reussite = $model->set_flux($titre, $description, $link, $date, $lang);
        if($reussite == 0){
            echo "Ajout du flux reussi";
        } else{
            echo "ajout du flux rate";
        }


        require ($rep.$vues['vueFlux']); //A regler
    }


}