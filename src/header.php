<?php
// Page courante, déduite de l'URL (sans slash, sans ?paramètres, sans .php)
$page = basename((string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH));
$page = preg_replace('/\.php$/', '', $page);
if ($page === 'index') {
  $page = '';
}

// Le menu : pour ajouter une page, ajouter une ligne ('adresse' => 'Texte du lien')
$menu = [
  ''        => ['url' => 'index',   'libelle' => 'Accueil'],
  'why'     => ['url' => 'why',     'libelle' => 'Pourquoi un conseiller sécurité'],
  'quiz'    => ['url' => 'quiz',    'libelle' => 'Quiz'],
  'contact' => ['url' => 'contact', 'libelle' => 'Contact'],
];

// Titre de l'onglet : "Quiz - LPConseilSecurite" (rien devant pour l'accueil)
$titreOnglet = ($page !== '' && isset($menu[$page])) ? $menu[$page]['libelle'] . ' - ' : '';

// Description : chaque page peut la définir avant d'inclure ce fichier ($description = "...";)
$description = $description ?? "La règlementation ADR vous concerne. LP Conseil Sécurité vous accompagne sur les obligations règlementaires.";

// Numéro de version du CSS (date de modification) : évite le cache après une modification
$versionCss = @filemtime(__DIR__ . '/css/custom.css') ?: 1;
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
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

  <title><?= htmlspecialchars($titreOnglet, ENT_QUOTES, 'UTF-8') ?>LPConseilSecurite</title>

  <!-- Bootstrap CDN CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Font awesome -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--Feuille css custom -->
  <link rel="stylesheet" href="css/custom.css?v=<?= $versionCss ?>">

</head>

<body>

  <header class="site-heading text-center d-none d-lg-block">
    <div>
      <a href="index">
        <img src="img/lp.png" alt="LP Conseil Sécurité - accueil">
      </a>
    </div>
  </header>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index"><img src="img/lp-phone.png" alt="LP Conseil Sécurité - accueil"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
<?php foreach ($menu as $cle => $lien): ?>
          <li class="nav-item px-lg-4<?= $cle === $page ? ' active' : '' ?>">
            <a class="nav-link text-uppercase text-expanded" href="<?= $lien['url'] ?>"><?= htmlspecialchars($lien['libelle'], ENT_QUOTES, 'UTF-8') ?><?php if ($cle === $page): ?>
              <span class="sr-only">(current)</span><?php endif; ?></a>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>
  <main>