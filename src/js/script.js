$(document).ready(function () {

	$('.error').hide();
	$('.success').hide();
	var score = 0;

	// ---------------------------------------------------------------
	// CONFIGURATION DU QUIZ
	// Pour ajouter une question : ajouter UNE ligne ici, avec les ids
	// des radios (reponseN) et l'id de la bonne réponse.
	// Côté HTML, la question N a son message d'erreur : #reponseN-wrong
	// ---------------------------------------------------------------
	var QUESTIONS = [
		{ reponses: [1, 2, 3],        bonne: 3 },
		{ reponses: [4, 5, 6],        bonne: 5 },
		{ reponses: [7, 8, 9, 10],    bonne: 9 },
		{ reponses: [11, 12, 13, 14], bonne: 13 },
		{ reponses: [15, 16, 17],     bonne: 17 }
	];

	$('.show-suite button').click(function () {
		var $bouton = $(this);
		var plusVisible = $bouton.text() === 'Voir plus';
		$('.display-while-clicking').css('display', plusVisible ? 'block' : 'none');
		$bouton.text(plusVisible ? 'Voir moins' : 'Voir plus');
	});

	$('#validate-quiz').submit(function (event) {

		event.preventDefault();

		if (!toutesQuestionsRepondues()) {
			alert('Vous n\'avez pas répondu à toutes les questions');
			return;
		}

		QUESTIONS.forEach(corrigerQuestion);

		getResultat();
		getVerdict();
		affichageResultat();
	});

	function radio(numero) {
		return $('#reponse' + numero);
	}

	// Renvoie le numéro de la réponse cochée pour une question (ou undefined)
	function reponseChoisie(question) {
		return question.reponses.find(function (numero) {
			return radio(numero).is(':checked');
		});
	}

	function toutesQuestionsRepondues() {
		return QUESTIONS.every(function (question) {
			return reponseChoisie(question) !== undefined;
		});
	}

	// Montre l'icône sur la réponse choisie et sur la bonne réponse,
	// décale les autres, et compte le point ou affiche le message d'erreur.
	function corrigerQuestion(question, index) {
		var choix = reponseChoisie(question);

		question.reponses.forEach(function (numero) {
			if (numero === choix || numero === question.bonne) {
				radio(numero).prev('.img-quiz').css('display', 'inline-block');
			}
			else {
				radio(numero).parent('p').css('padding-left', '35px');
			}
		});

		if (choix === question.bonne) {
			score = score + 1;
		}
		else {
			$('#reponse' + (index + 1) + '-wrong').show();
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

	function getVerdict() {
		var total = QUESTIONS.length;

		if (score <= total * 0.4) {
			$('.verdict-quiz').html('<img src="./img/sad.png" height="50px" width="75px"> Catastrophe ! vous devez impérativement nous <a href="contact" class="link-quiz">contacter</a>');
		}
		else if (score < total) {
			$('.verdict-quiz').html('<img src="./img/neutre.png" height="50px" width="75px"> C\'est bien mais vous avez encore quelques lacunes. N\'attendez pas pour nous <a href="contact" class="link-quiz">contacter</a>.');
		}
		else {
			$('.verdict-quiz').html('<img src="./img/happy.png" height="50px" width="75px"> Bravo ! Je ne peux que vous féliciter. Appelez nous pour en discuter.');
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
					$('.error').show().text(messageErreur);
				}
				else { //Aucune erreur dans le form
					$('.error').hide();
					$('.success').show().text('Votre mail a été envoyé avec succès ! Vous allez être rédirigé vers la page d\'accueil.');
					window.setTimeout(function () {
						window.location.href = 'index';
					}, 3000);
				}
			});
	});

});