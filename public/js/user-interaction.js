		// todo: Ask the user for their name.
		//       Keep asking if an empty input is provided.
		var userName = "";
		
		while (userName === "") {
			userName = prompt("Hi, what is your game?")
		}
				
		// todo: Show an alert message that welcomes the user based on their input.
		alert("Greeting, " + userName + "!");
		// todo: Ask the user if they like pizza.
		//       Based on their answer show a creative alert message.
		var response = prompt("Do you like pizza, " + userName + "?");

			if (response === 'yes') {
				alert("Awesome, I like pizza too!");
			} else {
				alert("Really? I thought everyone liked pizza...");
		}