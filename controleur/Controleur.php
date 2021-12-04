<?php

class Controleur
{

    public function __construct()
    {
        global $rep,$vues;

        session_start();

        $TMessages = array();

        try{
            $action=$_REQUEST['action'];

            switch ($action){

                case NULL:
                    $this->Reinit();
                    break;

                case "validationFormulaire":
                    $this->ValidationFormulaire($TMessages);
                    break;

                default:
                    $TMessages[] = "Erreur d'appel php";
                    require($rep.$vues['index.php']);
                    break;
            }
        } catch(PDOException $e){
            $TMessages[] = "Erreur inattendue!!! ";
            require ($rep.$vues['erreur']);
        } catch (Exception $e2){
            $TMessages[] = "Erreur inattendue!!! ";
            require ($rep.$vues['erreur']);
        }
        exit(0);
    }




    function Reinit(){
        global $rep,$vues;
        //Code fonction reinit

        require ($rep.$vues['vueFlux']);

    }

    function ValidationFormulaire(array $TMessage){



    }

    /* Methodes controleur a mettre
    function ValidationFormulaire(array $TMessages){
        global $rep,$vues;



    }

  */
}


// Pas d'appel gw dans les vues; pas d'appel validation dans les gw (c'est dans le controleur), modifier la vue d'erreur pour qu'elle s'adapte au style
