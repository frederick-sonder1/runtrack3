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