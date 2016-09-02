<?php
require_once('mysqli_connect.php'); 	//Including the database connection and establishing connection to the database. 
session_start();						//Session start.
$tablename="wordtrace";		// The table name is fetched from the session variables 
//word should be changed.
$word=$_REQUEST['word'];	// The word is fetched from the url. 
$username=$_SESSION['user_login'];	// The user name of the user is fetched from the session variables
// The select query fetches the records with the word and the username. 
$selectQuery="SELECT * from $tablename where word='$word' and username='$username'";
//execution of the query. 
$result=@mysqli_query($dbc, $selectQuery);
//When the record exists. 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {	//fetching independent values into row variable.
    	/*
		  The explode function is used to split the array of words seperated with comma. 
		  The return type of explode function is array. The array is stored is variables. 
    	*/
    	$origin=explode(",",$row["origin"]);
    	$past=explode(",",$row["past"]);
    	$present=explode(",",$row["present"]);
    	$associations=explode(",",$row["associations"]);
    	$connections=explode(",",$row["connections"]);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Word Trace</title>

	<!--Jquery Library-->
	<script src="https://code.jquery.com/jquery-1.10.2.js">
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	</script>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">	
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/WordTraceStyle.css">
</head>
<body>

<!--Main container-->
<div class="container-fluid">
<!--The word trace is displayed in the first 7 coulmn grid of the page.-->
<div  class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
<!--
The container in inturn divided into a 3*3 matrix.
- 3 rows and 3 coulmns. 
 The content is spread randomly on the columns and rows. 
- The page is designed on a div design. 
  _________________________________
 |			|        | 			   |
 |	 origin	|		 | connections |	
 |__________|________|_____________|
 | 			|		 |			   |
 |  value 	|  word  |             |		
 |__________|________|_____________|
 |			|		 |			   |
 | Present  |		 | associations|
 |__________|________|_____________|
-->

<!--Row One-->
<div class="row">

<div  class="col-xs-7 ol-sm-7 col-md-6 col-lg-7">
<h2 class="origin">
<!--Origin segment--> 
<?php 
	/*
	 for each loop to access all the elements in the origin array. 
	*/
	foreach ($origin as $value) {
		echo $value;
		?> <br>
		<?php
	}
?>
</h2>
</div>
<!--connection segment-->
<div  class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
<h2 class="connections">
<?php 
	/*
	 for each loop to access all the elements in the origin array. 
	*/
	foreach ($connections as $value) {
		echo $value; 
		?> <br>
		<?php
	}

?>
</h2>
</div>
</div>

<!--Row two-->
<div class="row">
<div  class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
<!--past segment-->
<h2 class="past">
<?php 
	/*
	 for each loop to access all the elements in the origin array. 
	*/
	foreach ($past as $value) {
		echo $value;
		?> <br>
		<?php
	}
?>
</h2>
</div>

<div  class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
<!--Word-->
<h1 class="Word">
<?php echo $word?>
</h1>
</div>

<div  class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
</div>
</div>

<!--Row 3-->
<div class="row">
<div  class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
<!--present segment-->
<h2 class="present">
<?php
/*
	 for each loop to access all the elements in the origin array. 
	*/
foreach ($present as $value) {
		echo $value;
		?> <br>
		<?php
	}
?>
</h2>
</div>

<div  class=" col-xs-3 col-sm-4 col-md-4 col-lg-4">
</div>

<div  class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
<!--Association segment-->
<h2 class="associations">
<?php 
/*
	 for each loop to access all the elements in the origin array. 
	*/
foreach ($associations as $value) {
		echo $value;
		?> <br>
		<?php
	}

?>
</h2>
</div>
</div>
</div>

</div>

</body>
</html>