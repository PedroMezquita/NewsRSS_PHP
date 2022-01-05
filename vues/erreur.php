<!DOCTYPE html>
<html>
<head>
    <title>
        Erreur
    </title>
    <link rel="stylesheet" type="text/css" href="style/css/table.css">
</head>
<body>
<?php
echo "<div class='container'><div class='tWrap'><div class='tWrap__head'><table><thread><th>Erreur</th></thread></tr><tbody>";
foreach ($TMessages as $value){
    echo "<br> <h3> Erreur : $value </h3> ";
}
echo "</tbody></table></div></div></div>";

?>
</body>