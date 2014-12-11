var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

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

switch (color){
	case "red":
		console.log("Red is the color of danger");
		break;
	case "orange":
		console.log("Orange is the color of a sunset");
		break;
	case "blue":	
		console.log("Blue is the color of the depths of the ocean");
		break;
	case "yellow":
		console.log("Don't eat the Yellow Snow");
		break;
	case "green":
		console.log("Green is the color of recycling");
		break;
	default:
		console.log("I don't know anything with that color");

}