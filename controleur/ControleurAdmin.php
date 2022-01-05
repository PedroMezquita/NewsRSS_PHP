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


                case "AjoutFlux":
                    $this->AjoutFlux($TMessages);
                    break;


                case "SupprimmerFlux":
                    $this->SupprimmerFlux($TMessages);
                    break;

                case "Register":
                    $this->Register($TMessages);
                    break;

                case "Deconnecter":
                    $this->Deconnecter();
                    break;

                case "Login":
                    $this->Login($TMessages);
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

    /*Nom: SupprimmerFlux
     * Parametres: array $TMessage
     * Retourne: int
     * Ceci ajoute un administrateur dans la basse de données
     *
     */
    function SupprimmerFlux(array $TMessage){

        global $rep, $vues;
        if (isset($_SESSION['sessionUser'])) {
            $titre = $_REQUEST['flux'];
            $model = new FluxModel();
            $retour = $model->rem_flux($titre);
            if($retour != 0){
                $TMessage = $retour;
                require ($rep.$vues['erreur']);
            }

            require($rep.$vues['vueFlux']);
        }
        else{
            echo "Vous devez etre administrateur pour supprimer un flux";
            require ($rep.$vues['vueLogin']);
        }
    }

    function ValidationFlux($titre, $description, $link, $date, $lang){
        global $rep,$vues;
        $titre=Validation::CleanString($titre);
        $link=Validation::CleanString($link);
        $description=Validation::CleanString($description);
        $lang=Validation::CleanString($lang);
        $date=date('Y-m-d', Validation::ValidateDate($date));

        $model = new FluxModel();

        $reussite = $model->set_flux($titre, $description, $link, $date, $lang);
        if($reussite != 0){
            echo "ajout du flux rate";
        }
    }

    function ValidationNews($news){
        global $rep,$vues;

        $titre = $news->getTitre();
        $description = $news->getDescription();
        $link = $news->getLink();
        $date = $news->getDate();


        $titre=Validation::CleanString($titre);
        $link=Validation::CleanString($link);
        $description=Validation::CleanString($description);
        $date=date('Y-m-d', Validation::ValidateDate($date));

        $model = new NewsModel();

        $reussite = $model->set_News($news);
        if($reussite != 0){
            echo "ajout des news rate";
        }
    }


    function Deconnecter(){
        global $rep, $vues;
        unset($_SESSION['sessionUser']);
        require ($rep.$vues['vueLogin']);
    }




    function AjoutFlux(array $TMessage){
        global $rep, $vues;
        if (isset($_SESSION['sessionUser'])) {

            $url = $_REQUEST['link'];
            $url=Validation::CleanString($url);
            $Parser = new Parser();
            $AllFlux = $Parser->parser($url);
            $date = date("Y-m-d");

            $this->ValidationFlux($AllFlux['FluxTitre'], $AllFlux['FluxDescription'], $AllFlux['FluxLink'], $date, $AllFlux['FluxLang']);

            foreach($AllFlux['AllNews'] as $news){
                $this->ValidationNews($news);
            }

            require($rep.$vues['vueFlux']);
        }
        else{
            echo "Vous devez etre administrateur pour ajouter un flux";
            require ($rep.$vues['vueLogin']);
        }
        require ($rep.$vues['vueFlux']);
    }





    function Register(array $TMessage){

        global $rep, $vues;

        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        $mdp2 = $_POST['mdp2'];

        if ($mdp != $mdp2){
            echo "Les mot de passe sont differents";
            require ($rep.$vues['vueRegister']);
        }
        else {
            $pseudo = Validation::CleanString($pseudo);
            //Mot de passe ne sera jamais affiché et il sera automatiquement hash donc on ne le valide pas
            $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);
            $model = new AdminModel();
            try {
                $reussite = $model->set_admin($pseudo, $mdpHash);
                var_dump($reussite);

                if ($reussite == 0){
                    echo "Creation du compte reussite";
                }
                else{
                    echo "Erreur lors la creation de la compte";
                }


            }catch (PDOException $e){
                echo "erreur pdo";
            }
            require($rep . $vues['vueLogin']);

        }
    }


    function Login(array $TMessage){
        global $rep, $vues;

        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'];
        $pseudo = Validation::CleanString($pseudo);
        $model = new AdminModel();

        $admin = $model->get_admin($pseudo);
        if ($admin == NULL){
            echo "Utilisateur inconnu";
            require ($rep.$vues['vueLogin']);
        }
        elseif (!password_verify($mdp, $admin->getMdp())){
            var_dump($admin->getMdp());
            var_dump($mdp);
            echo "Mdp incorrect";
            require ($rep.$vues['vueLogin']);
        }
        else{
            echo "Connexion reussite";
            $_SESSION['sessionUser'] = $pseudo;
        }
    }



}