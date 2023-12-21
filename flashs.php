<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Flashs</title>
</head>
<body>
    <?php
        session_start();
        include_once("navbar.php");

        require_once('bdd/ioto.php');
        $stmt = $connexion->prepare("SELECT * FROM flashs");
        $stmt->execute();
        echo '<div class="d-flex">';
        while($enregistrement = $stmt->fetch(PDO::FETCH_OBJ))
        {
            echo '<div class="card text-center border-0" style="width:auto">';
            echo '<img class="card-img-top" src="img/'. $enregistrement->image .'" alt="Image invalide">';
            echo '<div class="card-body">';
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
           /* echo '<img src="img/'. $enregistrement->image .'" alt="Image invalide">';
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
            }*/
        }
        echo '</div>';
    ?>
</body>
</html>