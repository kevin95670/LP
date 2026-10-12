<?php require("header.php"); ?>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="contact-intro">
        <h1>Contact</h1>
        <p>Une question sur la règlementation ADR, un audit à planifier ? Écrivez-nous, ou appelez directement.</p>
      </div>
    </div>
  </div>
</div>

<div class="container my-4">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="row">

        <div class="col-lg-7 mb-4">
          <div class="contact-carte h-100">
            <h2 class="contact-titre">Votre message</h2>
            <form id="formContact" name="formContact" method="post" action="envoiMail.php" class="contact-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nom">Nom <span class="obligatoire">*</span></label>
                  <input type="text" id="nom" name="nom" class="form-control" autocomplete="family-name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="entreprise">Entreprise <span class="obligatoire">*</span></label>
                  <input type="text" id="entreprise" name="entreprise" class="form-control" autocomplete="organization" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="email">Email <span class="obligatoire">*</span></label>
                  <input type="email" id="email" name="email" class="form-control" autocomplete="email" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="tel">Téléphone <span class="obligatoire">*</span></label>
                  <input type="tel" id="tel" name="telephone" class="form-control" autocomplete="tel" required>
                </div>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
              </div>
              <p class="contact-note"><span class="obligatoire">*</span> champs obligatoires</p>
              <p class="error" role="alert"></p>
              <p class="success" role="status"></p>
              <button id="submitButtonContact" type="submit" class="btn btn-primary btn-lg">Envoyer</button>
            </form>
          </div>
        </div>

        <div class="col-lg-5 mb-4">
          <div class="contact-carte contact-coordonnees h-100">
            <h2 class="contact-titre">Coordonnées</h2>
            <address>
              <p class="contact-label">Adresse</p>
              <p>6 hameau de l'épinette,<br>95670 Marly-la-ville,<br>France.</p>
              <p class="contact-label">Téléphone</p>
              <p><a class="contact-lien" href="tel:+33684374365">06 84 37 43 65</a></p>
              <p class="contact-label">Email</p>
              <p class="mb-0"><a class="contact-lien" href="mailto:pascal-leonard@orange.fr">pascal-leonard@orange.fr</a></p>
            </address>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php require("footer.php");?>