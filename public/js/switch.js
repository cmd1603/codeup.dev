"use strict"

var luckyNumber = Math.floor(Math.random()* 6)

var receipt = 60;
var discount;
var luckyNumber0 = 0;
var luckyNumber1 = .10;
var luckyNumber2 = .25;
var luckyNumber3 = .35;
var luckyNumber4 = .50;
var luckyNumber5 = 1;

switch (luckyNumber) {
	case 0:
		discount = 0;
		break;
	case 1:
		discount = 0.10;
		break;
	case 2:
		discount = 0.25;
		break;
	case 3:
		discount = 0.35;
		break;
	case 4:
		discount = 0.5;
		break;
	case 5:
		discount = 1;
		break;
}

var discoutedCost = receipt - (receipt * discount);

console.log('You got a ' + luckyNumber + ' and have to pay ' + '$' + discoutedCost);


var monthNumber = Math.floor(Math.random()* 12) + 1;
var month;

switch (monthNumber) {
	case 1:
		month = 'January';
		break;
	case 2:
		month = 'February';
		break;
	case 3:
		month = 'March';
		break;
	case 4:
		month = 'April';
		break;
	case 5:
		month = 'May';
		break;
	case 6:
		month = 'June';
		break;
	case 7:
		month = 'July';
		break;
	case 8:
		month = 'August';
		break;
	case 9:
		month = 'September';
		break;
	case 10:
		month = 'October';
		break;
	case 11:
		month = 'November';
		break;
	case 12:
		month = 'December';
		break;
}

console.log('You got a ' + monthNumber + ' which is the month of ' + month);

