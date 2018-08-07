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
          </div>

        <div id="menu1" class="tab-pane fade">
          <h3>Entreprises(4)</h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>

      </div>
</div>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
