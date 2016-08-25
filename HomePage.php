<!--Session variables-->

<?php
require_once('mysqli_connect.php'); 	//Including the database connection and establishing connection to the database. 
session_start();						//Session start.
$user_login="grifee";						
$_SESSION['user_login']= $user_login;	//Adding user login id to the session variables
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
	<link rel="stylesheet" type="text/css" href="style/HomePageStyle.css">

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
<b>Instructions:</b>  Identify words you find confusing or interesting.  Select one of the words and left click on it.  Read the dictionary entries.  Fill out the form.  (See &quot; WordTrace&quot; in &quot;Resources&quot; for additional information on how to do this.)  Return to the poem and hover over the word to see the &quot; WordTrace &quot; you have created.  Follow the same procedure with other words.  In addition to difficult words, choose some familiar words to explore more deeply.  Document your work in your log and save screenshots of your results.
</p>
</div>
<!--Row 2-->
<div class="row" >
<!--First Column-->
<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" >
<p id="poem">

<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=black'" value="Black" name="black" /></span> A, <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=white'" value="white" name="white"/></span> E, <span>red</span> I, <span>green</span> U, <span>blue</span> O - <span>vowels</span>,<br>		
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
<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7"  id="phaseContainer" style="border:solid 2px; height:800px">
<!---->	
<iframe src="" name="phaseBox" id="phaseBox" style="border:solid 2px;" width="100%" height="100%">
	
</iframe>
<!--Second column end-->
</div>
<!--Second row end-->
</div>
<!--Container End-->
</div>
</body>
</html>