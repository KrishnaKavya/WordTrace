<?php
require_once('mysqli_connect.php'); 	//Including the database connection and establishing connection to the database. 
session_start();						//Session start.
$tablename=$_SESSION['table_name'];		// The table name is fetched from the session variables 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

	<!--Jquery Library-->
	<script src="https://code.jquery.com/jquery-1.10.2.js">
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
	</script>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">	
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS Style Sheet-->
	<link rel="stylesheet" type="text/css" href="style/FormPageStyle.css">

	<!--script File-->
	<script src="js/FormScript.js">	
	</script>

</head>
<body>
<!--Main Div-->
<div class="container-fluid">
<div>
<!--Free Dictionary link-->
<div id="siteloader" class="row">
</div>
<!--
From Start. 
The ordered list consists of the form with the input fields 
a. Definitions
	0 Origins
	0 Past
	0 Present 
b. Associations and Connections.
-->
<form method="POST" >
<!--Form-->
<div class="row">
<!--Change to a, b,c and add an inner bullet for Origins-->
<ol type="a">
<li>Definitions
	<ul>
		<li>Origins
			<div id="origins_wrap">			<!-- The Div for origins  The div acts as a wrap to the input fields and buttons -->
				<input type="text" name="origins[]" class="input">	<!--Input fields for origins. origins[] acts as an array variable-->
				<button class="add_field_button" id="Add_Origins"><img src="images/addIcon.jpeg" height="20" width="20" alt="add button"></button> 
				<!--Button to add Input fields to the Origin.-->
			</div>
		</li> 

		<li>Past
			
			<div id="Past_wrap">	<!-- The Div for Past. The div acts as a wrap to the input fields and buttons -->
			<input type="text" name="past[]" class="input"> <!--Input fields for past. past[] acts as an array variable-->
			<button class="add_field_button" id="Add_Past"><img src="images/addIcon.jpeg" height="20" width="20" alt="add button"></button>
			<!--Button to add Input fields to the Origin.-->
			</div>
		</li>	
	


		<li>Present
			<div id="Present_wrap">	<!-- The Div for Present. The div acts as a wrap to the input fields and buttons -->
			<input type="text" name="present[]" class="input"> <!--Input fields for present. present[] acts as an array variable-->
			<button class="add_field_button" id="Add_Present"><img src="images/addIcon.jpeg" height="20" width="20" alt="add button"></button>
			<!--Button to add Input fields to the Origin.-->
			</div>
		</li> 
	</ul>
</li>
<li>Associations
	<div id="Associations_wrap"> <!-- The Div for Associations. The div acts as a wrap to the input fields and buttons -->
	<input type="text" name="associations[]" class="input"> <!--Input fields for associations. associations[] acts as an array variable-->
	<button class="add_field_button" id="Add_Associations"><img src="images/addIcon.jpeg" height="20" width="20" alt="add button"></button>
	<!--Button to add Input fields to the Origin.-->
	</div>
</li>	
<li>Connections 
	<div id="Connections_wrap"> <!-- The Div for Connections. The div acts as a wrap to the input fields and buttons -->
	<input type="text" name="connections[]" class="input"> <!--Input fields for connections. connections[] acts as an array variable-->
	<button class="add_field_button" id="Add_Connections"><img src="images/addIcon.jpeg" height="20" width="20" alt="add button"></button>
	<!--Button to add Input fields to the Origin.-->
	</div>

</li>
</ol>
<!--Done Button-->
<div class="row">
<input type="submit" name="Done" value="Done" class="submit"> 	<!-- Submit button of the form-->
</div>
</div>
</form>

<?php
//The isset is set to true on click of submit button. 
if(isset($_POST["Done"])){
	/*
	The implode function converts the array variable to string seperated by ",". All the input fields in the form are converted to strings. 
	The string is assigned to php variables.  
	*/
    $origins = implode(", ", $_POST["origins"]);
 	$past = implode(", ", $_POST["past"]);
 	$present=implode(",", $_POST["present"]);
 	$associations=implode(",", $_POST["associations"]);
 	$connections=implode(",", $_POST["connections"]);
 	/*
	The Insert Query takes the word and the input values as parameters. The table name is fetched from the . The query is executed to insert in the database. 
 	*/

 	$insertquery= "INSERT INTO `$tablename` (`word`, `Origin`, `past`, `present`, `associations`, `connections`) VALUES ('green', '$origins', '$past', '$present', '$associations', '$connections');";
 	$insertresult =@mysqli_query($dbc, $insertquery);
 	$SelectQuery="Select * from wordtrace";
	
}
?>
</div>
</div>

</body>
</html>