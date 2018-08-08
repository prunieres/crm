<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">My mini CRM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Listing <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajout_client.php">Ajouter clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ajout_entr.php">Ajouter entreprises</a>
                    </li>
                </ul>
            </div>
        </nav>


        <h1>Listing clients/Entreprises</h2>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#clients">Clients(3)</a></li>
            <li><a data-toggle="tab" href="#entreprise">Entreprises(4)</a></li>
        </ul>

        <div class="tab-content">
            <div id="clients" class="tab-pane active">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recherche" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button>Search</button>
                    <button>Reset</button>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Thibault de Tourdonnet
                        </button>
                      </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                                <h2>Thibault de Tourdonnet</h2>
                                <p>10 place de la republique</p>
                                <a href="#">Codi'n Camp</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Alban Thiber</button>
                      </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                                <h2>Alban Thiber</h2>
                                <p>25 place de la republique</p>
                                <a href="#">Irish Pub</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Toto Youpi
                        </button>
                      </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                                <h2>Toto Youpi</h2>
                                <p>8 place de la republique</p>
                                <a href="#">Codi'n Camp</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div id="home" class="tab-pane fade in active"> -->

            <div id="entreprise" class="tab-pane">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recherche" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button>Search</button>
                    <button>Reset</button>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Num'n Coop
                        </button>
                      </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                                <h2>Num'n Coop</h2>
                                <p>10 place de la republique</p>
                                <ul>
                                    <li>
                                        <a href="#">Codi'n Camp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="card"> -->

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Conseil Départemental de la Lozère</button>
                      </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                                <h2>Conseil Départemental de la Lozère</h2>
                                <p>10 place de la republique</p>
                                <ul>
                                    <li>
                                        <a href="#">Conseil Départemental de la Lozère</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Mairie de Mende
                        </button>
                      </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <img class="card-img-top" src="http://via.placeholder.com/150x150" alt="Card image cap">
                                <h2>Mairie de Mende</h2>
                                <p>10 place de la republique</p>
                                <ul>
                                    <li>
                                        <a href="#">Mairie de Mende</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div id="menu1" class="tab-pane fade"> -->
            </div>
            <!-- <div class="tab-content"> -->
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>




</body>

</html>
