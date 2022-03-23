<!--
Ajoutez une section avec un formulaire de création de compte contenant :
- Des inputs radios pour la civilité
- Des inputs de type text pour prénom, nom et adresse
- Des inputs de type email pour l’adresse email
- Des inputs de type password pour le password et sa validation
- Des checkbox pour choisir ses passions (informatique, voyages, sport,
lecture)
- Un bouton pour valider le formulaire -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
        </nav>
    </header>
    <main>
        <div class="row">
            <form class="col s12">
            <div class="row ">
            <p>
                <label>
                    <input name="group1" type="radio" checked />
                        <span>Monsieur</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="group1" type="radio" />
                    <span>Madame</span>
                </label>
            </p>
            <p>
                <label>
                    <input class="with-gap" name="group1" type="radio"  />
                    <span>Ne se prononce pas</span>
                </label>
            </p>
            </div>
              <div class="row">
                <div class="input-field col s5">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Prénom</label>
                </div>
                <div class="input-field col s5">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Nom</label>
                </div>
                <div class="row">
                    <div class="input-field col s10">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row"> 
                <div class="input-field col s10">
                  <input id="adresse" type="text" class="validate">
                  <label for="adresse">Adresse</label>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s10">
                <input id="password" type="password" class="validate">
                  <label for="password">password</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s10">
                  <input id="password2" type="password" class="validate">
                  <label for="password2">Repeat Password</label>
                </div>
              </div>
              
              <div class="row">
                <div class="col s12">
                  This is an inline input field:
                  <div class="input-field inline">
                    <input id="email_inline" type="email" class="validate">
                    <label for="email_inline">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                  </div>
                </div>
              </div>
            </form>
        </div>
    </main>
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <ul>
                  <li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
                  <li><a class="grey-text text-lighten-3" href="index.php">Rechercher</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
</body>
</html>