	"use strict"
 
	var storeNumber = function(event) {
		var operator = document.getElementById('operator');
		if (operator.innerHTML != '') {
			var numberInput = document.getElementById('rightOperand');
			numberInput.innerHTML += this.getAttribute('data-value');
		}
		else {
			var numberInput = document.getElementById('leftOperand');
			numberInput.innerHTML += this.getAttribute('data-value');
			}
		}
	
	
	var storeSecondInput = function(event) {
		var addOperator = document.getElementById('operator');
		addOperator.innerHTML = this.getAttribute('data-value');
	}

	var clearExcess = function() {
		var secondInput = document.getElementById('rightOperand');
		secondInput.innerHTML = '';
		var operator = document.getElementById('operator');
		operator.innerHTML = '';

	}

	var equalsOperator = function (event) {
		var firstInput = document.getElementById('leftOperand');
		var secondInput = document.getElementById('rightOperand');
		var operator = document.getElementById('operator');
		var operation;
		switch (operator.innerHTML) {
			case '*':
				operation = parseInt(firstInput.innerHTML) * parseInt(secondInput.innerHTML);
				break;
			case '/':
				operation = parseInt(firstInput.innerHTML) / parseInt(secondInput.innerHTML);
				break;
			case '+':
				operation = parseInt(firstInput.innerHTML) + parseInt(secondInput.innerHTML);
				break;
			case '-':
				operation = parseInt(firstInput.innerHTML) - parseInt(secondInput.innerHTML);
				break;
		}
		console.log(operator.innerHTML, operator);

		var answerNum = document.getElementById('leftOperand');
		answerNum.innerHTML = operation;
		clearExcess();
	}



	var clearAllFields = function () {
		var firstInput = document.getElementById('leftOperand');
		firstInput.innerHTML = '';
		var secondInput = document.getElementById('rightOperand');
		secondInput.innerHTML = '';
		var operator = document.getElementById('operator');
		operator.innerHTML = '';
	}

	var numberInput = document.getElementsByClassName('numbers');
		for (var i = 0; i < numberInput.length; i++) {
			numberInput[i].addEventListener('click', storeNumber)
		}

	var operatorInput = document.getElementsByClassName('symbol');
		for (var i = 0; i < operatorInput.length; i++) {
			operatorInput[i].addEventListener('click', storeSecondInput)
		}

	var runOperation = document.getElementById('equals');
		runOperation.addEventListener('click', equalsOperator);

	var clearAll = document.getElementById('clear');
		clearAll.addEventListener('click', clearAllFields);

	//var makeNeg = document.getElementById('negativePositiveButton');
		//makeNeg.addEventListener('click', makeNumberNegative);
	
/*	
	//The variables below are for all buttons
	var buttons = document.getElementsByClassName('numbers', 'symbol');
	var clearButn = document.getElementById('clear')[0];

	var leftOperand = document.getElementById('leftOperand');
	var operator = document.getElementById('operator');
	var rightOperand = document.getElementById('rightOperand');
	
	var	addButn = document.getElementById('sum').value;
	var subtractButn = document.getElementById('rest').value;
	var mulitplyButn = document.getElementById('multiply').value;
	var divideButn = document.getElementById('divide').value;
	var equalsButn = document.getElementById('equals').value;
	//var numbersButn = document.getElementsByClassName('numbers');
	
	function displayUserInput() {

      	for (var i = 0; i < leftOperand.length; i++) {
	      	if (leftOperand[i].innerHTML === '÷') {
		         operator.innerHTML  += '/';
		      } else leftOperand[i].innerHTML === 'x' {
		         operator.innerHTML  += '*';
		
				}

	function clickOperator () {



	}

	//Adding an event listener for every button

	buttons.addEventListener('click', displayUserInput, false);

	addButn.addEventListener('click', '', false);

	subtractButn.addEventListener('click','', false);

	mulitplyButn.addEventListener('click','', false);

	divideButn.addEventListener('click', '' , false);

	clearButn.addEventListener('click','', false);

	equalsButn.addEventListener('click','', false);
*/
