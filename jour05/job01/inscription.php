<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- librairie jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <!-- appel de mon script   -->
    <script src="script.js"></script>
    <title>inscription</title>
</head>
<body>
<?php
    require "traitement/traitement-inscription.php"
 ?>   
    <main>
        <form action="" method="post">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom">
            <p></p>

            <label for="prenom">Prénom:</label>
            <input type="text" name="prenom" id="prenom">
            <p></p>

            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">
            <p></p>

            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password">
            <p></p>

            <label for="password2">Répétez le mot de passe:</label>
            <input type="password" name="password2" id="password2">
            <p></p>

            <button type="submit">Valider</button>
        </form>
    </main>
</body>
</html>