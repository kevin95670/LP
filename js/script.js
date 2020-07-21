$(document).ready(function () {

	$('.error').hide();
	$('.success').hide();
	var score = 0;

	$('.show-suite button').click(function () {
		if ($('.show-suite button').text() === 'Voir plus') {
			$('.display-while-clicking').css('display', 'block');
			$('.show-suite button').text('Voir moins');
		}
		else {
			$('.display-while-clicking').css('display', 'none');
			$('.show-suite button').text('Voir plus');
		}
	});

	$('#validate-quiz').submit(function (event) {

		event.preventDefault();

		var reponsesToAllQuestion = toutesReponsesNonRepondues();

		//Si on a pas répondu à toutes les questions
		if (!reponsesToAllQuestion) 	
		{
			alert('Vous n\'avez pas répondu à toutes les questions');
		}

		else {

			gagnerPremiereQuestion();
			gagnerDeuxiemeQuestion();
			gagnerTroisiemeQuestion();
			gagnerQuatriemeQuestion();
			gagnerCinquiemeQuestion();
			
			getResultat();
			getVerdict();
			
			affichageResultat();
		}
	});

	function gagnerPremiereQuestion() {
		if ($(':radio[id="reponse3"]:checked').val()) {
			$(':radio[id="reponse3"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse2"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse1"]').parent('p').css('padding-left','35px');
			score = score+1;
		}  
		else if ($(':radio[id="reponse2"]:checked').val()) {
			$(':radio[id="reponse2"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse3"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse1"]').parent('p').css('padding-left','35px');
			messageErreurPremiereQuestion();
		} 
		else if ($(':radio[id="reponse1"]:checked').val()) {
			$(':radio[id="reponse1"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse2"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse3"]').parent('p').css('padding-left','35px');
			messageErreurPremiereQuestion();
		}
	}

	function gagnerDeuxiemeQuestion() {
		if ($(':radio[id="reponse5"]:checked').val()) {
			$(':radio[id="reponse5"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse4"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse6"]').parent('p').css('padding-left','35px');
			score = score+1;
		}  
		else if ($(':radio[id="reponse4"]:checked').val()) {
			$(':radio[id="reponse4"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse5"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse6"]').parent('p').css('padding-left','35px');
			messageErreurDeuxiemeQuestion();
		} 
		else if ($(':radio[id="reponse6"]:checked').val()) {
			$(':radio[id="reponse6"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse4"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse5"]').parent('p').css('padding-left','35px');
			messageErreurDeuxiemeQuestion();
		} 
	}

	function gagnerTroisiemeQuestion() {
		if ($(':radio[id="reponse7"]:checked').val()) {
			$(':radio[id="reponse7"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse8"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse9"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse10"]').parent('p').css('padding-left','35px');
			messageErreurTroisiemeQuestion();
		} 
		else if ($(':radio[id="reponse8"]:checked').val()) {
			$(':radio[id="reponse8"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse7"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse9"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse10"]').parent('p').css('padding-left','35px');
			messageErreurTroisiemeQuestion();
		}
		else if ($(':radio[id="reponse9"]:checked').val()) {
			$(':radio[id="reponse9"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse8"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse7"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse10"]').parent('p').css('padding-left','35px');
			score = score+1;
		}  
		else if ($(':radio[id="reponse10"]:checked').val()) {
			$(':radio[id="reponse10"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse8"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse9"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse7"]').parent('p').css('padding-left','35px');
			messageErreurTroisiemeQuestion();
		} 
	}

	function gagnerQuatriemeQuestion() {
		if ($(':radio[id="reponse11"]:checked').val()) {
			$(':radio[id="reponse11"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse12"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse13"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse14"]').parent('p').css('padding-left','35px');
			messageErreurQuatriemeQuestion();
		} 
		else if ($(':radio[id="reponse12"]:checked').val()) {
			$(':radio[id="reponse12"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse11"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse13"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse14"]').parent('p').css('padding-left','35px');
			messageErreurQuatriemeQuestion();
		} 
		else if ($(':radio[id="reponse13"]:checked').val()) {
			$(':radio[id="reponse13"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse12"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse11"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse14"]').parent('p').css('padding-left','35px');
			score = score+1;
		}

		else if ($(':radio[id="reponse14"]:checked').val()) {
			$(':radio[id="reponse14"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse12"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse13"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse11"]').parent('p').css('padding-left','35px');
			messageErreurQuatriemeQuestion();

		}  

	}

	function gagnerCinquiemeQuestion() {
		if ($(':radio[id="reponse15"]:checked').val()) {
			$(':radio[id="reponse15"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse16"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse17"]').parent('p').css('padding-left','35px');
			messageErreurCinquiemeQuestion();
		} 
		else if ($(':radio[id="reponse16"]:checked').val()) {
			$(':radio[id="reponse16"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse15"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse17"]').parent('p').css('padding-left','35px');
			messageErreurCinquiemeQuestion();
		} 
		else if ($(':radio[id="reponse17"]:checked').val()) {
			$(':radio[id="reponse17"]').prev('.img-quiz').css('display','inline-block');
			$(':radio[id="reponse16"]').parent('p').css('padding-left','35px');
			$(':radio[id="reponse15"]').parent('p').css('padding-left','35px');
			score = score+1;
		} 
	}

	function messageErreurPremiereQuestion() {
		$('#reponse1-wrong').show();
	}

	function messageErreurDeuxiemeQuestion() {
		$('#reponse2-wrong').show();
	}

	function messageErreurTroisiemeQuestion() {
		$('#reponse3-wrong').show();
	}

	function messageErreurQuatriemeQuestion() {
		$('#reponse4-wrong').show();
	}

	function messageErreurCinquiemeQuestion() {
		$('#reponse5-wrong').show();
	}

	function toutesReponsesNonRepondues() {

		var reponsesAll;

		if (
			(!$(':radio[id="reponse3"]:checked').val()&&!$(':radio[id="reponse2"]:checked').val()&&!$(':radio[id="reponse1"]:checked').val())
			||
			(!$(':radio[id="reponse4"]:checked').val()&&!$(':radio[id="reponse5"]:checked').val()&&!$(':radio[id="reponse6"]:checked').val())
			||
			(!$(':radio[id="reponse7"]:checked').val()&&!$(':radio[id="reponse8"]:checked').val()&&!$(':radio[id="reponse9"]:checked').val()&&!$(':radio[id="reponse10"]:checked').val())
			||
			(!$(':radio[id="reponse11"]:checked').val()&&!$(':radio[id="reponse12"]:checked').val()&&!$(':radio[id="reponse13"]:checked').val()&&!$(':radio[id="reponse14"]:checked').val())
			||
			(!$(':radio[id="reponse15"]:checked').val()&&!$(':radio[id="reponse16"]:checked').val()&&!$(':radio[id="reponse17"]:checked').val())
			)
		{
			reponsesAll = false;
		}
		else {
			reponsesAll = true;
		}
		return reponsesAll;

	}

	function getResultat() {
		if (score>1) {
			$('.score-text').after(score +' ' +'bonnes réponses');
		}
		else {
			$('.score-text').after(score +' ' +'bonne réponse');
		}
	}

	function getVerdict() {
		if (score<=2) {
			$('.verdict-quiz').html('<img src="../img/sad.png" height="50px" width="75px"> Catastrophe ! vous devez impérativement nous <a href="contact.php" class="link-quiz">contacter</a>');
		}
		else if (score<=4&&score>2) {
			$('.verdict-quiz').html('<img src="../img/neutre.png" height="50px" width="75px"> C\'est bien mais vous avez encore quelques lacunes. N\'attendez pas pour nous <a href="contact.php" class="link-quiz">contacter</a>.');
		}
		else{
			$('.verdict-quiz').html('<img src="../img/happy.png" height="50px" width="75px"> Bravo ! Je ne peux que vous féliciter. Appelez nous pour en discuter.');
		}
	}

	function affichageResultat() {
		$('.score').show();
		window.scrollTo(0, 0);
		$('.submit-quiz').attr('disabled', true);
	}

	$('#formContact').on('submit', function (event) {

		event.preventDefault();
		$.post('http://localhost:89/LP/php/envoiMail.php',
			{nom : $('#nom').val(),
			entreprise : $('#entreprise').val(),
			email : $('#email').val(),
			telephone : $('#tel').val(),
			message : $('#message').val()
		},
		function(reponse)
		{
			if (reponse == 4) {
				$('.error').show();
				$('.error').text('Mauvais format pour un nom d\'entreprise');
			}
			else if (reponse == 3) {
				$('.error').show();
				$('.error').text('Mauvais format pour un numéro de téléphone');
			}
			else if (reponse == 2) {
				$('.error').show();
				$('.error').text('Mauvais format pour un nom de famille');
			}
			else if (reponse == 1) {
				$('.error').show();
				$('.error').text('Mauvais format pour une adresse mail');
			}
			else { //Aucune erreur dans le form
				$('.error').hide();
				$('.success').show();
				$('.success').text('Votre mail a été envoyé avec succès ! Vous allez être rédirigé vers la page d\'accueuil.');
				window.setTimeout(function () {
					window.location.href = 'http://localhost:89/index.php';
				}, 3000);
			}
		});
});

});



