	"use strict"
 
	var storeNumber = function(event) {
		var operator = document.getElementById('operator');
		console.log(this);
		console.log(this.getAttribute('data-value'));
		if (operator.innerHTML != '' && leftOperand.value.indexOf(".") == -1 && rightOperand.value.indexOf(".") == -1) {
			leftOperand.value += '.';
			rightOperand.value += '.';
			var numberInput = document.getElementById('rightOperand');
			numberInput.innerHTML += this.getAttribute('data-value');
		} else {
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

