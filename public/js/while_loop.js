'use strict'

// This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;
var conesSold = 0;
do {
	var cones = Math.floor(Math.random() * 5) + 1;
	if (cones > allCones - conesSold) {
		console.log('Cannot sell you ' + cones + ' I only have ' + (allCones - conesSold));
	
} else {	
	console.log(cones + ' cones sold...');
	conesSold = conesSold + cones;
}
} while(conesSold <= allCones);
		console.log('Yay I sold them all');

// This is how you get a random number between 1 and 5


var num
