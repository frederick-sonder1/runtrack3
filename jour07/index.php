<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- lien css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- lien js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <title>Document</title>
</head>
<body class="bg-secondary bg-opacity-25">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LPTF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://laplateforme.io/">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Units</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Skills</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="row display-1 ">
            <h6 class="display-1 text-center">LaPlateforme_</h6>
    </div>
    
    <div class="row p-2 m-3 d-flex justify-content-around align-items-stretch">
        <div class="card col-2 p-2" style="width: 18rem;">
            <img src="papillon.jpg" class="card-img-top" alt="image papillon">
            <div class="card-body">
                <h5 class="card-title">Un papillon</h5>
                <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailles.</p>
                <p class="card-text">Ne pas ingerer</p>            
                <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">Commander votre propre papillon</a>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Validation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               Voulez-vous vraiment acheter ce papillon?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non</button>
                                <button type="button" class="btn btn-primary">Oui</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="card col-8 p-3  m-3 bg-secondary">
            <h1>Bonjour, monde!</h1>
            <p>Il existe plusieur vision du terme</p>
            <p>Le monde est la matiere, l'espace et les phénomènes qui nous sont accessibles par les sens, l'experience ou la raison</p>
            <p>Le sens le plus courant designe notre planete, la Terre, avec ses habitants, et son environnement plus ou moins naturel</p>
            <p></p>
            <p>Le sens etendu designe l'univers dans son ensemble</p>
            <div>
            <button class="btn btn-danger col-2" id="btnrbt">Rebooter le Monde</button>
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-1  m-3 bg-white">
            <table class="table table-striped ">
                <td class="row">Limbe</td>
                <td class="row text-center">Luxure</td>
                <td class="row text-center">Gourmandise</td>
                <td class="row text-center">Avarive</td>
                <td class="row text-center">Colere</td>
                <td class="row text-center">Heresie</td>
                <td class="row text-center">Violence</td>
                <td class="row text-center">Ruse et Tromperie</td>
                <td class="row text-center">Trahison</td>
                <td class="row text-center">Internet Explorer</td>
            </table>
        </div>

    </div>
    <div class= 'row justify-content-center'>
        <div class="col-6 ">
            <h5 class= "row justify-content-end">installation de AI 9000</h5>
            <div class="progress mx">
                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-evenly">
    <div class=" col-4 m-4">
        
        <div class="col-5">
            </div><h4>Recevez votre copie gratuite d'internet 2!</h4>
            <div class="input-group mb-3 c">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="mail" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>

            <label for="basic-url" class="form-label">Url des internets 2et 2.1 Beta</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">DogeCoin</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
            
        </div>    
    </div>

    <div class="col-4 m-4 d-flex  flex-column align-items-end">
        
       
            
        <div class="input-group mb-3 flex-column align-items-end"">
            <label >Email Adresse
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        
        <div class="input-group mb-3 flex-column align-items-end"">
            <label>Password</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>          
       
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Check me out</label>
        </div>

        <div>
            <a href="#" class="btn btn-primary ">Submit</a>
        </div>
    </div>
</div>
</body>
</html>