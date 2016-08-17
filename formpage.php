<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

	<!--Jquery Library-->
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"/>
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--CSS Style Sheet-->
	<link rel="stylesheet" type="text/css" href="style/FormPageStyle.css">

	<!--script File-->
	<script src="js/FormScript.js"></script>

</head>
<body>
<!--Main Div-->
<div class="container-fluid">
<div>
<!--Free Dictionary link-->
<div id="siteloader" class="row" width="500px" height="500px">
	
</div>

<form method="POST" >
<!--Form-->
<div class="row">
<!--Change to a, b,c and add an inner bullet for Origins-->
<ol type="a">
<li>Definitions
	<ul>
		<li>Origins
			<div id="origins_wrap">
				<input type="text" name="origins[]" class="input">
				<button class="add_field_button" id="Add_Origins"><img src="images/addIcon.jpeg" height="20px" width="20px"></button>
			</div>
		</li> 

		<li>Past
			<div id="Past_wrap">
			<input type="text" name="past[]" class="input">
			<button class="add_field_button" id="Add_Past"><img src="images/addIcon.jpeg" height="20px" width="20px"></button>
			</div>
		</li>	
	


		<li>Present
			<div id="Present_wrap">
			<input type="text" name="present[]" class="input"> 
			<button class="add_field_button" id="Add_Present"><img src="images/addIcon.jpeg" height="20px" width="20px"></button>
			</div>
		</li> 
	</ul>
</li>
<li>Associations
	<div id="Associations_wrap">
	<input type="text" name="associations[]" class="input">
	<button class="add_field_button" id="Add_Associations"><img src="images/addIcon.jpeg" height="20px" width="20px"></button>
	</div>
</li>	
<li>Connections 
	<div id="Connections_wrap">
	<input type="text" name="connections[]" class="input">
	<button class="add_field_button" id="Add_Connections"><img src="images/addIcon.jpeg" height="20px" width="20px"></button>
	</div>
</li>
</ol>
<!--Done Button-->
<div class="row">
<input type="submit" name="Done" value="Done">
</div>
</div>
</form>

<?php
if(isset($_POST["Done"])){
    $origins = implode(", ", $_POST["origins"]);
 	echo $_POST["past"];

    if(strlen($origins)==0){
    	echo "origin is empty";
    }else{
    	echo $origins;
    }
}
?>
</div>
</div>

</body>
</html>