<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Acceuil</title>
</head>
<body>
    <?php
        session_start();
        var_dump($_SESSION);

        if(!empty($_SESSION))
        {
            echo "bonjour ".$_SESSION['utilisateur']['prenom'].", bienvenue"; 
            echo "<a href='deconnexion.php'>Déconnexion</a>";
        }
        elseif(empty($_SESSION))
        {
            echo "<a href='inscription.php'>Inscription</a>";
            echo "<a href='connexion.php'>Connexion</a>";
        }
    ?>
    
</body>
</html>