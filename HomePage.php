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

<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=black'" id="black" value="Black" name="black" class="word"/></span> A, <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=white'" value="white" name="white" class="word" /></span> E, <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=red'" value="red" name="red" class="word"/></span> I, <span>green</span> U, <span>blue</span> O - <span>vowels</span>,<br>		
<span>Some</span> <span>day</span> I will <span>open</span> your <span>silent</span> <span>pregnancies</span>:<br>
A, <span>black</span> <span>belt</span>, <span>hairy</span> with <span>burst</span> <span>flies</span>,<br>
<span>Bumbling</span> and <span>buzzing</span> <span>over</span> <span>stinking</span> <span>cruelties</span>,<br>
<br>
<span>Pits</span> of <span>night</span>; E, <span>candour</span> of <span>sand</span> <span>pavilions</span>,<br>
<span>High</span> <span>glacial</span> <span>spears</span>, <span>white</span> <span>kings</span>, <span>trembling</span> <span>Queen</span> <span>Anne's</span> <span>lace;</span><br>
<span>I</span>, <span>bloody</span> <span>spittle</span>, <span>laughter</span> <span>dribbling</span> <span>from</span> <span>a</span> <span>face</span><br>
<span>In</span> <span>wild</span> <span>denial</span> or in <span>anger</span>, <span>vermilions</span>;<br>
<br>
U,&#46;&#46;&#46; <span>divine</span> <span>movement</span> of <span>viridian</span> <span>seas</span>,<br>
<span>Peace</span> of <span>pastures</span> <span>animal-strewn</span>, <span>peace</span> of <span>calm</span> <span>lines</span><br>
<span>Drawn</span> on <span>foreheads</span> <span>worn</span> with <span>heavy</span> <span>alchemies</span>;<br>
<br>
O, <span>supreme</span> <span>Trumpet</span>, <span>harsh</span> with <span>strange</span> <span>stridencies</span>,<br>
<span>Silences</span> <span>traced</span> in <span>angels</span> and <span>astral</span> <span>designs:</span><br>
O&#46;&#46;&#46;<span>Omega</span>&#46;&#46;&#46;the <span>violet</span> <span>light</span> of His <span>Eyes!</span><br>

</p>
<!--End of first Column-->
</div>

<!--Second column-->
<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7"  id="phaseContainer" style="height:800px">
<!---->	
<iframe src="" name="phaseBox" id="phaseBox" width="150%" height="100%" frameborder="0">
	
</iframe>
<!--Second column end-->
</div>
<!--Second row end-->
</div>
<!--Container End-->
</div>
</body>
</html>