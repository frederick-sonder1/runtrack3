<?php
class User 
{
    
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public $password2;
    
    public function __construct()
    {
        
    }

    public function register($nom, $prenom, $email, $password)
    {
        
        $this->nom  = $nom;
        $this->prenom  = $prenom;
        $this->email    = $email;
        $this->password = $password;
        

        if(isset($this->nom) && isset($this->prenom) && isset($this->email) && isset($this->password))
        {
            $host = "localhost";
            $dbname = "utilisateur";
            $this->password = password_hash($this->password, PASSWORD_DEFAULT);

            $selectQ = "SELECT * FROM utilisateurs WHERE email='$this->email'";
            $insertQ = "INSERT INTO utilisateurs(nom, prenom, email, password) VALUES ('$this->nom', '$this->prenom', '$this->email', '$this->password')";

            try 
            {
                $connexion = new PDO(
                    "mysql:host=".$host.";dbname=".$dbname.";charset=utf8",
                    "root",
                    ""
                );
            }
            catch(Exception $e)
            {
                die("Erreur: ".$e->getMessage());
            }

            $preparation = $connexion->prepare($selectQ);
            $preparation->execute();
            $fetch = $preparation->fetchAll();
            var_dump($fetch);

            if(!empty($fetch))
            {
                echo "Cette adresse e-mail est déja utiulisée.";
            }
            else
            {
                $preparation = $connexion->prepare($insertQ);
                $preparation->execute();
            }
        }
        else
        {
            echo 'erreur:veuillez recommencer';
            return;
        }
    }

    public function connect($email, $password)
    {
        $host = "localhost";
        $dbname = "utilisateur";

        $connexion = new PDO(
            "mysql:host=".$host.";dbname=".$dbname.";charset=utf8",
            "root",
            ""
        );

        $slctconn = "SELECT * FROM `utilisateurs` WHERE email = ?";
        $stmt=$connexion->prepare($slctconn);
        $stmt->bindValue(1, $email, PDO::PARAM_STR);
        $stmt->execute();
        $reuser=$stmt->fetchAll();

        
        if (count($reuser) > 0)
        {
            if(password_verify($password,$reuser[0]['password']) || $password==$reuser[0]['password'])
            {
                $_SESSION["utilisateur"]=
                [
                    'id'=>$reuser[0]['id'],
                    'nom'=> $reuser[0]["nom"],
                    'prenom'=>  $reuser[0]["prenom"],
                    'email' => $reuser[0]["email"],
                    'password'=> $reuser[0]["password"],
                ];
            }
            else
            {
                echo "mot de passe incorrect!";
            }
        }
        else
        {
            echo "Utilisateur inconnu, veuillez vous inscrire";
        }    
    }
}
?>