<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <title>le péage une nouvelle dynamique !</title> <!-- à définir-->

</head>
<body>
<header>
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark ">
        <!--<h2 class="hashTag"> # AvecSebastienCourion</h2> à mettre si besoin-->
        <a class="navbar-brand col-5" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarNav">
            <a href="/"><img id="logoNav" class='logoNav' src="assets/images/LOGO_gris_dec%20.png" alt="logo du péage de roussillon"></a>
            <ul class="navbar-nav">
                <li class="nav-item active ">
                    <a id='colorTitleNav' class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Le projet
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="laVille.php">La ville</a>
                        <a class="dropdown-item" href="mobilite.php">Mobilités & écologie</a>
                        <a class="dropdown-item" href="economie.php">Economie et emploi</a>
                        <a class="dropdown-item" href="mieuxVivre.php">Mieux vivre ensemble</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="Equipe.php">L'équipe</a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href=<?php if ($_SERVER['REQUEST_URI']=='/'){ echo"#contact";} else{echo "/#contact";} ?>>Rejoignez-nous<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!--     //var_dump($_SERVER['REQUEST_URI']);
//    $mobilite = '/mobilite.php';
//    $ville = '/ville.php';
//    $economie = '/economie.php';
//    $mieuxVivre = '/mieuxVivre.php';-->
