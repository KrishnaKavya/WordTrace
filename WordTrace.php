<?php
require_once('mysqli_connect.php'); 	//Including the database connection and establishing connection to the database. 
session_start();						//Session start.
$tablename=$_SESSION['table_name'];		// The table name is fetched from the session variables 
//word should be changed.
$word="black";

$selectQuery="SELECT * from krishna_wordtrace";
$result=@mysqli_query($dbc, $selectQuery);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$origin=$row["Origin"];
    	echo $origin;
    }
}

?>