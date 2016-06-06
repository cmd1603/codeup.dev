'use strict';

// book:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
var books = [
	{
		'title': 'Harry Potter',
		'author': {
			'firstName': 'JK',
			'lastName': 'Rowling'
		}
	},

	{
		'title': 'Intrusion',
		'author': {
			'firstName': 'Mary',
			'lastName': 'McCluskey'
		}
	},

	{
		'title': 'The Church of Fear',
		'author': {
			'firstName': 'John',
			'lastName': 'Sweeney'
		}
	},	

	{
		'title': 'The Last Woman Standing',
		'author': {
			'firstName': 'Thelma',
			'lastName': 'Adams'
		}
	},

	{
		'title': 'Me Before You',
		'author': {
			'firstName': 'Jojo',
			'lastName': 'Moyes'
		}
	}

];

// log out the books array
console.log(books);

// book:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
	books.forEach(function (book, i) {

	
    console.log("Book #" + i);
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName + ' ' + book.author.lastName);
    console.log("---");
});// end loop here