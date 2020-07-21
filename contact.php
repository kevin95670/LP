<?php require("header.php"); ?>

<div class="container my-5">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">
      <div class="row bg-faded rounded py-3 my-4">
        <address class="col-sm-6 col-12 mb-3 mb-sm-0">
          <p class="entitled">Adresse : </p>
          <p class="mb-0">6 hameau de l'épinette,</p>
          <p class="mb-0">95670 Marly-la-ville,</p>
          <p class="mb-0">France.</p>                         
        </address>
        <address class="col-sm-6 col-12">
          <p class="m-0 text-danger"><i class="fa fa-phone-square" aria-hidden="true"></i>
            06 84 37 43 65
          </p>
          <p class="m-0 text-info"><i class="fa fa-envelope" aria-hidden="true"></i>
            <a class="text-info" href="mailto:pascal-leonard@orange.fr">pascal-leonard@orange.fr </a>
          </p>
        </address>
      </div>
      <div class="row bg-faded pt-3 pb-3 mb-4 rounded">
        <div class="col-12">
          <form id="formContact" name="formContact" method="post" action="envoiMail.php">
            <div class="form-row mb-3">
              <div class="col">
                <label for="nom">Nom <span class="obligatoire">*</span></label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom :" required>
              </div>
              <div class="col">
                <label for="entreprise">Entreprise <span class="obligatoire">*</span></label>
                <input type="text" id="entreprise" name="entreprise" class="form-control" placeholder="Entreprise :" required>
              </div>
            </div>
            <div class="form-row mb-3">
              <div class="col">
                <label for="email">Email <span class="obligatoire">*</span></label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email :" required>
              </div>
              <div class="col">
                <label for="tel">Téléphone <span class="obligatoire">*</span></label>
                <input type="text" id="tel" name="telephone" class="form-control" placeholder="Téléphone :" required>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message </label>
              <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message :"></textarea>
            </div>
            <p class="error"></p>
            <p class="success"></p>
            <button id='submitButtonContact' type="submit" class="btn btn-primary mb-4">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require("footer.php");?>
