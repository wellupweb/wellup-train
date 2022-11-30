let currentNumber = generateNumber();


// Get The Value From id= number-guess after clicking check-button number

document.getElementById('check-number').addEventListener('click',play);


function play(){
    var numberGuess = document.getElementById('number-guess').value; // From Input Box
    console.log(numberGuess);
}


// Generate a random number

function generateNumber(){
    var randomNumber = Math.random() * 100; // Make value Getter than 0 to 99;

    var exactRandomNumber = Math.floor(randomNumber); // Make decimal to Integer
    
    console.log(exactRandomNumber)

    return exactRandomNumber;
}

