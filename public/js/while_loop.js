'use strict'

// This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;
var cones;
var remaining = allCones;
var msg;

do {
	var cones = Math.floor(Math.random() * 5) + 1;
	remaining -= cones;
	msg = cones + ' cones sold...'; 
	if (remaining < 0) {
		msg = 'Cannot sell you ' + cones + ' I only have ' + (remaining + cones) + ' ...';
	
};

	if (remaining == 0) {
		msg = 'Yay, I sold them all!';
	};

	console.log(msg);

} while(remaining > 0);


var num = 2;
do {
	console.log(num)
	num = num * 2
} while (num <= 65536);

