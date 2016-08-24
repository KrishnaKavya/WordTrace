<?php
require_once('mysqli_connect.php'); 	//Including the database connection and establishing connection to the database. 
session_start();						//Session start.
$tablename=$_SESSION['table_name'];		// The table name is fetched from the session variables 
//word should be changed.
$word=$_REQUEST['word'];

$selectQuery="SELECT * from $tablename where word='$word'";
$result=@mysqli_query($dbc, $selectQuery);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
    	$origin=explode(",",$row["Origin"]);
    	$past=explode(",",$row["past"]);
    	$present=explode(",",$row["present"]);
    	$associations=explode(",",$row["associations"]);
    	$connections=explode(",",$row["connections"]);


//    	echo $origin.$past.$present.$associations.$connections;
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

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
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
<div class="container">

<div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!--Row One-->
<div class="row">

<div  class="col-xs-6 ol-sm-6 col-md-6 col-lg-6">
<h2 class="origin">
<?php 
	foreach ($origin as $value) {
		echo $value;
		?> <br>
		<?php
	}
?>
</h2>
</div>

<div  class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<h2 class="connections">
<?php 
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
<h2 class="past">
<?php 
	foreach ($past as $value) {
		echo $value;
		?> <br>
		<?php
	}
?>
</h2>
</div>

<div  class="col-xs-3 col-sm-4 col-md-4 col-lg-4">
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
<h2 class="present">
<?php
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
<h2 class="associations">
<?php 

foreach ($associations as $value) {
		echo "<script>alert('word');</script>";
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