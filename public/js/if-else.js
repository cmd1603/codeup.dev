"use strict"

var grade1 = 70;
var grade2 = 80;
var grade3 = 95;

var combinedGrades = grade1 + grade2 + grade3;
var numberofGrades = 3;
var aweseomeGrade = 80;

var average = combinedGrades / numberofGrades;

if (average > aweseomeGrade) {
	console.log("You're awesome!");
} else {
	console.log("You need to practice more"); 
}



var cameron = 180;
var ryan = 250;
var	george = 320;
var discount = .35;
var discountRequirement = 200;

var cameronDiscount;
if (cameron > discountRequirement) {
		cameronDiscount = cameron - (cameron * discount);
} else {
		cameronDiscount = cameron;
}

console.log('Cameron: ' + cameron + ' , ' + cameronDiscount);
	

var ryanDiscount;
if (ryan > discountRequirement) {
		ryanDiscount = ryan - (ryan * discount);
} else {
		ryanDiscount = ryan;
}

console.log('Ryan: ' + ryan + ' , ' + ryanDiscount);

var georgeDiscount;
if (george > discountRequirement) {
		georgeDiscount = george - (george * discount);
} else {
		georgeDiscount = george;
}

console.log('George: ' + george + ' , ' + georgeDiscount);


var flipACoin = Math.floor(Math.random()* 2)

	if (flipACoin == 0) {
		console.log("Buy a car")
	} else
		console.log("Buy a house");

