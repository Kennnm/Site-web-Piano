<?php
include 'connexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-secondary">

    <!-- Création Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand h1 text-white" href="index.php">
                <img src="img/piano-logo.jpg" alt="Logo Piano" width="35" height="30" class="d-inline-block align-text-top">
                Accueil</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                
                <span class="navbar-toggler-icon">
                <!-- Modification de l'icon "hamburger" -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
                </span>

            </button>
            <div class="collapse navbar-collapse" id="menu">
                <div class="navbar-nav">
                    <a class="navbar-brand h1 text-white" aria-current="page" href="#">Blog</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Titre -->
    <div class="h1 text-center text-muted" id="texth1">KENJI PIANO</div>

    <!-- Vidéos main page -->

    <div class="container">
        <div class="row">
            <?php foreach ($videos as $video): ?>
                <div class="col-12 col-md-6 mb-5 mt-4 text-center">
                    <h2 class="align-text-top"><?php echo $video['title'];?></h2>
                    <p class="align-text-top"><?php echo $video['description'];?></p>
                    <div class="text-center">
                        <video class="img-fluid border border-5 border-dark rounded-4" width="280" height="100" controls>
                            <source src="<?= $video['chemin'] ?><?= $video['filename']; ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="text-center mt-5">
        <button class="btn">
            <a href="#page2">
                <svg xmlns="http://www.w3.org/2000/svg" height="70" width="70" fill="white" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                <br>
                <br>
                <br>
            </a>
        </button>
    </div>
    
    <p id="page2">tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p><br>
    <p>tret</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

