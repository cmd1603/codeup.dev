(function(){
    "use strict";

    // TODO: Create person object with firstName and lastName properties.
    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    var person = {
    	firstName: "Chris",
    	lastName: "Davila",
        sayHello: function() {
            return this.firstName + ' ' + this.lastName;
        }
    };

    alert('Hello, ' + person.sayHello());

    console.log(person.sayHello() + ' says hello!');

})();