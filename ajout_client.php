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
    <?php
    // $dbh = new PDO('mysql:host=localhost;dbname=CRM2', 'admin', 'plop');
    $dbh = new PDO ('mysql:host=localhost;dbname=crm2','admin', 'xu10j4rs');
    if (isset($_POST['name']) && isset($_POST['fname']) && isset($_POST['address']) && isset($_POST['societe'])){
        $name=$_POST['name'];
        $fname=$_POST['fname'];
        $address=$_POST['address'];
        $societe=$_POST['societe'];
        $insertLine = $dbh->prepare("INSERT INTO 'client' VALUES (NULL, '$name', '$fname', '$address', '$societe')");
        $insertLine->execute();
        echo $name;
        echo $fname;
        echo $address;
        echo $societe;

    }
    // if (isset($_POST['name'])&&(isset($_POST['fname'])&&(isset($_POST['address'])&&(isset($_POST['societe']))){
    //     $name=$_POST['name'];
    //     $fname=$_POST['fname'];
    //     $address=$_POST['address'];
    //     $societe=$_POST['societe'];
    //     // echo $denomination." ".$address;
    //     $insertLine = $dbh->prepare("INSERT INTO `client` (`id`, `nom`, `prenom`, `adresse`,`entreprise_id`)VALUES (NULL, '$name', '$fname', '$address', '$societe')");
    //     $insertLine->execute();
    // }

    ?>
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
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="name" name="name">
                <input type="text" class="form-control" id="fname" placeholder="fname" name="fname">
                <input type="text" class="form-control" id="address" placeholder="address" name="address">
                <input type="text" class="form-control" id="societe" placeholder="societe" name="societe">
            </div>

            <button type="submit" name="button" class="btn btn-default">Enregistrer</button>
        </form>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</body>
