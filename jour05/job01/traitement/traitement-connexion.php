<?php 
         session_start();
        require ('Classe/ClassConnect.php');
        $user= new User();
        var_dump($_SESSION);

        if(!empty($_POST['email']) && ! empty($_POST['password']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user->connect($email,$password);

            if(!empty($_SESSION["utilisateur"]) && isset($_SESSION["utilisateur"]))
            {
                header('Location: index.php');
                exit();
            }
            else
            {
                echo "une erreur est survenue, veuillez recommencer";
            }
        }
    ?>