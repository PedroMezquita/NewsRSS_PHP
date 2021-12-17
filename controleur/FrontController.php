<?php

class FrontController
{

    function __construct(){
        $listeActions_Vues = array("VueFlux", "VueLogin", "VueAjoutFlux", "Parser", NULL);
        $listeActions_Admin = array("Login", "ValidationFlux");

        session_start();

        try{
            $action = $_REQUEST['action'];
            if (in_array($action, $listeActions_Vues)){
                $ctrV = new ControleurVues();
            }
            elseif (in_array($action, $listeActions_Admin)){
                $ctrA = new ControleurAdmin();
            }

        } catch (Exception $e){global $rep, $vues; require ($rep.$vues['erreur']);}


    }
}