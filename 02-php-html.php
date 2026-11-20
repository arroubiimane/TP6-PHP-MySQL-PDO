
<?php

$nom = "Imane";
$age = 20;
$ville = "Marrakech";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>

<body>

    <h1>Mon profil</h1>

    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>

    <p>
        Vous habitez à
        <?php echo $ville; ?>
    </p>

    <h2>Bienvenue sur ma page PHP</h2>

</body>

</html>
