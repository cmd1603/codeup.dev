<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My First HTML Form</title>
	</head>
	<body>
      <form method="POST" action="/my_first_form.php">
        <p>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Enter Your Username">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Enter Your Username">
        </p>
        <p>
            <button type="submit">Login</button>
        </p>
      </form>

      <div>
        
      <div>
            <label for="username">To:</label>
            <input id="To" name="To" type="text">
      </div>

      <div>
            <label for="username">From:</label>
            <input id="From" name="From" type="text">
      </div>

            <div>
            <label for="username">Subject:</label>
            <input id="Subject" name="Subject" type="text">
      </div>

      <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Content Here"></textarea>

      <form method="POST" action="http://requestb.in/oy99m0oy">
        <input type="checkbox" id="copy" name="copy" value="yes" checked>
      <label for="mailing_list">Save a copy to sent folder?</label>

      <div>
          <button type="send">Send</button>
      </div>

    	<h2>Enter Login Info</h2>
    	<form method="POST" action="http://requestb.in/oy99m0oy">
    		<input type="checkbox" id="mailing_list" name="mailing list" value="yes" checked>
           <label for="mailing_list">Sign Me up for the mailing list!</label>

      <h2>Enter Login Info</h2>
      <form method="POST" action="http://requestb.in/oy99m0oy">
        <input type="checkbox" id="mailng_list" name="mailing list" value="yes" checked>


            <h2>Multiple Choice Test</h2>

            <p>What is the capital of Texas?</p>
            <label>
            	<input type="radio" name="q1" value="houston">
                Houston
            </label>
            <label>
            	<input type="radio" name="q1" value="dallas">
                Dallas
            </label>
            <label>
            	<input type="radio" name="q1" value="austin">
                Austin
            </label>
            <label>
            	<input type="radio" name="q1" value="san antonio">
                San Antonio
            </label>
            
            <button type="submit">Submit</button> 

            <p>What operating systems have you used?</p>
            <label><input type="checkbox" id="os1" name="os[]" value="linux"> Liunx</label>
            <label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
            <label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>            

            
    	<h2>Select Testing</h2>
            <form method="POST" action="http://requestb.in/oy99m0oy">            
             	<label for="rain">Will it rain today? </label>
  					<select id="rain" name="rain">
    					<option value="1">Yes</option>
    					<option value="0">No</option>
  					</select>
              
              <button type="submit">Submit</button>
       		</form>
        
          		<label for="os">What operating systems have you used? </label>

            <div>
  					<select id="os" name="os[]" multiple>
                    	<option value="linus">Linux</option>
                   	<option value="osx">OS X</option>
                    	<option value="windows">Windows</option>
  					</select>
            </div>
            <div>
  				    <button type="submit">Submit</button>
   	    	   </div>
	</body>
</html>