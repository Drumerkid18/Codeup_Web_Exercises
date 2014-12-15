// var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
// var color = colors[Math.floor(Math.random()*colors.length)];

// var favorite = 'green';

// if(color == 'red'){
// 	console.log("Red is the color of danger");
// }else if(color == 'blue'){
// 	console.log("Blue is the color of the depths of the ocean");
// }else if(color == 'green'){
// 	console.log("Green is the color of recycling");
// }else if(color == 'yellow'){
// 	console.log("Don't eat the Yellow Snow");
// }else if(color == 'orange'){
// 	console.log("Orange is the color of a sunset");
// }else if(color == 'violet'){
// 	console.log("Quiet is Violet");
// }else{
// 	console.log("I don't know what Indigo is");
// }




// (color == favorite) ? console.log("Green is my favorite color \"steven tyler voice\"" ) : console.log("Some-ting wong. Tis not my favorite color");

// switch (color){
// 	case "red":
// 		console.log("Red is the color of danger");
// 		break;
// 	case "orange":
// 		console.log("Orange is the color of a sunset");
// 		break;
// 	case "blue":	
// 		console.log("Blue is the color of the depths of the ocean");
// 		break;
// 	case "yellow":
// 		console.log("Don't eat the Yellow Snow");
// 		break;
// 	case "green":
// 		console.log("Green is the color of recycling");
// 		break;
// 	default:
// 		console.log("I don't know anything with that color");
// }



// var i = 100;

// for (; i > 0;) {
//     console.log(i);
//     i -= 5;
// }

// var random = Math.floor((Math.random()*50)+1); random < 50; random++;
// while(random % 2 == 0){
// 	random = Math.floor((Math.random()*50)+1);
// }
// 	console.log('Random odd number to skip is: ' + random);

// for (var i = 1; i < 50; i++) {
// 	if (i % 2 == 0) {
// 	continue;
// 	}
// 	if (i == random) {
// 		console.log('Yipes! Skipping number: ' + i);
// 	}else{
// 		console.log('Here is an odd number: ' + i);
// 	}
// }



// var myNameIs = 'Trav'; 

// function sayHello(someting){
// 	console.log('Hello from ' + someting);
	
// }

// sayHello(myNameIs);

// var random = Math.floor((Math.random()*100)+1);

// function isOdd(number){
// 	odd = (random % 2 == 0) ? console.log(number + ' is even') : console.log(number + ' is odd')
// 	return odd;
// }

// isOdd(random);




// do{
// 	var response = prompt('What is your name?');
	

// 	alert('Ello ' + response + ' welcome to my home.');

// 	do{
// 		var pizza = prompt('Do you like pizza? ' + 'Acceptable responses are "yes" or "no"');
// 		if (pizza == 'yes'){
// 			alert("That is the Bee's knee's");
// 			break;
// 		}else if (pizza == 'no'){
// 			alert("You are a lame person");
// 			break;
// 		}else {
// 			alert('You make me upset! Lets try this again...');
// 		}
// 	}while (pizza !== 'yes' || pizza !== 'no');
// } while (response == '');




(function (){
	var myNameIs = 'Trav'; 
	console.log('Hello from ' + myNameIs);
	
})();


(function (){
var random = Math.floor((Math.random()*100)+1);
(random % 2 == 0) ? console.log(random + ' is even') : console.log(random + ' is odd');
})();


