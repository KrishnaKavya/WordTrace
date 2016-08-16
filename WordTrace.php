<!--Session variables-->
<!--
The sessions contains the userID. A unique Table is created in the database with the login information ( Example: KrishnaWordTrace.)
-->
<?php
require_once('mysqli_connect.php'); 	//Including the 
session_start();
$user_login="Krishna";
$_SESSION['user_login']= $user_login;
$table_name=$user_login."_WordTrace";
$_SESSION['table_name']=$table_name;
$databaseName="wordtrace";
	

	//checking if the Table exits. 
	$checktable= "SHOW TABLES FROM `$databaseName` LIKE '$table_name'"; //zero rows = not exist
	$result =@mysqli_query($dbc, $checktable);
	$num_rows =@mysqli_num_rows($result);
	
	if(!$num_rows){
	//Creation of the Table 
	 $createTable="CREATE TABLE `wordtrace`.`$table_name` ( `Tile_ID` INT NOT NULL , `Text_File` VARCHAR(1000) NULL , `Image` VARCHAR(30) NULL , `Video` VARCHAR(30) NULL , `Audio` VARCHAR(30) NULL , PRIMARY KEY (`Tile_ID`));";

		 $createPoemSquare = @mysqli_query($dbc, $createTable);
		 if($createPoemSquare){
		 	echo "new table created";
		 }
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Word Trace</title>

	<!--Jquery Library-->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS Style Sheet-->
	<link rel="stylesheet" type="text/css" href="style/WordTraceStyle.css">

	<!--script file-->
	<script src="js/script.js"></script>
</head>

<body>
<div class="container-fluid">
<!--Title-->  
<header>
<h1 class="title">Word Trace</h1>
</header>
<!--Instructions Row 1-->
<div class="row">

<p class="Instructions">
<b>Instructions:</b>  Identify words you find confusing or interesting.  Select one of the words and left click on it.  Read the dictionary entries.  Fill out the form.  (See &quot; WordTrace&quot; in &quot;Resources&quot; for additional information on how to do this.)  Return to the poem and hover over the word to see the &quot; WordTrace &quot; you have created.  Follow the same procedure with other words.  In addition to difficult words, choose some familiar words to explore more deeply.  Document your work in your log and save screenshots of your results.</p>
</div>
<!--Row 2-->
<div class="row">
<!--First Column-->
<div class="col-sm-6 col-md-6 col-lg-6" >
<p id="poem">

<span onmouseenter="">Black</span> A, <span>white</span> E, <span>red</span> I, <span>green</span> U, <span>blue</span> O - <span>vowels</span>,<br>		
<span>Some</span> <span>day</span> I will <span>open</span> your <span>silent</span> <span>pregnancies</span>:<br>
A, <span>black</span> <span>belt</span>, <span>hairy</span> with <span>burst</span> <span>flies</span>,<br>
<span>Bumbling</span> and <span>buzzing</span> <span>over</span> <span>stinking</span> <span>cruelties</span>,<br>
<br>
Pits of night; E, candour of sand pavilions,<br>
High glacial spears, white kings, trembling Queen Anne's lace;<br>
I, bloody spittle, laughter dribbling from a face<br>
In wild denial or in anger, vermilions;<br>
<br>
U,&#46;&#46;&#46; divine movement of viridian seas,<br>
Peace of pastures animal-strewn, peace of calm lines<br>
Drawn on foreheads worn with heavy alchemies;<br>
<br>
O, supreme Trumpet, harsh with strange stridencies,<br>
Silences traced in angels and astral designs:<br>
O&#46;&#46;&#46;Omega&#46;&#46;&#46;the violet light of His Eyes!<br>

</p>
<!--End of first Column-->
</div>

<!--Second column-->
<div class="col-sm-6 col-md-6 col-lg-6" id="Phase Box" >
<!---->	
<div class="row" >
</div>
<div class="row">
</div>
	

<!--Second column end-->
</div>
<!--Second row end-->
</div>
<!--Container End-->
</div>


</body>
</html>