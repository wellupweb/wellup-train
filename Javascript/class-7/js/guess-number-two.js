var guesses = [];

var currentNumber = generateNumber();

console.log(currentNumber);
function generateNumber(){
    var randomNumber = Math.random() * 100;
    var exactRandomNumber = Math.floor(randomNumber);
    return exactRandomNumber;
}

document.getElementById('check-number').addEventListener('click',play);
document.getElementById('reset-number').addEventListener('click',resetGame);


function resetGame(){
    currentNumber = generateNumber();
    
    document.getElementById("result").innerHTML = "";
    document.getElementById('number-guess').value = "";
    guesses = [];
    displayHistory();

}

function play (){
    var numberGuess = document.getElementById('number-guess').value;
    if(numberGuess > currentNumber){
        document.getElementById("result").innerHTML = "<div class='alert alert-warning' role='alert'> Too High</div>";
    }else if( numberGuess < currentNumber){
        document.getElementById("result").innerHTML = "<div class='alert alert-danger' role='alert'>Too Low</div>";
    }else{
        document.getElementById("result").innerHTML = "<div class='alert alert-success' role='alert'>You Won</div>";
    }
    saveHistory(numberGuess)
    displayHistory();
}

function saveHistory(guess){
    guesses.push(guess);
}

function displayHistory(){
    var i = 0;
    var list = `<ul class="list-group">`;
    while( i < guesses.length){
        list += `<li class="list-group-item"> Your Guess Is ${guesses[i]}  </li>`;
        i++;
    }

    list += `</ul>`;

    document.getElementById('history').innerHTML = list;
}


// document.body.children[0].children[3].children[0].style.background = "blue"

// document.body.children[0].children[1].children[1].value = "100"
document.getElementsByTagName('button')[0].style.background = "blue"
document.getElementsByTagName('button')[0].style.color = "white"