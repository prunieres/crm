<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <h1>Notre super CRM</h1>
        <ul>
            <li><a href="">Listing</a></li>
            <li><a href="">Ajouter clients</a></li>
            <li><a href="">Ajouter entreprises</a></li>
        </ul>
    </nav>
    <h2>Listing clients/Entreprises</h2>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Clients(3)</a></li>
            <li><a data-toggle="tab" href="#menu1">Entreprises(4)</a></li>
        </ul>

      <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
              <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Recherche" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <button>Search</button>
                  <button>Reset</button>
              </div>
                  <div class="accordion" id="accordionExample">
                      <div class="card">
                          <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                          <h3 class="card title">toto yoyupi</h3>
                          <p>3rue de la tour carre</p>
                          <a href="#">Irish Pub</a>
                      </div>
                      <div class="card">
                          <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                          <h3 class="card title">tata yoyo</h3>
                          <p>3rue de la place ronde</p>
                          <a href="#">la taverne</a>
                      </div>
                      <div class="card">
                          <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
                          <h3 class="card title">tutu maurice</h3>
                          <p>3rue du stade</p>
                          <a href="#">agro service</a>
                      </div>
                  </div>
            </div>
        </div> <!-- tab-content -->

        <div id="menu1" class="tab-pane fade">
          <h3>Entreprises(4)</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

    </div>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
