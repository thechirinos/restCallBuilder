<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <title>Customer Support Rest Call Builder</title>
  <link rel="stylesheet" type="text/css" href="restCallBuilder.css" />
</head>
<body>
  <h1>Customer Support Rest Call Builder</h1>
  <span><a href="/restCallBuilder/restCallBuilder.html">Start over!</a></span>
  <h3>Put this in your browser!</h3>
  <span><em>Copy/pasting all of this <b>WILL</b> work in your browser (no extra spaces)</em></span>
  <br />
  <textarea id="selectAll" style="margin 2px; width: 1014px; height: 118px;" autofocus="focus"><?php echo $_POST["symwsURL"]; ?>
/rest/security/loginUser?&#10;
clientID=<?php echo $_POST["clientID"]; ?>&#10;
&login=<?php echo $_POST["login"]; ?>&#10;
&password=<?php echo $_POST["password"]; ?>
</textarea>
<script type="text/javascript">
    var textBox = document.getElementById("selectAll");
    textBox.onfocus = function() {
        textBox.select();

        // Work around Chrome's little problem
        textBox.onmouseup = function() {
            // Prevent further mouseup intervention
            textBox.onmouseup = null;
            return false;
        };
    };
</script>
  <hr>
  <div class="input_form">
	<h3>Get Session Token</h3>
	<br />
    <form action="restSessionToken.php" method="post" autocomplete="on">
      <label class="label">Symws URL:</label>
	  <input type="text" name="symwsURL" value="<?php echo $_POST["symwsURL"]; ?>"/>
      <label class="label">Client ID:</label>
	  <input type="text" name="clientID" value="<?php echo $_POST["clientID"]; ?>"/> 
      <label class="label">Login:</label>
	  <input type="text" name="login" value="<?php echo $_POST["login"]; ?>"/>
      <label class="label">Password:</label>
	  <input type="text" name="password" value="<?php echo $_POST["password"]; ?>"/>
      <button type="submit" method="post">Submit</button>
	  <button type="reset">Reset!</button>
	  <div class="spacer"></div>
    </form>
  </div>
  
  <hr>
  
  <div class="input_form">
    <h3>Online User Registration</h3>
	<br />
    <form action="restOUReg.php" method="post" autocomplete="on">
      <label class="label">Symws URL:</label>
	  <input type="text" name="symwsURL" value="<?php echo $_POST["symwsURL"]; ?>">
	  <label class="label">ClientID:</label>
	  <input type="text" name="clientID" value="<?php echo $_POST["clientID"]; ?>" required />
	  <label class="label">Session Token:</label>
	  <input type="text" name="sessionToken" placeholder="example: b96335b8-4856-43da-934e-9ee30975c692" required />
	  <label class="label">Patron Library ID:</label>
	  <input type="text" name="patronLibraryID" placeholder="example: DEWEY" required/>
      <label class="label">First Name:</label>
	  <input type="text" name="firstName" value="Sirsi" required/> 
	  <label class="label" >Middle Name:</label>
	  <input type="text" name="middleName" value="Dynix"/>
      <label class="label" >Last Name:</label>
	  <input type="text" name="lastName" value="Test" required/>
	  <label class="label" >Name Suffix:</label>
	  <input type="text" name="nameSuffix" value="Jr."/>
	  <label class="label" >Preferred Name:</label>
	  <input type="text" name="preferredName" value="SirsiDynix"/>
	  <label class="label" >Social Security:</label>
	  <input type="text" name="socialSecurityNumber" value="123-45-6789"/>
	  <label class="label" >Birth Date:</label>
	  <input type="text" name="birthDate" value="1950-01-01"/>
	  <label class="label" >PIN:</label>
	  <input type="text" name="pin" value="1111"/>
      <label class="label" >Street:</label>
	  <input type="text" name="street" value="123%20Fake%20Street" required/>      
	  <label class="label" >Apartment Number:</label>
	  <input type="text" name="apartment" value="1"/>
      <label class="label" >City:</label>
	  <input type="text" name="city" value="Lehi"/>	  
	  <label class="label" >State:</label>
	  <input type="text" name="state" value="UT" required/>
      <label class="label" >Postal Code:</label>
	  <input type="text" name="postalCode" value="84043" required/>
      <label class="label">Home Phone:</label>
	  <input type="text" name="homePhone" value="800-555-1234"/>
	  <label class="label">Email Address:</label>
	  <input type="text" name="emailAddress" value="cristian.chirinos@sirsidynix.com"/>

      <button type="submit" method="post">Submit</button>
	  <button type="reset">Reset!</button>
    </form>
  </div>
</body>

</html>
