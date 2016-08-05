<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

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
	<link rel="stylesheet" type="text/css" href="style/FormPageStyle.css">

	<!--script File-->
	<script src="js/FormScript.js"></script>

</head>
<body>
<!--Main Div-->
<div class="container-fluid">
<div>
<!--Free Dictionary link-->
<div class="row">
	
</div>

<!--Form-->
<div class="row">
<!--Change to a, b,c and add an inner bullet for Origins-->
<ol type="a">
<li>
Definitions
	<ul>
		<li>Origins &nbsp;&nbsp; 
			<div class="input_fields_wrap">
				<input type="text" name="mytext[]" class="input">
				<button class="add_field_button">+</button>
			</div>
		</li> 

	<li>Past &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Past" class="input">  </li>	
	<li>Present &nbsp;&nbsp;<input type="text" name="Present" class="input"> </li> 
	</ul>
</li>
<li>
Associations &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Associations" class="input">
</li>	
<li>
Connections &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Connections" class="input">
</li>
</ol>
</div>
<!--Done Button-->
<div class="row">
<input type="button" name="Done" value="Done">
</div>
</div>
</div>

</body>
</html>