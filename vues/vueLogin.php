<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V8</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="style/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="style/css/util.css">
    <link rel="stylesheet" type="text/css" href="style/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<form method="post" action="index.php?action=">
    <button> Retour </button>
</form>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="index.php?action=Login" method="post">
					<span class="login100-form-title">
						Login
					</span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" name="pseudo" placeholder="Pseudo">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" name="mdp" placeholder="Mot de passe">
                    <span class="focus-input100"></span>
                </div>

                <div class="text-right p-t-13 p-b-23">
						<br>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Se connecter
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Vous n'avez pas de compte ?
						</span>

                    <a href="index.php?action=VueRegister" class="txt3">
                        Creer une compte
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="style/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="style/vendor/bootstrap/js/popper.js"></script>
<script src="style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="style/vendor/daterangepicker/moment.min.js"></script>
<script src="style/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="style/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="style/js/main.js"></script>

</body>
</html>

<!--
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Flux</title>
</head>
<body>
<form action=./vueLogin.php?form="1" method="post">
    <input type="text" name="pseudo" />
    <input type="password" name="mdp" />
    <input type="password" name="mdp2" />
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
<form method="post" action="index.php?action=">
    <button> Retour </button>
</form>

<?php
//   if (isset($_REQUEST['form'])){
//
//        try{
//
//            $ngw = new FluxGateway(new Connection($base, $user, $mdp));
//
//            $i = $ngw->insert($_REQUEST['titre'], $_REQUEST['description'], $_REQUEST['link'], $_REQUEST['date'], $_REQUEST['lang']);
//            echo "Succes d'ajout SSL";
//        }
//        catch (PDOException $e){
//            echo "Erreur SQL";
//        }
//
//
//
//
//    }
?>

</body>

</html>
-->