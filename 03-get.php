
<?php

$nom = "";
$ville = "";

if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
}

if (isset($_GET["ville"])) {
    $ville = $_GET["ville"];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GET avec PHP</title>
</head>

<body>

    <h1>Exemple avec GET</h1>

    <?php

    if ($nom != "") {

        echo "<p>Bonjour " . htmlspecialchars($nom) . "</p>";

    } else {

        echo "<p>Aucun nom reçu.</p>";

    }

    if ($ville != "") {

        echo "<p>Votre ville est : " . htmlspecialchars($ville) . "</p>";

    }

    ?>

</body>
</html>
