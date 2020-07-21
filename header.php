<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="La règlementation ADR vous concerne. LP Conseil Sécurité vous accompagne sur les obligations règlementaires.">
  <meta name="author" content="Pascal LEONARD">
  <meta name="google-site-verification" content="4VooK5DlrTTonmCxhfJwza_2Ca3Wf6ap0FlXZRer6AI" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="img/favicon.ico" type="image/ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/site.webmanifest">
  <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="img/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="img/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">


  
  <title>LPConseilSecurite</title>

  <!-- Bootstrap CDN CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Font awesome -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Feuille css custom -->
  <link rel="stylesheet" href="css/custom.css">

</head>

<body>

  <header class="site-heading text-center d-none d-lg-block">
    <h1>
      <a href="index.php">
        <img src="img/lp.png" alt="logo">
      </a>
    </h1>
  </header>
  <?php
    // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
  $page = $_SERVER['REQUEST_URI'];
  $page = str_replace("/", "",$page);
  ?> 

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php"><img src="img/lp-phone.png" alt="phone-logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li <?php if($page == ""){echo 'class="nav-item active px-lg-4"';} else echo 'class="nav-item px-lg-4"'?>>
            <a class="nav-link text-uppercase text-expanded" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li <?php if($page == "why.php"){echo 'class="nav-item active px-lg-4"';} else echo 'class="nav-item px-lg-4"'?>>
            <a class="nav-link text-uppercase text-expanded" href="why.php">Pourquoi un conseiller sécurité</a>
          </li>
          <li <?php if($page == "quiz.php"){echo 'class="nav-item active px-lg-4"';} else echo 'class="nav-item px-lg-4"'?>>
            <a class="nav-link text-uppercase text-expanded" href="quiz.php">Quiz</a>
          </li>
          <li <?php if($page == "contact.php"){echo 'class="nav-item active px-lg-4"';} else echo 'class="nav-item px-lg-4"'?>>
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
