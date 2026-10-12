<?php

    $nom = htmlspecialchars($_POST['nom']); // required
    $entreprise = htmlspecialchars($_POST['entreprise']); // required
    $email = htmlspecialchars($_POST['email']); // required
    $telephone = htmlspecialchars($_POST['telephone']); // required
    $message = htmlspecialchars($_POST['message']); // not required

    $email_to = "kevin-leonard@orange.fr";
    $email_subject = $email." a demandé à contacter LP";
	  $email_ionos = "noreply@lpconseilsecurite.fr";

    if((isset($nom)&&!empty($nom))
      && (isset($entreprise)&&!empty($entreprise))
      && (isset($email)&&!empty($email))
      && (isset($telephone)&&!empty($telephone))
      )
    {
      $verification = verifDonnees($email,$nom,$entreprise,$telephone);
      if($verification == ""){
        // create email headers
        $message = $message . "\r\n\r\n" . "Mon nom est : ". $nom . "\r\n" . "Mon entreprise se nomme : " . $entreprise . "\r\n" . "Mon telephone est : " . $telephone . "\r\n";
        $headers = 'From: '.$email_ionos."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        mail($email_to, $email_subject, $message, $headers);  
      }
      else{
        echo $verification;
      }

    }
    else{
      echo 'Un champ n\'a pas été remplit';
    }

    function verifDonnees($email,$nom,$entreprise,$telephone){
      $error_message = "";

      $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
      if(!preg_match($email_exp,$email)) {
        //$error_message .= 'Mauvais format d\'adresse mail'."<br>";
        $error_message = 1;
      }
      $string_exp = "/^[A-Za-z .'-]+$/";
      if(!preg_match($string_exp,$nom)) {
        //$error_message .= 'Mauvais format de nom de famille'."<br>";
        $error_message = 2;
      }
      $tel_epx = "/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/";
      if(!preg_match($tel_epx,$telephone)) {
        //$error_message .= 'Mauvais format de numéro de téléphone'."<br>";
        $error_message = 3;
      }
      $entreprise_epx = "/^[a-zA-Z-'\s]+$/";
      if(!preg_match($entreprise_epx,$entreprise)) {
        //$error_message .= 'Mauvais format de nom d\'entreprise'."<br>";
        $error_message = 4;
      }
      return $error_message;
    }

    ?>
