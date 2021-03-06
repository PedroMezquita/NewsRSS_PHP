<?php

class ControleurVues
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

                case "VueFlux":
                    $this->vueFlux();
                    break;

                case "VueLogin":
                    $this->vueLogin();
                    break;

                case "VueRegister":
                    $this->vueRegister();
                    break;

                case "ValidationFlux":
                    $this->ValidationFlux($TMessages);
                    break;
                case "VueAjoutFlux":
                    $this->VueAjoutFlux();
                    break;

                default:
                    $TMessages[] = "Erreur d'appel php";
                    require($rep.$vues['erreur']);
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

        //Code fonction reinit
        $this->getNews();
    }

    function getNews(){
        global $rep,$vues,$TMessage;
        if(isset($_REQUEST['max'])){
            $max = $_REQUEST['max'];
            $min = $max-10;
        }else{
            $max = 10;
            $min = 0;
        }
        if($min < 0){
            $max = 10;
            $min = 0;
        }
        $model = new NewsModel();


        $news = $model->get_News($max, $min);
        require ($rep.$vues['vueNews']);

    }



    function vueFlux(){
        global $rep,$vues;
        $model = new FluxModel();
        $tabFlux = $model->get_flux();

        require ($rep.$vues['vueFlux']);

    }

    function  vueLogin(){
        global $rep, $vues;
        require ($rep.$vues['vueLogin']);

    }


    function  vueRegister(){
        global $rep, $vues;
        require ($rep.$vues['vueRegister']);
    }

    function vueAjoutFlux(){
        global $rep, $vues;
        require ($rep.$vues['parser']);
    }









    /* Methodes controleur a mettre
    function ValidationFormulaire(array $TMessages){
        global $rep,$vues;



    }

  */
}


// Pas d'appel gw dans les vues; pas d'appel validation dans les gw (c'est dans le controleur), modifier la vue d'erreur pour qu'elle s'adapte au style
