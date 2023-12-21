<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="test.js"></script>
    <title>Flashs</title>
</head>
<body class="test text-center">
    <?php
        session_start();
        include_once("navbar.php");

        require_once('bdd/ioto.php');
        $stmt = $connexion->prepare("SELECT * FROM flashs");
        $stmt->execute();
        echo '<h1 class="text-decoration-underline">Flashs disponibles</h1><br>';
        echo '<div class="row justify-content-center">';
        while($enregistrement = $stmt->fetch(PDO::FETCH_OBJ))
        {
            echo '<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">'; // Utilisation de différentes classes de colonnes pour les écrans de différentes tailles
            echo '<div class="card text-center border-0">';
            echo '<img class="card-img-top flashs" src="img/'. $enregistrement->image .'" alt="Image invalide" onclick="agrandirImage(this)">';
            echo '<div class="modal" onclick="masquerAgrandi(this)">';
            echo '<img src="img/'. $enregistrement->image .'" alt="Invalide" class="imageAgrandie">';
            echo '</div>';
            echo '<div class="card-body">';
            echo '<p>Prix : '. $enregistrement->prix .' €</p>';
            if(isset($_SESSION['loggedin']))
            {
                echo '<form method="post">';
                echo '<input type="submit" class="btn btn-outline-secondary" name="supprimer_'.$enregistrement->numero.'" value="Supprimer">';
                echo '</form>';
                if(isset($_POST["supprimer_$enregistrement->numero"]))
                {
                    $stmt = $connexion->prepare("DELETE FROM flashs WHERE numero =:numero");
                    $stmt->bindParam(":numero", $enregistrement->numero);
                    $stmt->execute();
                    header("Location: flashs.php");
                    exit();
                }
            }
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    ?>
</body>
</html>