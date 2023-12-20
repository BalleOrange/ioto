<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Ioto.ta.2</title>
</head>
<body class="test">
    <div class="row">
        <?php include_once("navbar.html"); ?>
    </div>
    <div class="row d-flex">
        <div class="col-md-7 col-12">
            <h1>Bienvenue chez ioto.ta.2</h1>
            <p>Découvrez ioto.ta.2, un sanctuaire artistique où l'expression corporelle devient une œuvre d'art.<br> Chez nous, chaque trait raconte une histoire, chaque motif incarne une vision unique.</p>
            <br><a href="a-propos.html" class="btn btn-primary">En savoir plus</a>
        </div>
        <div class="col-md-5 col-12">
            <img src="img/interieur.jpg" alt="" style="max-width: 400px; max-height: 300px;">
        </div>
    </div> 
    <div class="row bg-dark text-center justify-content-center">
        <br>
        <h1 class="text-light">Dernières créations</h1>
        <div class="col-md-4 col-4 mb-3">
                <img src="img/1.jpg" alt="" class="img-fluid" style="max-width: 90%;">
            </div>
            <div class="col-md-4 col-4 mb-3">
                <img src="img/2.jpg" alt="" class="img-fluid" style="max-width: 90%;">
            </div>
            <div class="col-md-4 col-4 mb-3">
                <img src="img/3.jpg" alt="" class="img-fluid" style="max-width: 90%;">
            </div>
        <div class="mb-4"></div>
    </div>
</body>
</html>