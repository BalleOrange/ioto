<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Connexion</title>
</head>
<body>
    <?php
        session_start();
        include_once("navbar.php");

        if(!isset($_POST["connexion"]))
        {
        echo '<div class="row justify-content-center text-center">';
        echo '<div class="col-md-3">';
        echo '<h2>Se connecter</h2>';
        echo '<p>Vous devez avoir un compte administrateur</p>';
        if(isset($_SESSION['erreur_connexion']))
        {
            echo '<p class="text-danger">' . $_SESSION['erreur_connexion'] . '</p>';
            unset($_SESSION['erreur_connexion']);
        }
        echo '<form method="post">';
        echo '<p>Identifiant</p>';
        echo '<input type="text" class="form-control" name="identifiant"><br><br>';
        echo '<p>Mot de passe</p>';
        echo '<input type="password" class="form-control" name="pswd"><br><br>';
        echo '<input type="submit" class="btn btn-outline-secondary" name="connexion" value="Connexion">';
        echo '</form>';
        echo '<div>';
        echo '<div>';
        }
        else
        {
            require_once('bdd/ioto.php');
                
            $stmt = $connexion->prepare("SELECT * FROM administrateur WHERE utilisateur=:id AND motdepasse=:motdepasse");
            $stmt->bindParam(':id', $_POST['identifiant']);
            $stmt->bindParam(':motdepasse',  $_POST['pswd']);
            $stmt->execute();
                
            $enregistrement = $stmt->fetch(PDO::FETCH_OBJ);
                
            if ($enregistrement) 
            {
                $_SESSION['nom'] = $enregistrement->nom;
                $_SESSION['prenom'] = $enregistrement->prenom;
                $_SESSION['utilisateur'] = $enregistrement->utilisateur;
                $_SESSION['loggedin'] = true;
            
                header("Location: index.php");
                exit();
            }
            else
            {
                $_SESSION['loggedin'] = false;
                $_SESSION['erreur_connexion'] = "Identifiants incorrects. Veuillez réessayer.";
            
                header("Location: connexion.php");
                exit();
            }
        }
    ?>
</body>
</html>