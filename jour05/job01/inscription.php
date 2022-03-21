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
        
            var_dump($_SESSION);

        if(isset($_SESSION))
        {
            header("location:index.php");
            exit();
        }
        elseif(!empty($_POST))
        {
            require 'Classe/ClassConnect.php';
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            var_dump($password2);

            if(isset($nom, $prenom, $email, $password) && !empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && $password == $password2)
            {
                $user = new User();
                $user->register($nom, $prenom, $email, $password);
                header('location: connexion.php');
                exit();
            }
            elseif(isset($nom, $prenom, $email, $password)&& !empty($login) && !empty($email) && !empty($password) && $password != $password2)
            {
                echo "Les mots de passe ne sont pas identiques, veuillez recommencer ";
            }
        }
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