<?php require("header.php"); ?>

  <div class="container my-5 score">
    <div class="row">
      <div class="col-xl-9 col-lg-10 mx-auto">
        <div class="bg-faded rounded px-5 py-4">
          <h3 class="mb-4 text-center">
            <span class="score-text text-center">Vous avez </span>
          </h3>
          <hr class="separator" />
          <p class="verdict-quiz mb-3"> </p>
        </div>  
      </div>
    </div>
  </div>

<form id="validate-quiz">
    <div class="container my-5">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded px-5 py-4">
            <h2 class="mb-4 text-center">
              Question n°1 :
            </h2>
            <hr class="separator" />
            <h3 class="entitled mb-3">Pour un produit dont le point d'ébullition est de 70°C, le taux maximal de remplissage d'un GRV est de : </h3>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse1" name="question1"> 56%</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse2" name="question1"> 85%</p>
            <p><img class="img-quiz" src="img/right.png" alt="bon"/><input type="radio" id="reponse3" name="question1"> 92%</p>
            <p class="reponse mt-3" id="reponse1-wrong">Référence 4.1.1.4</p>
          </div>  
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded px-5 py-4">
            <h2 class="mb-4 text-center">
              Question n°2 :  
            </h2>
            <hr class="separator" />
            <h3 class="entitled mb-3">Un ancien stock de futs en plastique est disponible dans mon usine. Je peux les utiliser si la date de fabrication est inférieure à : </h3>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse4" name="question2"> 2 ans</p>
            <p><img class="img-quiz" src="img/right.png" alt="bon"/><input type="radio" id="reponse5" name="question2"> 5 ans</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse6" name="question2"> 7 ans</p>
            <p class="reponse mt-3" id="reponse2-wrong">Référence 4.1.1.15</p>
          </div>  
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded px-5 py-4">
            <h2 class="mb-4 text-center">
              Question n°3 :
            </h2>
            <hr class="separator" />
            <h3 class="entitled mb-3">La rédaction du document de transport accompagnant les produits dangereux doit se rédiger : </h3>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse7" name="question3"> Numéro ONU / Etiquettes / Groupe d'emballage / Désignation officielle / Code Tunnel</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse8" name="question3"> Désignation officielle / Etiquettes / Groupe d'emballage / Numéro ONU / Code Tunnel</p>
            <p><img class="img-quiz" src="img/right.png" alt="bon"/><input type="radio" id="reponse9" name="question3"> Numéro ONU / Désignation officielle / Etiquettes / Groupe d'emballage / Code Tunnel</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse10" name="question3"> Pas d'ordre particulier exigé</p>
            <p class="reponse mt-3" id="reponse3-wrong">Référence 5.4.1.1.1</p>
          </div>  
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded px-5 py-4">
            <h2 class="mb-4 text-center">
              Question n°4 :
            </h2>
            <hr class="separator" />
            <h3 class="entitled mb-3">Pour transporter des tonnelets de 5 litres de rhum alcoolisés à 55°C, je suis : </h3>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse11" name="question4"> Soumis à l'ADR</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse12" name="question4"> Soumis partiellement à l'ADR</p>
            <p><img class="img-quiz" src="img/right.png" alt="bon"/><input type="radio" id="reponse13" name="question4"> Non soumis à l'ADR</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse14" name="question4"> Soumis à l'ADR à partir de 1000 litres de rhum</p>
            <p class="reponse mt-3" id="reponse4-wrong">Référence 3.3.1 sur la disposition spéciale 145</p>
          </div>  
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded px-5 py-4">
            <h2 class="mb-4 text-center">
              Question n°5 :
            </h2>
            <hr class="separator" />
            <h3 class="entitled mb-3">Etant chargeur, les contraintes suivantes me sont imposées : </h3>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse15" name="question5"> Interdiction de fumer sauf cigarettes électroniques</p>
            <p><img class="img-quiz" src="img/wrong.png" alt="faux"/><input type="radio" id="reponse16" name="question5"> Interdiction totale de charger les marchandises dangereuses avec des aliments pour animaux</p>
            <p><img class="img-quiz" src="img/right.png" alt="bon"/><input type="radio" id="reponse17" name="question5"> Vérifier l'état de l'emballage des colis</p>
            <p class="reponse mt-3" id="reponse5-wrong">Références 7.5.9 / 7.5.4 / 1.4.3.1.1</p>
          </div>  
        </div>
      </div>
    </div>

  <div class="container">
    <div class="row">
      <div class="mx-auto mb-5">
        <p><input class="btn btn-xl btn-primary submit-quiz" type="submit" value="Envoyer"></p>
      </div>
    </div>
  </div>


</form>

<?php require("footer.php");?>
