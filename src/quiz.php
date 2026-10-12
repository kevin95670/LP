<?php
require("header.php");

// ---------------------------------------------------------------
// LES QUESTIONS
// Pour ajouter une question : copier un bloc ci-dessous et l'adapter.
//   'enonce'    : la question
//   'reponses'  : la liste des réponses proposées
//   'bonne'     : position de la bonne réponse (0 = la première, 1 = la deuxième...)
//   'reference' : texte affiché quand la réponse est fausse
// Les numéros et le JavaScript s'adaptent tout seuls.
// ---------------------------------------------------------------
$questions = [
  [
    'enonce'    => "Pour un produit dont le point d'ébullition est de 70°C, le taux maximal de remplissage d'un GRV est de : ",
    'reponses'  => ['56%', '85%', '92%'],
    'bonne'     => 2,
    'reference' => 'Référence 4.1.1.4',
  ],
  [
    'enonce'    => "Un ancien stock de futs en plastique est disponible dans mon usine. Je peux les utiliser si la date de fabrication est inférieure à : ",
    'reponses'  => ['2 ans', '5 ans', '7 ans'],
    'bonne'     => 1,
    'reference' => 'Référence 4.1.1.15',
  ],
  [
    'enonce'    => "La rédaction du document de transport accompagnant les produits dangereux doit se rédiger : ",
    'reponses'  => [
      "Numéro ONU / Etiquettes / Groupe d'emballage / Désignation officielle / Code Tunnel",
      "Désignation officielle / Etiquettes / Groupe d'emballage / Numéro ONU / Code Tunnel",
      "Numéro ONU / Désignation officielle / Etiquettes / Groupe d'emballage / Code Tunnel",
      "Pas d'ordre particulier exigé",
    ],
    'bonne'     => 2,
    'reference' => 'Référence 5.4.1.1.1',
  ],
  [
    'enonce'    => "Selon l'ADR, quel(s) équipement(s) de protection générale et individuelle, pour transporter de la peinture, ne sont PAS obligatoires : ",
    'reponses'  => [
      "Une cale de roue par véhicule",
      "Deux signaux d'avertissements autoporteurs",
      "Un masque d'évacuation d'urgence pour chaque membre de l'équipage",
      "Du liquide de rinçage pour les yeux",
    ],
    'bonne'     => 2,
    'reference' => 'Référence 5.4.3',
  ],
  [
    'enonce'    => "Etant chargeur, les contraintes suivantes me sont imposées : ",
    'reponses'  => [
      "Interdiction de fumer sauf cigarettes électroniques",
      "Interdiction totale de charger les marchandises dangereuses avec des aliments pour animaux",
      "Vérifier l'état de l'emballage des colis",
    ],
    'bonne'     => 2,
    'reference' => 'Références 7.5.9 / 7.5.4 / 1.4.3.1.1',
  ],
];

function echapper($texte) {
  return htmlspecialchars($texte, ENT_QUOTES, 'UTF-8');
}
?>

  <!-- Résultat : affiché par le JavaScript après l'envoi -->
  <div class="container my-5 score">
    <div class="row">
      <div class="col-xl-9 col-lg-10 mx-auto">
        <div class="placard">
          <h2 class="placard-score">
            <span class="score-text">Vous avez </span>
          </h2>
          <div class="verdict-quiz"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-xl-9 col-lg-10 mx-auto">
        <div class="quiz-intro">
          <h1>Testez vos connaissances ADR</h1>
          <p><?= count($questions) ?> questions. Pour chaque mauvaise réponse, la référence du texte ADR vous est indiquée.</p>
        </div>
      </div>
    </div>
  </div>

<form id="validate-quiz">
<?php $numeroReponse = 0; ?>
<?php foreach ($questions as $i => $question): ?>
    <div class="container my-5">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="question">
            <div class="question-tete">
              <span class="losange" aria-hidden="true"><span><?= $i + 1 ?></span></span>
              <div>
                <h2 class="question-label">Question n°<?= $i + 1 ?></h2>
                <h3 class="entitled"><?= echapper($question['enonce']) ?></h3>
              </div>
            </div>
<?php foreach ($question['reponses'] as $j => $texte): ?>
<?php $numeroReponse++; $estBonne = ($j === $question['bonne']); ?>
            <p class="reponse-ligne"><img class="img-quiz" src="img/<?= $estBonne ? 'right' : 'wrong' ?>.png" alt="<?= $estBonne ? 'bon' : 'faux' ?>"/><input type="radio" id="reponse<?= $numeroReponse ?>" name="question<?= $i + 1 ?>"<?= $estBonne ? ' data-bonne' : '' ?>><label for="reponse<?= $numeroReponse ?>"><?= echapper($texte) ?></label></p>
<?php endforeach; ?>
            <p class="reponse" id="reponse<?= $i + 1 ?>-wrong"><span class="tampon"><?= echapper($question['reference']) ?></span></p>
          </div>
        </div>
      </div>
    </div>

<?php endforeach; ?>
  <div class="container">
    <div class="row">
      <div class="mx-auto mb-5">
        <p><input class="btn btn-xl btn-primary submit-quiz" type="submit" value="Envoyer"></p>
      </div>
    </div>
  </div>

</form>

<?php require("footer.php");?>