count = 0;

do{
	lowInput = parseInt(prompt('Please enter low number'));
}while(lowInput == '');
if(isNaN(lowInput)){
	lowInput = 1;
console.log(lowInput);
}
do{
	highInput = parseInt(prompt('Please enter high number'));
}while(highInput == '');
if(isNaN(highInput)){
	highInput = 100;
console.log(highInput);
}

random = Math.floor(Math.random() * (highInput - lowInput)) + lowInput;
console.log(random);
do{
	count++;
	do{
		guess = parseInt(prompt('Guess a number!'));
	}while (guess == '' || NaN)

	if(guess == random){
		alert('Congradulations, You Won!');
	}else if(guess < random){
		alert('Higher');
	}else{
		alert('Lower');
	}

}while(random != guess)

alert('it took you ' + count + ' tries to get this right')


