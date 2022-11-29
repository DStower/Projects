const game = document.getElementById('game');
const scoreDisplay = document.getElementById('score');

const jeopardyCategories = [
    {
        genre: "WHO",
        questions: [
            {
                question: "Who wrote Harry Potter?",
                answers: ["JK Rowling", "JRR Tolkien"],
                correct: "JK Rowling",
                level: "easy",
            },
            {
                question: "Who owns Tesla",
                answers: ["Elon Must", "Elon Musk"],
                correct: "Elon Musk",
                level: "medium",
            },
            {
                question: "Who designed the first car?",
                answers: ["Karl Benz", "Henry Ford"],
                correct: "Karl Benz",
                level: "hard",
            },
        ],
    },
    {
        genre: "WHERE",
        questions: [
            {
                question: "Where is the Empire State Building?",
                answers: ["Washington D.C.", "New York City"],
                correct: "New York City",
                level: "easy",
            },
            {
                question: "Where is the Colosseum",
                answers: ["Rome", "Milan"],
                correct: "Rome",
                level: "medium",
            },
            {
                question: "Where is Mount Kilamanjaro",
                answers: ["Zimbawe", "Tanzania"],
                correct: "Tanzania",
                level: "hard",
            },
        ],
    },
    {
        genre: "WHEN",
        questions: [
            {
                question: "When is Christmas?",
                answers: ["30th Dec", "24th/25th Dec"],
                correct: "24th/25th Dec",
                level: "easy",
            },
            {
                question: "When was JFK Shot?",
                answers: ["1963", "1961"],
                correct: "1963",
                level: "medium",
            },
            {
                question: "When was WW2?",
                answers: ["1932", "1941"],
                correct: "1941",
                level: "hard",
            },
        ],
    },
    {
        genre: "WHAT",
        questions: [
            {
                question: "What falls faster a feather or a boulder",
                answers: ["feather", "boulder"],
                correct: "boulder",
                level: "easy",
            },
            {
                question: "What does 'www' stand for?",
                answers: ["World Wide Web", "Wide World Web"],
                correct: "World Wide Web",
                level: "medium",
            },
            {
                question: "What countries made up the original Axis powers in World War II",
                answers: ["United States, France, Ukraine", "Germany, Italy, Japan"],
                correct: "Germany, Italy, Japan",
                level: "hard",
            },
        ],
    },
    {
        genre: "HOW MANY",
        questions: [
            {
                question: "How many points did Michael Jordan score in his first NBA game?",
                answers: ["21", "16"],
                correct: "16",
                level: "easy",
            },
            {
                question: "How many languages are written from right to left?",
                answers: ["12", "9"],
                correct: "12",
                level: "medium",
            },
            {
                question: "How many meters are in an Olympic swimming pool",
                answers: ["50", "62"],
                correct: "50",
                level: "hard",
            },
        ],
    },
]

let score = 0;

function addCategory(category){
    const column = document.createElement('div');
    column.classList.add('genre-column');

    const genreTitle = document.createElement('div');
    genreTitle.classList.add('genre-title');
    genreTitle.innerHTML = category.genre;

    column.appendChild(genreTitle);
    game.append(column);

    category.questions.forEach(question => {
        const card = document.createElement('div');
        card.classList.add('card');
        column.append(card);

        if(question.level === 'easy'){
            card.innerHTML = 100;
        }
        if(question.level === 'medium'){
            card.innerHTML = 200;
        }
        if(question.level === 'hard'){
            card.innerHTML = 300;
        }

        card.setAttribute('data-question', question.question);
        card.setAttribute('data-answer-1', question.answers[0]);
        card.setAttribute('data-answer-2', question.answers[1]);
        card.setAttribute('data-correct', question.correct);
        card.setAttribute('data-value', card.getInnerHTML());

        card.addEventListener('click', flipCard);
    });
}

jeopardyCategories.forEach(category => addCategory(category));

function flipCard(){
    this.innerHTML = "";
    this.style.fontSize = "15px";
    this.style.lineHeight = "25px";
    this.style.width = "100%";
    const textDisplay = document.createElement('div');
    textDisplay.classList.add('card-text');
    textDisplay.innerHTML = this.getAttribute('data-question');
    const firstBtn = document.createElement('button');
    const secondBtn = document.createElement('button');
    firstBtn.classList.add('first-btn');
    secondBtn.classList.add('second-btn');
    firstBtn.innerHTML = this.getAttribute('data-answer-1');
    secondBtn.innerHTML = this.getAttribute('data-answer-2');
    firstBtn.addEventListener('click', getResult);
    secondBtn.addEventListener('click', getResult);
    this.append(textDisplay, firstBtn, secondBtn);

    const allCards = Array.from(document.querySelectorAll('.card'));
    allCards.forEach(card => card.removeEventListener('click', flipCard));
}

function getResult(){
    const allCards = Array.from(document.querySelectorAll('.card'));
    allCards.forEach(card => card.addEventListener('click', flipCard));

    const cardOfBtn = this.parentElement;

    if(cardOfBtn.getAttribute('data-correct') == this.innerHTML){
        score = score + parseInt(cardOfBtn.getAttribute('data-value'));
        scoreDisplay.innerHTML = score;
        cardOfBtn.classList.add('correct-answer');
        setTimeout(() => {
            while(cardOfBtn.firstChild){
                cardOfBtn.removeChild(cardOfBtn.lastChild);
            }
            cardOfBtn.innerHTML = cardOfBtn.getAttribute('data-value');
        }, 100);
    }else{
        cardOfBtn.classList.add('wrong-answer');
        setTimeout(() =>{
            while(cardOfBtn.firstChild){
                cardOfBtn.removeChild(cardOfBtn.lastChild);
            }
            cardOfBtn.innerHTML = 0;
        }, 100);
    }

    cardOfBtn.removeEventListener('click', flipCard);
}