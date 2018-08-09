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
        <h2>Mise à jour de Thibault</h2>
        <form action="">
            <div class="form-group">
                <input type="text" class="form-control" id="fname" placeholder="fname" name="fname">
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
                <input type="text" class="form-control" id="address" placeholder="address" name="address">
                <input type="text" class="form-control" id="societe" placeholder="societe" name="societe">
            </div>

            <button type="submit" class="btn btn-default">Enregistrer</button>
        </form>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</body>
