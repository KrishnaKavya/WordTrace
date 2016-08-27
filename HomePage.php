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
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
<p id="poem">

<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=black'" id="black" value="Black" name="black" class="word"/></span> A, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=white'" value="white" name="white" class="word" /></span> E, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=red'" value="red" name="red" class="word"/></span> I, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=green'" value="green" name="green" class="word"/></span> U, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=blue'" value="blue" name="blue" class="word"/></span> O - 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=vowels'" value="vowels" name="vowels" class="word"/></span>,<br>		
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=some'" value="Some" name="some" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=day'" value="day" name="day" class="word"/></span> I will 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=open'" value="open" name="open" class="word"/></span> 
your 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=silent'" value="silent" name="silent" class="word"/></span>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=pregnancies'" value="pregnancies" name="pregnancies" class="word"/></span>:<br>
&nbsp;&nbsp;A, 
<span>black</span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=belt'" value="belt" name="belt" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=hairy'" value="hairy" name="hairy" class="word"/></span> 
with 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=burst'" value="burst" name="burst" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=flies'" value="flies" name="flies" class="word"/></span>,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Bumbling'" value="Bumbling" name="Bumbling" class="word"/></span> and 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=buzzing'" value="buzzing" name="buzzing" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=over'" value="over" name="over" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=stinking'" value="stinking" name="stinking" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=cruelties'" value="cruelties" name="cruelties" class="word"/></span>,<br>
<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Pits'" value="Pits" name="Pits" class="word"/></span> 
of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=night'" value="night" name="night" class="word"/></span>; 
E, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=candour'" value="candour" name="candour" class="word"/></span> 
of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=sand'" value="sand" name="sand" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=pavilions'" value="pavilions" name="pavilions" class="word"/></span>
,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=High'" value="High" name="High" class="word"/></span>
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=glacial'" value="glacial" name="glacial" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=spears'" value="spears" name="spears" class="word"/></span>
 , 
 <span>white</span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=kings'" value="kings" name="kings" class="word"/></span>, 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=trembling'" value="trembling" name="trembling" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Queen'" value="Queen" name="Queen" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Anne" value="Anne's" name="Anne's" class="word"/></span> 
 <span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=lace'" value="lace" name="lace" class="word"/></span>;<br>
&nbsp;&nbsp;<span>I</span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=bloody'" value="bloody" name="bloody" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=spittle'" value="spittle" name="spittle" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=laughter'" value="laughter" name="laughter" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=dribbling'" value="dribbling" name="dribbling" class="word"/></span> 
<span>from</span> <span>a</span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=face'" value="face" name="face" class="word"/></span><br>
&nbsp;&nbsp;<span>In</span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=wild'" value="wild" name="wild" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=denial'" value="denial" name="denial" class="word"/></span> or in 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=anger'" value="anger" name="anger" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=vermilions'" value="vermilions" name="vermilions" class="word"/></span>;<br>
<br>
&nbsp;&nbsp;U,&#46;&#46;&#46; 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=divine'" value="divine" name="divine" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=movement'" value="movement" name="movement" class="word"/></span> of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=viridian'" value="viridian" name="viridian" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=seas'" value="seas" name="seas" class="word"/></span>,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Peace'" value="Peace" name="Peace" class="word"/></span> of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=pastures'" value="pastures" name="pastures" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=animal'" value="animal-strewn" name="animal-strewn" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=peace'" value="peace" name="peace" class="word"/></span> of 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=calm'" value="calm" name="calm" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=lines'" value="lines" name="lines" class="word"/></span><br>

<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Drawn'" value="Drawn" name="Drawn" class="word"/></span> on 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=foreheads'" value="foreheads" name="foreheads" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=worn'" value="worn" name="worn" class="word"/></span> with 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=heavy'" value="heavy" name="heavy" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=alchemies'" value="alchemies" name="alchemies" class="word"/></span>;<br>
<br>
&nbsp;&nbsp;O, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=supreme'" value="supreme" name="supreme" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Trumpet'" value="Trumpet" name="Trumpet" class="word"/></span>, 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=harsh'" value="harsh" name="harsh" class="word"/></span> with 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=strange'" value="strange" name="strange" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=stridencies'" value="stridencies" name="stridencies" class="word"/></span>,<br>
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Silences'" value="Silences" name="Silences" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=traced'" value="traced" name="traced" class="word"/></span> in 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=angels'" value="angels" name="angels" class="word"/></span> and 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=astral'" value="astral" name="astral" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=designs'" value="designs" name="designs" class="word"/></span>:<br>
&nbsp;&nbsp;O&#46;&#46;&#46;
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Omega'" value="Omega" name="Omega" class="word"/></span>&#46;&#46;&#46;the 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=violet'" value="violet" name="violet" class="word"/></span> 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=light'" value="light" name="light" class="word"/></span> of His 
<span><input type="button" onclick="document.getElementById('phaseBox').src='http://localhost:1234/WordTrace/FormPage.php?word=Eyes'" value="Eyes" name="Eyes" class="word"/></span>!<br>

</p>
<!--End of first Column-->
</div>

<!--Second column-->
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"  id="phaseContainer" style="height:800px">
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