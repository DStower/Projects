const startBtn = document.getElementById('start-btn');
const nextBtn = document.getElementById('next-btn');
const questionContainerElement = document.getElementById('question-container');
const questionElement = document.getElementById('question');
const answerButtonsElement = document.getElementById('answer-buttons');

let shuffledQuestions, currentQuestionIndex;

startBtn.addEventListener('click', startGame);
nextBtn.addEventListener('click', () =>{
    currentQuestionIndex++;
    setNextQuestion();
});

function startGame(){
    startBtn.classList.add('hide');
    shuffledQuestions = questions.sort(() => Math.random() - .5);
    currentQuestionIndex = 0;
    questionContainerElement.classList.remove('hide');
    setNextQuestion();
}

function setNextQuestion(){
    resetState();
    showQuestion(shuffledQuestions[currentQuestionIndex]);
}

function showQuestion(question){
    questionElement.innerText = question.question;
    question.answers.forEach(answer =>{
        const btn = document.createElement('button');
        btn.innerText = answer.text;
        btn.classList.add('btn');
        if(answer.correct){
            btn.dataset.correct = answer.correct;
        }
        btn.addEventListener('click', selectAnswer);
        answerButtonsElement.appendChild(btn);
    });
}

function resetState(){
    clearStatusClass(document.body);
    nextBtn.classList.add('hide');
    while(answerButtonsElement.firstChild){
        answerButtonsElement.removeChild(answerButtonsElement.firstChild);
    }
}

function selectAnswer(e){
    const selectedBtn = e.target;
    const correct = selectedBtn.dataset.correct;
    setStatusClass(document.body, correct);
    Array.from(answerButtonsElement.children).forEach(btn =>{
        setStatusClass(btn, btn.dataset.correct);
    });
    if(shuffledQuestions.length > currentQuestionIndex + 1){
        nextBtn.classList.remove('hide');
    }else{
        startBtn.innerText = 'Restart';
        startBtn.classList.remove('hide');
    }
}

function setStatusClass(element, correct){
    clearStatusClass(element);
    if(correct){
        element.classList.add('correct');
    }else{
        element.classList.add('wrong');
    }
}

function clearStatusClass(element){
    element.classList.remove('correct');
    element.classList.remove('wrong');
}

const questions = [
    {
        question: 'What is 10 x 10?',
        answers: [
            {text: '100', correct: true},
            {text: '1000', correct: false}
        ]
    },
    {
        question: 'Is driving fast cars fun?',
        answers: [
            {text: 'YES!!!!', correct: true},
            {text: 'Maybe', correct: false},
            {text: 'IDK', correct: false},
            {text: 'No', correct: false}
        ]
    },
    {
        question: 'What is 5 + 2 - 5?',
        answers: [
            {text: '2', correct: true},
            {text: '3', correct: false}
        ]
    },
    {
        question: 'What is the name of our planet?',
        answers: [
            {text: 'Mars', correct: false},
            {text: 'Earth', correct: true}
        ]
    },
    {
        question: 'Is web development fun?',
        answers: [
            {text: 'Yes', correct: true},
            {text: 'No', correct: false}
        ]
    },
    {
        question: 'What is the Pythagorean Theorem?',
        answers: [
            {text: 'y = mx + b', correct: false},
            {text: 'a^2 + b^2 = c^2', correct: true}
        ]
    },
]