function populate() {
	if(quiz.isEnded()){
		showScores();
	}
	else{
		var element=document.getElementById("question");
		element.innerHTML=quiz.getQuestionIndex().text;
		//show choices
		var choices = quiz.getQuestionIndex().choices;
		for(var i=0;i<choices.length;i++){
			var element = document.getElementById("choice"+i);
			element.innerHTML=choices[i];
			guess("btn"+i , choices[i]);
		}
		showProgress();

	}
};
function guess(id,guess){
	var button =document.getElementById(id);
	button.onclick=function(){
		quiz.guess(guess);
		populate();

	}
};

function showProgress(){
	var currentQuestionNumber = quiz.questionIndex + 1;
	var element = document.getElementById("progress");
	element.innerHTML="Question " + currentQuestionNumber +"of "+quiz.questions.length;
}
function showScores(){
	var GameOverHtml ="<h1>Result</h1>";
	GameOverHtml+="<h2 id='score'> Your scores:" +quiz.score +"</h2>"
	var element =document.getElementById("quiz");
	element.innerHTML=GameOverHtml;
}
 var questions=[
 new Question("How many months do we have in a year?",["12 months","10 months","7 months","15 months"],"12 months"),
 	new Question("How many days do we have in a week?",["13 days","15 days","7 days","6 days"],"7 days"),
 	new Question(" What is 2+2?",["0","22","3","4"],"4"),
 	new Question("Which number comes after 6?",["5","7","6","8"],"7"),
 	new Question(" How many colors are there in a rainbow?",["3","8","6","7"],"7"),
 	new Question("What is the capital of Nepal?",["Kathmandu","Pokhara","Chitwan","Surkhet"],"Kathmandu")
  ];

var quiz = new Quiz(questions);
  
  populate();