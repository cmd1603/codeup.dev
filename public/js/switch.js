"use strict"

var luckyNumber = Math.floor(Math.random()* 6)

var receipt = 60;
var luckyNumber0 = 0;
var luckyNumber1 = .10;
var luckyNumber2 = .25;
var luckyNumber3 = .35;
var luckyNumber4 = .50;
var luckyNumber5 = 1;

switch (luckyNumber) {
	case 0: 
	console.log("You will have to pay the original amount of $60");
	break;
	case 1: 
	console.log("You will have a 10 percent discount, $" + receipt * luckyNumber1);
	break;
	case 2: 
	console.log("You will have a 25 percent discount, $" + receipt * luckyNumber2);
	break;
	case 3: 
	console.log("You will have a 35 percent discount, $" + receipt * luckyNumber3);
	break;
	case 4: 
	console.log("You will have a 50 percent discount, $" + receipt * luckyNumber4);
	break;
	case 5: 
	console.log("You will have a 100 percent discount ");
	break;

}

var monthNumber = Math.floor(Math.random()* 12) + 1;
var month;

var jan = 1;
var feb = 2;
var mar = 3;
var april = 4;
var may = 5;
var june = 6;
var july = 7;
var aug = 8;
var sept = 9;
var oct = 10;
var nov = 11;
var dec = 12;

switch (monthNumber) {
	case 1:
	month = "jan";
	console.log("You are month" + jan);

}



