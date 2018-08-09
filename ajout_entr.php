<!DOCTYPE html>
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
    $dbh = new PDO ('mysql:host=localhost;dbname=crm2','admin', 'xu10j4rs');

    if (isset($_POST['denomination'])&&(isset($_POST['address']))){
        $denomination=$_POST['denomination'];
        $address=$_POST['address'];
        echo $denomination." ".$address;
    }

    ?>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <h1>Notre super CRM</h1>
            <ul>
                <li><a href="index.php">Listing</a></li>
                <li><a href="ajout_client.php">Ajouter clients</a></li>
                <li><a href="ajout_entr.php">Ajouter entreprises</a></li>
            </ul>
        </nav>
        <h2>Ajouter une nouvelle entreprise</h2>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="denomination" placeholder="Dénomination" name="denomination">
                <input type="text" class="form-control" id="address" placeholder="Adresse complète" name="address">
            </div>

            <button type="submit" name="button" class="btn btn-default">Enregistrer</button>

        </form>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js" crossorigin="anonymous"></script>
</body>
