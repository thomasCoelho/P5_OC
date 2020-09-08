var submitQuestion = document.querySelector('#submit-question');
var pointsQuestion = document.querySelectorAll('.form-question-points');

submitQuestion.addEventListener('click', function(event){
	event.preventDefault();
	var textQuestion =  document.querySelector('#form-question-title').value;
	var timeQuestion = document.querySelector('#form-question-time').value;
	var pointsQuestions = document.querySelectorAll('.form-question-points');
	var inputReponseQuestion = document.querySelectorAll('.form-input-reponse');
	var radioReponseQuestion = document.querySelectorAll('.form-radio-reponse');
	var idQuizz = document.querySelector('#input-id-quizz').value;

	function arrayIncr(tableau){
		function resetEach(item, index){
		{
			console.log(item);
			console.log(index);
			console.log(tableau[index].value);
			tableau[index].value= "";
		}
		}
		tableau.forEach(resetEach());
		
		
		
	}
	
	const data = new FormData();
	data.append('textQuestion', textQuestion);
	data.append('timeQuestion', timeQuestion);
	data.append('pointsQuestions', pointsQuestions);
	data.append('inputReponseQuestion', inputReponseQuestion);
	data.append('radioReponseQuestion', radioReponseQuestion);
	data.append('idQuizz', idQuizz);

	const requeteAjax = new XMLHttpRequest();
	requeteAjax.open("POST", "Application/script.php", true);
	console.log("ajax.open");
	requeteAjax.onload = function(){
	textQuestion.value = "";
	timeQuestion.value = "";
	inputReponseQuestion;
	radioReponseQuestion;
	idQuizz.value = "";
	console.log("fonction onload");
	}
	requeteAjax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	requeteAjax.send(data);
	console.log("ajax.send");
	console.log(data);
});
