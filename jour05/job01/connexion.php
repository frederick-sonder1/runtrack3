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
    <title>connexion</title>
</head>
<body>
    <main>
        <form action="" method="post">

            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email">

            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password">

            <button type="submit">Valider</button>
        </form>
    </main>
 <?php
    require "traitement/traitement-connexion.php"
 ?>

</body>
</html>