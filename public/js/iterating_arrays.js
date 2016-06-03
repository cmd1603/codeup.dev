'use strict'

			
			var names = ['Ashley', 'Valerie', 'Zelina', 'Diana'];
			// todo:
			// Create a log statement that will log the number of elements in the names array.
				console.log("There are " + names.length + " names in the names array.");
			
			for (var i = 0; i < names.length; i++) {
				console.log('Names at index ' + i + ' is ' + names[i]);
			}

				console.log("ForEach loop:");
			names.ForEach(function (element, index, array) {
				console.log('')
			}

				console.log('Name at index ' + index + ' is ' + element);
			});