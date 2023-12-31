<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid mx-1">
            <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="Logo" style="width:40px;"
                    lass="rounded-pill"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="flashs.php">Flashs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <?php
                        if($_SESSION['loggedin'])
                        {
                            echo '<a href="connexion.php" class="btn btn-outline-secondary">Gestion</a>';
                            echo '<form method="post">';
                            echo '<input type="submit" class="btn btn-outline-secondary mx-3" name="deconnexion" value="Déconnexion">';
                            echo '</form>';
                            if(isset($_POST["deconnexion"]))
                            {
                                session_destroy();
                                header("Location: index.php");
                                exit();
                            }
                        }
                        else
                        {
                            echo '<a href="connexion.php" class="btn btn-primary">Se connecter</a>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </nav>
</body>

</html>