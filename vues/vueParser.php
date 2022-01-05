<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Flux</title>
</head>
<body>
<form action="index.php?action=AjoutFlux" method="post">
    <label for="Link">Lien flux RSS</label>
    <input type="url" id="Link" name="link" />
    <div>
        <button type="submit">Envoyer</button>
    </div>
</form>
<form method="post" action="index.php?action=VueFlux">
    <button> Retour </button>
</form>

</body>

</html>