<?php

class FrontController
{

    function __construct(){
        $listeActions_Vues = array("VueFlux", "VueLogin", "VueAjoutFlux", "Parser", NULL);

        try{
            $action = $_REQUEST['action'];
            if (in_array($action, $listeActions_Vues)){
                $ctrV = new ControleurVues();
            }

        } catch (Exception $e){global $rep, $vues; require ($rep.$vues['erreur']);}


    }
}