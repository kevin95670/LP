$(document).ready(function () {

	$('.error').hide();
	$('.success').hide();
	var score = 0;

	// ---------------------------------------------------------------
	// QUIZ
	// Le JavaScript lit le HTML : chaque .question contient ses radios,
	// et la bonne réponse porte l'attribut data-bonne (voir quiz.php).
	// Pour ajouter une question, rien à changer ici.
	// ---------------------------------------------------------------
	var $questions = $('.question');

	$('.show-suite button').click(function () {
		var $bouton = $(this);
		var plusVisible = $bouton.text() === 'Voir plus';
		$('.display-while-clicking').css('display', plusVisible ? 'block' : 'none');
		$bouton.text(plusVisible ? 'Voir moins' : 'Voir plus');
		$bouton.attr('aria-expanded', plusVisible ? 'true' : 'false');
	});

	$('#validate-quiz').submit(function (event) {

		event.preventDefault();

		if (!toutesQuestionsRepondues()) {
			alert('Vous n\'avez pas répondu à toutes les questions');
			return;
		}

		$questions.each(corrigerQuestion);

		$('#validate-quiz').addClass('corrige').find('input[type=radio]').prop('disabled', true);

		getResultat();
		getVerdict();
		affichageResultat();
	});

	function toutesQuestionsRepondues() {
		return $questions.toArray().every(function (question) {
			return $(question).find('input[type=radio]:checked').length > 0;
		});
	}

	// Marque la bonne réponse, et la réponse choisie si elle est fausse.
	// Compte le point, ou affiche la référence du texte.
	function corrigerQuestion(index, element) {
		var $question = $(element);
		var $choix = $question.find('input[type=radio]:checked');
		var $bonne = $question.find('input[data-bonne]');

		$bonne.closest('.reponse-ligne').addClass('est-bonne');

		if ($choix.is($bonne)) {
			score = score + 1;
		}
		else {
			$choix.closest('.reponse-ligne').addClass('est-fausse');
			$question.find('.reponse').show();
		}
	}

	function getResultat() {
		if (score > 1) {
			$('.score-text').after(score + ' ' + 'bonnes réponses');
		}
		else {
			$('.score-text').after(score + ' ' + 'bonne réponse');
		}
	}

	// Pictogrammes du verdict, dessinés en SVG (aucune image à charger)
	var ICONES_VERDICT = {
		mauvais : '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M18 6L6 18"/></svg>',
		moyen : '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5v8M12 18.5v.01"/></svg>',
		bon : '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7"/></svg>'
	};

	function afficherVerdict(niveau, texte) {
		$('.verdict-quiz').html(
			'<span class="losange verdict-losange verdict-' + niveau + '" aria-hidden="true"><span>' + ICONES_VERDICT[niveau] + '</span></span>' +
			'<span class="verdict-texte">' + texte + '</span>'
		);
	}

	function getVerdict() {
		var total = $questions.length;

		if (score <= total * 0.4) {
			afficherVerdict('mauvais', '<strong>Catastrophe !</strong> vous devez impérativement nous <a href="contact" class="link-quiz">contacter</a>');
		}
		else if (score < total) {
			afficherVerdict('moyen', '<strong>C\'est bien</strong> mais vous avez encore quelques lacunes. N\'attendez pas pour nous <a href="contact" class="link-quiz">contacter</a>.');
		}
		else {
			afficherVerdict('bon', '<strong>Bravo !</strong> Je ne peux que vous féliciter. Appelez nous pour en discuter.');
		}
	}

	function affichageResultat() {
		$('.score').show();
		window.scrollTo(0, 0);
		$('.submit-quiz').attr('disabled', true);
	}

	// ---------------------------------------------------------------
	// FORMULAIRE DE CONTACT
	// Codes d'erreur renvoyés par envoiMail.php
	// ---------------------------------------------------------------
	var ERREURS_CONTACT = {
		1: 'Mauvais format pour une adresse mail',
		2: 'Mauvais format pour un nom de famille',
		3: 'Mauvais format pour un numéro de téléphone',
		4: 'Mauvais format pour un nom d\'entreprise'
	};

	$('#formContact').on('submit', function (event) {

		event.preventDefault();

		var $bouton = $('#submitButtonContact');

		// Empêche le double envoi pendant que la requête est en cours
		$bouton.prop('disabled', true);

		// URLs relatives : fonctionnent en local (Docker) comme en production
		$.post('envoiMail.php',
			{
				nom: $('#nom').val(),
				entreprise: $('#entreprise').val(),
				email: $('#email').val(),
				telephone: $('#tel').val(),
				message: $('#message').val()
			},
			function (reponse) {
				var messageErreur = ERREURS_CONTACT[String(reponse).trim()];

				if (messageErreur) {
					$('.success').hide();
					$('.error').show().text(messageErreur);
					$bouton.prop('disabled', false);
				}
				else { //Aucune erreur dans le form
					$('.error').hide();
					$('.success').show().text('Votre mail a été envoyé avec succès ! Vous allez être rédirigé vers la page d\'accueil.');
					window.setTimeout(function () {
						window.location.href = 'index';
					}, 3000);
				}
			})
			.fail(function () {
				$('.success').hide();
				$('.error').show().text('L\'envoi a échoué. Merci de réessayer, ou de nous appeler.');
				$bouton.prop('disabled', false);
			});
	});

});